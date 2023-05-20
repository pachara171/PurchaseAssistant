<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PostResponder;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        $postData = PostResponder::get();

        return view('requester.index', ['postData' => $postData, ]);
    }

    public function loginPage() {
        return view('login.signin');
    }

    public function checkLogin(Request $request) {
        $info = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email' => 'กรุณาใส่อีเมล',
            'password' => 'กรุณาใส่รหัสผ่าน'
        ]);

        if(Auth::attempt($info)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('success', 'Your Login success fully');
        }

        return back()->withErrors([
            'errorLogin' => 'Login failed'
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

        $request->validate([
            'name' => 'required|string',
            'lastname' => 'required|string',
            'stdID' => 'required|unique:users,studentID|digits:10',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|digits_between:4,30',
            'birthdate' => 'required',
            'tel' => 'required|digits:10',        
        ]);

        $account = new User();
        $account->name = $request->name;
        $account->lastName = $request->lastname;
        $account->studentID = $request->stdID;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);
        $account->birthdate = $request->birthdate;
        $account->tel = $request->tel;
        $account->save();

        return redirect('/')->with('success', 'ลงเบียนสำเร็จ');
        

        
    }
}
