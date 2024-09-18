<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        $user = DB::table('users')->where('email', session()->get('email'))->first();
        return view('profile', compact('user'));
    }

    public function edit(){
        $user = DB::table('users')->where('email', session()->get('email'))->first();
        return view('edit', compact('user'));
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'fname' => 'required|string|max:255|min:5',
            'lname' => 'string|max:50',
            'email' => 'required|email|max:50',
            'bio' => 'nullable',
            'password' => 'required|max:16|min:6',
        ]);
        $password = array_pop($validated);
        $user = DB::table('users')->where('email', session()->get('email'))->update([
            ...$validated,
            'password' => $password,
        ]);

        if ($user>0) {
            session()->regenerate();
            $request->session()->put('email', $validated['email']);
            return to_route('user.profile');
        }
        return back()->with('error_msg', 'Email and Password Not Match.');
    }
}
