<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Api\AuthRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function auth(AuthRequest $request)
    {

        $user =  User::where('email', $request->email)->first();
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The credentials are incorrects']
            ]);
        }

        // Logout de outros dispositivos, se necessário
        // if ($request->has('logout_others_devices') && $request->logout_others_devices) {

        // }
        $user->tokens()->delete();
        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json(
            [
                'token' => $token,
            ]
        );
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(
            [
                'mesasge' => 'success',
            ]
        );
    }

    public function me(Request $request)
    {
        $user = $request->user();

        return response()->json(
            [
                'me' => $user,
            ]
        );
    }
}
