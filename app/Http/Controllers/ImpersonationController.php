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

    
}
