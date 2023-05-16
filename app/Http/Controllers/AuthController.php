<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('requester.index');
    }

    public function loginPage() {
        return view('login.signin');
    }

    public function checkLogin(Request $request) {
        $info = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Credentials do not math out'
        ]);
    }

    public function logout() {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }

    public function registerPage() {
        return view('login.signup');
    }

    public function userRegis(Request $request) {
        $account = new User();
        $account->name = $request->name;
        $account->lastName = $request->lastname;
        $account->studentID = $request->stdID;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);
        $account->birthdate = $request->birthdate;
        $account->tel = $request->tel;
        $account->save();

        return redirect('/');
        

        
    }
}
