<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;

class ApiAuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

       $user = User::where('username', $credentials['username'])->first();

        if (Auth::attempt($credentials)) {
            if(Auth::user()->status == 1){
                //account is active
                // Generate token
                $token = $user->createToken('userToken')->plainTextToken;

                return response([
                    'message' => 'OK',
                    'data' => $user,
                    'token' => $token
                ], 201);
            } else{
                //account is disabled
                return response([
                    'message' => 'account disabled.'
                ], 401);
            }
        }
        //bad credentials
        return response([
            'message' => 'Bad credentials.'
        ], 401);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response([
            'message' => 'Logged out.'
        ]);
    }
}
