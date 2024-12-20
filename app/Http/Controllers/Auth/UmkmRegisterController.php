<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use App\Models\Role;
use Illuminate\Auth\Events\Validated;

class UmkmRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-umkm');
    }

    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'nik' => 'required|string|unique:users',
                'phone' => 'required|string|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'nik' => $validated['nik'],
                'phone' => $validated['phone'],
                'password' => Hash::make($validated['password']),
                // 'role_id' => 2, // role id umkm
            ]);

            // assign role user
            $user->assignRole('umkm');

            // activate user
            $user->email_verified_at = now();
            $user->save();

            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'An error occurred during registration. Please try again.'])->withInput();
        }
    }
}
