<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('start');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register_store(Request $request)
    {

        $validated =  $request->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "birthday" => ['required'],
            "gendar" => ['required'],
            "email" => ['required', 'confirmed'],
            "phone" => ['required'],
            "password" => ['required', 'confirmed'],
            "country" => ['required'],
            "city" => ['required'],
            "postalcode" => ['required'],
            "address" => ['required'],
            "proffesion" => ['required'],
            "education" => ['required'],
            "university" => ['required'],
            "language_first" => ['required'],
            "language_second" => ['required'],
            "security_question" => ['required'],
            "security_answer" => ['required'],
        ]);

        $user = User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "birthday" => $request->birthday,
            "gendar" => $request->gendar,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" =>  Hash::make($request->password),
            "country" => $request->country,
            "city" => $request->city,
            "postalcode" => $request->postalcode,
            "address" => $request->address,
            "proffesion" => $request->proffesion,
            "education" => $request->education,
            "university" => $request->university,
            "language_first" => $request->language_first,
            "language_second" => $request->language_second,
            "security_question" => $request->security_question,
            "security_answer" => $request->security_answer,
        ]);

        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('discover_dao');
    }
    public function upgrade(){
        return view('auth.upgrade');
    }
    public function profile(){
        return view('auth.profile');
    }
}
