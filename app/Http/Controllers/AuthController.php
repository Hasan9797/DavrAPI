<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // Login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Login yoki parol xato'], 401);
        }

        $ttl = 2; // 1 kun

        JWTAuth::factory()->setTTL($ttl);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $ttl * 60, // Soniyalarda qaytarish
        ]);
    }

    public function me()
    {
        return response()->json(auth('api')->user());
    }

    // Logout
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Muvaffaqiyatli chiqildi']);
    }

    public function refresh()
    {
        try {
            $newToken = JWTAuth::refresh(JWTAuth::getToken());

            $ttl = 2; // 1 kun

            JWTAuth::factory()->setTTL($ttl);

            return response()->json([
                'access_token' => $newToken,
                'token_type' => 'bearer',
                'expires_in' => $ttl * 60, // Soniyalarda qaytarish
            ]);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => 'Token yangilab bo\'lmadi'], 401);
        }
    }
}
