<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use Auth;

class SettingsController extends Controller
{
    public function index() {
    	return view('admin.settings.index');
    }

    public function postSettings(Request $request) {
    	switch ($request->get('setting')) {
    		case 'password':
    			
    			$request->validate([
    				'old_password' => [
    					'required',
    					'max:255',
    					function($attribute, $value, $fail) {
    						if (! Hash::check($value, Auth::user()->password )) {
    							$fail('The old password does not match');
    						}
    					}
    				],
    				'password' => 'required | max:255 | same:confirmation',
    				'confirmation' => 'required | max:255'
    			]);

    			$request->user()->update([
    				'password' => Hash::make($request->get('password'))
    			]);

    			return redirect()->back()->with('success', 'password updated');

    			break;
    		case 'email':
    			
    			$request->validate([
    				'old_email' => [
    					'required',
    					'max:255',
    					function($attribute, $value, $fail) {
    						if (! Auth::user()->email) {
    							$fail('The old email does not match');
    						}
    					}
    				],
    				'email' => 'required | email | max:255 | same:confirmation',
    				'confirmation' => 'required | max:255'
    			]);

    			$request->user()->update([
    				'email' => $request->email
    			]);

    			return redirect()->back()->with('success', 'email updated');

    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
