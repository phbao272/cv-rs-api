<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $user = $this->attempt($credentials);

        if (isset($user['errors'])) {
            return response()->json(['message' => $user['errors']], 408);
        }

        if (! $user) {
            return response()->json(['errors' => ['password' => trans('auth.password')]], 422);
        }

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'user' => $user,
            'access_token' => $tokenResult->accessToken,
        ]);
    }

    public function attempt($credentials)
    {
        $email = $credentials['email'];
        $password = $credentials['password'];
        $user = $this->loginPageUserByEmail($email);

        if (! $user || ! Hash::check($password, $user->getAuthPassword())) {
            return null;
        }

        return $user;
    }

    public function loginPageUserByEmail($email)
    {
        return User::query()->where('email', $email)
            ->with([])
            ->first();
    }

    public function me()
    {
        $user = Auth::user();

        if ($user) {
//            $user = User::query()->where("id", $user->id);

            return response()->json($user);
        }

        return null;
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::user()->token()->revoke();

            return response()->json(['message' => 'Successful logout']);
        }

        return response()->json(['message' => 'Fail logout'], 401);
    }
}
