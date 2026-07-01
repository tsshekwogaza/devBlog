<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'min:8']
        ]);

        if (Auth::attempt($validated)) {

            $request->session()->regenerate();

            return redirect('articles');
        }

        return back()->withErrors([
            'email' => 'Email not found.',
            'password' => 'Incorrect password.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
