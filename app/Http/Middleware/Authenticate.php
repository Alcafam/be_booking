<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {
        $bearerToken = $request->bearerToken();
        if ($bearerToken) {
            $token = PersonalAccessToken::findToken($bearerToken);
            if($token){
                $user = User::find($token->tokenable_id);
                Auth::setUser($user);
                return $next($request);
            }
        }
        
        return response()->json([
            'code' => 401,
            'message' => 'Unauthorized'
        ]);
    }
}
