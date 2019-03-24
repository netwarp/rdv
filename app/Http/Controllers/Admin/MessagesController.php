<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class MessagesController extends Controller
{
    public function index() {
        $messages = DB::table('messages')->paginate(8);

        return view('admin.messages.index', compact('messages'));
    }

    public function edit($id) {
        $message = DB::table('messages')->where('id', $id)->first();

        return view('admin.messages.edit', compact('message'));
    }
}
