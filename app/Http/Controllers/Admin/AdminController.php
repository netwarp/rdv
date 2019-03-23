<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    public function getIndex() {
        $messages = DB::table('messages')->get();
        $ads = DB::table('ads')->count();

        return view('admin.index', compact('messages', 'ads'));
    }
}
