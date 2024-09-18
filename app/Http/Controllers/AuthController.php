<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        // try {
        //     $name = explode(" ", $validated['name']);
        //     if (count($name)> 1) {
        //         $lname = array_pop($name);
        //     }else{
        //         $lname = '';
        //     }
            
        //     $fname = implode(" ", $name);
        // } catch (\Throwable $th) {
        //     $fname = $validated['name'];
        //     $lname = '';
        // }
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
            'password' => $validated['password'],
            'bio' => 'Less Talk, More Code 💻',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($user) {
            $request->session()->put('email', $validated['email']);
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

        $user = DB::table('users')
        ->where('email',$validated['email'])
        ->where('password', $validated['password'])->first();

        if ($user != null) {
            $request->session()->put('email', $validated['email']);
            return to_route('home');
        }else{
            return back()->with('error_msg', 'Email and Password Not Match.');
        }
        
    }

}
