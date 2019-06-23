<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ad;
//use App\Models\Rate;

class ProfilController extends Controller
{
    public function getindex(Request $request) {
        $ads = Ad::where('user_id', $request->user()->id)->count();
      #  $rates = Rate::where('rated_user_id', $request->user()->id)->where('score', 'yes')->count();
        return view('profil.index', compact('ads'));
    }
}
