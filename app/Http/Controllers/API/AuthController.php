<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
/* REGISTRATION */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ],422);
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $this->authToken($user);
        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'user' => $user,
            'token' => $token
        ]);
    }

/* LOGIN */
    public function login(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ],422);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $this->authToken($user);
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'user' => Auth::user(),
                'token' => $token
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ],401);
    }

/* LOGOUT */
    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens->each(function ($token) {
            $token->delete();
        });
        
        return response()->json([
            'success' => true,
            'message' => 'Logged out successfully'
        ]);
    }

    private function authToken($user){
        return $user->createToken('EventBooking')->plainTextToken;
    }
}
