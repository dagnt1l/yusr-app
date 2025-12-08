<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'national_id' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            return redirect('/');

        }

        return redirect()->back()->withErrors('معلومات تسجيل الدخول غير صحيحة.');

    }

    public function register(Request $request)
    {

        $credentials = $request->validate([
            'first_name' => 'required',
            'father_name' => 'required',
            'grand_father_name' => 'required',
            'first_name' => 'required',
            'national_id' => 'required|max:10|min:10|unique:users,national_id',
            'email' => 'unique:users,email',
            'phone_number' => 'required|max:10|min:10',
            'password' => ['required', Password::min(8)->letters()->symbols()->mixedCase()],
        ]);

        $phoneNumber = '966'.substr($request->input('phone_number'), 1);

        $user = User::create([
            'name' => $request->input('first_name').' '.$request->input('father_name').' '.$request->input('grand_father_name').' '.$request->input('last_name'),
            'email' => $request->input('email'),
            'national_id' => $request->input('national_id'),
            'phone_number' => $phoneNumber,
            'password' => Hash::make($request->input('password')),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', ['حياك الله.']);

    }

    public function logout()
    {

        Auth::logout();

        return redirect('/');

    }
}
