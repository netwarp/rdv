<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use DB;
use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;
use App\User;
use File;

class FrontController extends Controller
{
    public function getIndex() {
        try {
            $offers = Ad::where('type', 'offer')->orderby('id', 'desc')->limit(20)->get();
            $requests = Ad::where('type', 'request')->orderby('id', 'desc')->limit(20)->get();
            //$posts_count = DB::table('posts')->count();

            return view('front.index', [
                'offers' => $offers,
                'requests' => $requests,
           //     'posts_count' => $posts_count,
            ]);
        } catch ( \Exception $e ) {
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function getPlaceAd() {
        try {
            $currencies = [
                'bitcoin',
                'ether',
                'monero',
                'litecoin',
                'dodgecoin',
                'bytecoin',
                'zero-coin',
                'z-cash',
                'ripple',
                'iota',
                'stratis'
            ];
            return view('front.placeAd', compact('currencies'));
        } catch ( \Exception $e ) {
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function postPlaceAd(Request $request) {
        try {
            $this->validate($request, [
                'currency' => 'required',
                'title' => 'required',
                'message' => 'required',
                'price' => 'required',
                'location' => 'required',
                'name' => 'required',
                'email' => 'required | email',
                'cgu' => 'required'
            ]);

            $data = [
                'currency' => $request->get('currency'),
                'title' => $request->get('title'),
                'slug' => str_slug($request->get('title')),
                'message' => $request->get('message'),
                'price' => $request->get('price'),
                'type' => $request->get('type'),
                'location' => $request->get('location'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
            ];

            if ($request->has('other_currency')) {
                $data['other_currency'] = $request->get('other_currency');
            }

            $ad = new Ad;
            $ad->user_id = $request->user()->id ?? null;

            foreach ($data as $key => $value) {
                $ad[$key] = $value;
            }

            $ad->save();

            if ($request->user()) {
                $user = User::findOrFail($request->user()['_id']);

                $ads = $user->ads;
                array_unshift($ads, $ad['_id']);
                $user->save(); 
            }


            if ($request->get('type') == 'offer') {
                $redirectRoute = 'front.getOffers';
            }
            else if ($request->get('type') == 'request') {
                $redirectRoute = 'front.getRequests';
            }
            else {
                throw new Exception('error');
            }
            return redirect()->route($redirectRoute)->with('success', 'Votre annonce a bien été crée');

        } catch ( \Exception $e ) {
            logger($e);
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function getOffers() {
        try {
            $title = 'Offres';
            $ads = Ad::where('type', 'offer')->orderby('id', 'desc')->get();
            return view('front.ads', [
                'title' => $title,
                'ads' => $ads
            ]);
        } catch (\Exception $e) {
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function getRequests() {
        $title = 'Demandes';
        $ads = Ad::where('type', 'request')->orderBy('id', 'desc')->get();
        return view('front.ads', [
            'title' => $title,
            'ads' => $ads
        ]);
    }

    public function getAd($id, $slug) {
        $ad = Ad::where('_id', $id)->first();
        return view('front.ad', compact('ad'));
    }

    public function getCurrencies() {
        try {
            return view('front.currencies');
        } catch (\Exception $e) {
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function getTools() {
        return view('front.tools');
    }

    public function getCgu() {
        return view('front.cgu');
    }

    public function getAbout() {
        return view('front.about');
    }

    public function getContact() {
        return view('front.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required'
        ]);
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'ip' => $request->ip()
        ];
        DB::table('messages')->insert(['data' => json_encode($data), 'created_at' => Carbon::now() ]);
        return redirect()->back()->with('success', 'Votre message a bien été envoyé, nous vous enverrons une réponse dans les meilleurs délais');
    }

    public function getApi() {
        return view('front.api');
    }

    public function getCurves() {
        try {
            $data = Redis::get('data');
            $data = json_decode($data);

            $currencies = $data->data;
            $timestamp = $data->timestamp;
            $timestamp = Carbon::createFromTimestamp($timestamp);
      
            if (is_iterable($currencies)) {
                return view('front.curves', compact('currencies', 'timestamp'));
            }
            else {
                return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
            }
        } catch (\Exception $e) {
            \Debugbar::addException( $e );
            return redirect()->back()->with( 'error', 'Une erreur est survenue, merci de ré-essayer' );
        }
    }

    public function test() {

    }
}
