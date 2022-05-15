<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register.registrasi');
    }
    
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:225'
        ]);
        
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
