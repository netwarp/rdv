<?php

namespace App\Http\Controllers\Profil;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Hash;

class SettingsController extends Controller
{
    public function getIndex() {
        return view('profil.settings.index');
    }

    public function postIndex(Request $request) {
        switch ($request->get('setting')) {
            case 'name':

                $request->validate([
                    'name' => 'required'
                ]);

                $request->user()->update([
                    'name' => $request->get('name')
                ]);

                return redirect()->back()->with('success', 'Name updated');

                break;
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
                            if ( $value != Auth::user()->email) {
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
            case 'description':
                $request->validate([
                    'description' => 'required | max:128'
                ]);

                $request->user()->update([
                    'description' => $request->get('description')
                ]);

                return redirect()->back()->with('success', 'description updated');

                break;
            default:
                # code...
                break;
        }
    }
}
