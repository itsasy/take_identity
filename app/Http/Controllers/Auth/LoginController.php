<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = request()->validate([
            'email' => ['email', 'required', 'string'],
            'password' => ['required', 'string']
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(['email' => request('email')]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
