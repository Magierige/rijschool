<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // Validate the form data
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|string',
            'birthdate' => 'required|date',
            'street' => 'required|alpha_dash',
            'city' => 'required|alpha_dash',
            'house_number' => 'required|string|max:5',
            'zip' => 'required|between:5,7',
            'country' => 'required|in:NL,DE',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|string'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birthdate = $request->birthdate;
        $user->street = $request->street;
        $user->city = $request->city;
        $user->house_number = $request->house_number;
        $user->zip = $request->zip;
        $user->country = $request->country;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Log the user in
        auth()->login($user);

        // Redirect to the home page
        return redirect('/home');
    }
    // add code for loging out
    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
