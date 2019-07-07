<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ads = Ad::where('user_id', $request->user()->id)->get();

        return view('profil.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrfail($id);

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

        return view('profil.ads.edit', compact('ad', 'currencies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'currency' => $request->get('currency'),
            'title' => $request->get('title'),
            'message' => $request->get('message'),
            'price' => $request->get('price'),
            'status' => $request->get('status'),
            'type' => $request->get('type'),
            'location' => $request->get('location'),
        ];

        $ad = Ad::findOrfail($id);

        foreach ($data as $key => $value) {
            $ad[$key] = $value;
        }

        $ad->save();

        return redirect()->action('Profil\AdsController@index')->with('success', 'Annonce mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ad::destroy($id);

        return redirect()->back()->with('success', 'Annonce supprimée');
    }
}
