<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // ✅ Validate Request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data = $request->all();
        Log::error("Incoming login request", [$data]);
        // ✅ Check if user exists in UserData table
        $user = UserData::where('email', $request->email)->first();

        // ✅ If user not found
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User not found with this email.'
            ], 404);
        }

        // ✅ Check password
        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Incorrect password.'
            ], 401);
        }

        // ✅ Token generate (agar Sanctum use kar rahe ho)
        $token = $user->createToken('MyAppToken')->plainTextToken;

        // ✅ Success response
        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'token' => $token,
            'user' => $user
        ]);
    }
}
