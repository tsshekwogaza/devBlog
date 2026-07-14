<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new user.
     */
    public function create() {

        return view('auth.register');
    }  

    /**
     * Store the newly created user in storage.
     */
    public function store(Request $request) 
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profession' => 'Edit - Your profession',
            'bio' => 'Edit - Write about yourself...',
            'github_handle' => 'yourhandle',
            'twitter_handle' => 'yourhandle',
            'role' => 'user' 
        ]);

        Auth::login($user);

        return redirect('articles');
    }

    /**
     * Show the form for editing the user profile.
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('users.profile', compact('users'));
    }

     /**
     * Update the specified user profile in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'profession' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:255'],
            'github_handle' => ['nullable', 'string', 'max:255'],
            'twitter_handle' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('avatar')) {
            if ($user->avatar && $user->avatar !== 'images/avatar.png') {
                Storage::disk('public')->delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('images', 'public');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'profession' => $request->profession,
            'bio' => $request->bio,
            'github_handle' => $request->github_handle,
            'twitter_handle' => $request->twitter_handle,
        ]);

        return redirect()->back();
    }
}
