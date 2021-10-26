<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json([
            'message' => 'Succesfull',
            'status' => 200,
        ], 200);
    }

    public function login(Request $request)
    {
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'message' => 'Invalid login details',
                'status' => 400,
            ], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();
        return response()->json([
            'user' => $user,
            'message' => 'Login Successfull',
            'status' => 200,
        ], 200);
    }

    public function infoUser(Request $request)
    {
        return $request->user();
    }
}
