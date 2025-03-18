<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $auth = User::get();
        return response()->json([
            'success' => true,
            'data' => $auth
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:3',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Email tidak ditemukan',
            ], 401);
        }

        if (!password_verify($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Password salah',
            ], 401);
        }

        $token = bin2hex(random_bytes(32));

        $user->api_token = $token;
        $user->save();
        return response()->json([
            'success' => true,
            'token' => $token,
            'user' => $user,
        ], 200);
    }

    public function verify(Request $request)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak ditemukan'
            ], 401);
        }

        $token = str_replace('Bearer ', '', $token);
        $user = User::where('api_token', $token)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Token tidak valid'
            ], 401);
        }

        return response()->json([
            'success' => true,
            'user' => $user
        ], 201);
    }

}
