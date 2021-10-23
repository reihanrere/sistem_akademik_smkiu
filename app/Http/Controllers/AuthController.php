<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }

    public function postLogin(Request $request)
    {
    $input = $request->all();
 
    $fieldType = filter_var($request->nis, FILTER_VALIDATE_EMAIL) ? 'email' : 'nis';
 
    if(auth()->attempt(array($fieldType => $input['nis'], 'password' => $input['password'])))
    {
        return redirect('/dashboard');
    }
        return redirect('/login');
    

    // if (Auth::attempt($request->only('email','password'))){
    //     return redirect('/dashboard');
    // }
    // return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
