<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function registerPage():View {
        return view('register');
    }


    public function loginPage():View {
        return view('login');
    }


    // register a user
    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:5',
            'username' => 'required|max:15|min:3',
            'email' => 'required|email|max:50',
            'password' => 'required|max:16|min:6'
        ]);

        $password = array_pop($validated);
        $name = explode(" ", $validated['name']);
            if (count($name)> 1) {
                $lname = array_pop($name);
                $fname = implode(" ", $name);
            }else{
                $lname = null;
                $fname = $validated['name'];
            }
        

        $user = DB::table('users')->insert([
            'fname' => $fname,
            'lname' => $lname,
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($password),
            'bio' => 'Less Talk, More Code 💻',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($user) {
            return to_route('home');
        }else {
            return back();
        }
        
    }


    // register a user
    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required|max:16|min:6'
        ]);

        if(Auth::attempt($validated)){
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
