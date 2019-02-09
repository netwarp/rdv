<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Rate;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function getOffers() {
        $ads = DB::table('ads')->where('data->type', 'offer')->get();
        return response()->json($ads);
    }

    public function getRequests() {
        $ads = DB::table('ads')->where('data->type', 'request')->get();
        return response()->json($ads);
    }

    public function postRate(Request $request) {
        if ($request->get('rater') && $request->get('rated') && $request->get('rate')) {
            $rate = Rate::firstOrNew([
                'rater_user_id' => $request->get('rater'),
                'rated_user_id' => $request->get('rated'),
            ]);
            $rate->score = $request->get('rate');
            $rate->save();
            return response()->json(['success' => 'success'], 200);
        } else {
            return response()->json(['error' => 'invalid'], 401);
        }
    }
}
