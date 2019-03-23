<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;

class AdsController extends Controller
{
    public function index() {
        $ads = Ad::paginate(20);

        return view('admin.ads.index', compact('ads'));
    }

    public function edit($id) {
        $ad = Ad::findOrFail($id);

        return view('admin.ads.edit', compact('ad'));
    }

    public function update(Request $request, $id) {
        $ad = Ad::findOrFail($id);

        $data = [
            'currency' => $request->get('currency'),
            'type' => $request->get('type'),
            'title' => $request->get('title'),
            'price' => $request->get('price'),
            'message' => $request->get('message'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'location' => $request->get('location'),
            'public_id' => $request->get('public_id'),
        ];

        $ad->data = $data;
        $ad->save();

        return redirect()->action('Admin\AdsController@index')->with('success', 'Ad updated');
    }

    public function destroy(Request $request, $id) {
        $ad = Ad::findOrFail($id);

        $ad->delete();

        return redirect()->back()->with('success', 'Ad deleted');
    }
}
