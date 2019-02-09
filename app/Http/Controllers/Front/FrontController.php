<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;
use DB;
use Illuminate\Support\Facades\Redis;


class FrontController extends Controller
{
    public function getIndex() {
        try {
            $offers = Ad::where('data->type', 'offer')->orderby('id', 'desc')->limit(20)->get();
            $requests = Ad::where('data->type', 'request')->orderby('id', 'desc')->limit(20)->get();
            $posts_count = DB::table('posts')->count();
            return view('front.index', [
                'offers' => $offers,
                'requests' => $requests,
                'posts_count' => $posts_count,
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
                'message' => $request->get('message'),
                'price' => $request->get('price'),
                'type' => $request->get('type'),
                'location' => $request->get('location'),
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'public_id' => str_random(8)
            ];

            if ($request->has('other_currency')) {
                $data['other_currency'] = $request->get('other_currency');
            }

            /*
            $ad = Ad::create([
                'user_id' => $request->user()->id ?? null,
                'data' => json_encode($data)
            ]);

            */
            $ad = new Ad;
            $ad->user_id = $request->user()->id ?? null;
            $ad->data = $data;
            $ad->save();


         //   Redis::incr('ads');
           // Redis::publish('ads_notifications', json_encode($data));

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
            $ads = Ad::where('data->type', 'offer')->orderby('id', 'desc')->get();
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
        $ads = Ad::where('data->type', 'request')->orderBy('id', 'desc')->get();
        return view('front.ads', [
            'title' => $title,
            'ads' => $ads
        ]);
    }

    public function getAd($id, $slug) {
        $ad = Ad::where('data->public_id', $id)->first();
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

    public function getCgu() {
        return view('front.cgu');
    }
}
