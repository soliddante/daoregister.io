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
            "firstname" => ['required', 'min:3'],
            "lastname" => ['required', 'min:3'],
            "birthday" => ['required', 'date'],
            "gendar" => ['required'],
            "email" => ['required', 'confirmed', 'email:rfc,dns'],
            "phone" => ['required', 'min:6'],
            "password" => ['required', 'confirmed', 'min:8'],
            "country" => ['required'],
            "city" => ['required'],
            "postalcode" => ['required'],
            "address" => ['required'],
            "profession" => ['required'],
            "education" => ['required'],
            "university" => ['required'],
            "language_first" => ['required'],
            "language_second" => ['required'],
            "security_question" => ['required'],
            "security_answer" => ['required'],
        ]);

        $user = User::create([
            "type" => 0,
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
            "profession" => $request->profession,
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
    public function upgrade()
    {
        return view('auth.upgrade');
    }
    public function profile()
    {
        return view('auth.profile');
    }
    public function user_update(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->update([
            'type' => $request->type ?? $user->type,
            'email' => $request->email ?? $user->email,
            'password' => Hash::make($request->password) ?? $user->password,
            'wallet' => $request->wallet ?? $user->wallet,
            "firstname" => $request->firstname ?? $user->firstname,
            "lastname" => $request->lastname ?? $user->lastname,
            "birthday" => $request->birthday ?? $user->birthday,
            "gendar" => $request->gendar ?? $user->gendar,
            "phone" => $request->phone ?? $user->phone,
            "password" => $request->password ?? $user->password,
            "country" => $request->country ?? $user->country,
            "city" => $request->city ?? $user->city,
            "postalcode" => $request->postalcode ?? $user->postalcode,
            "address" => $request->address ?? $user->address,
            "profession" => $request->profession ?? $user->profession,
            "education" => $request->education ?? $user->education,
            "university" => $request->university ?? $user->university,
            "language_first" => $request->language_first ?? $user->language_first,
            "language_second" => $request->language_second ?? $user->language_second,
            "security_question" => $request->security_question ?? $user->security_question,
            "security_answer" => $request->security_answer ?? $user->security_answer,
            "instagram" => $request->instagram ?? $user->instagram,
            "Twitter" => $request->Twitter ?? $user->Twitter,
            "Facebook" => $request->Facebook ?? $user->Facebook,
            "Whatsapp" => $request->Whatsapp ?? $user->Whatsapp,
            "Telegram" => $request->Telegram ?? $user->Telegram,
            "linkedin" => $request->linkedin ?? $user->linkedin,
        ]);
        return redirect()->back()->with('msg','Update done successfully');
    }
}
