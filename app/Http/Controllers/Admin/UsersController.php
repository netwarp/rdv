<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UsersController extends Controller
{
    public function index() {
        $users = DB::table('users')->paginate(20);

        return view('admin.users.index', compact('users'));
    }
}
