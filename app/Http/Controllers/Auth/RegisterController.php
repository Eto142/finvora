<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle a registration request.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'in:Female,Male,Others'],
            'country' => ['required', 'string', 'max:255'],
            'currency_code' => ['required', 'string', 'size:3'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha' => ['required', 'numeric', 'same:captcha_confirmation'],
            'account' => ['nullable', 'array'],
            'account.*' => ['string'],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'country' => $request->country,
                'currency_code' => $request->currency_code,
                'account_types' => $request->account ?? [],
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return redirect('/dashboard')->with('success', 'Registration successful! Welcome to your dashboard.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Something went wrong during registration. Please try again later.');
        }
    }
}
