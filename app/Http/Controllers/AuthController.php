<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function registerPost(Request $request) {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role ?? 'user'; 

        if ($this->isAdmin($request->email)) {
            $user->role = 'admin';
        } else {
            $user->role = 'user'; 
        }

        $user->save();

        return back()->with('success', 'Register succesfully');
    }

    public function login() {
        return view('login');
    }

    public function loginPost(Request $request) {
        $loginData = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($loginData)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect('/admin')->with('success', 'Login successfully');
            } else {
                return redirect('/respondents')->with('success', 'Login successfully');
            }
        }

        return back()->with('error', 'Email or Password incorect');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }

    private function isAdmin($email) {
        // Define your admin email addresses or any other criteria here
        $adminEmails = ['adminadmin@gmail.com', 'adminadmin2@gmail.com']; // Add more emails as needed

        return in_array($email, $adminEmails);
    }
}
