<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpersonationController extends Controller
{
    public function store()
    {
        $user_id = request('user_id');

        session(['impersonator_id' => auth()->id()]);

        auth()->loginUsingId($user_id);

        return back()->with('flash', 'Estás personificando al usuario con el id: ' . $user_id);
    }

    public function destroy()
    {
        auth()->loginUsingId(session('impersonator_id'));

        session()->forget('impersonator_id');

        return back()->with('flash', 'Has vuelto a ser tú ' . auth()->user()->name);
    }
}
