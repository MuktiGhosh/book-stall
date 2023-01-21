<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Laravel\Sanctum\HasApiTokens;

class LoginController extends Controller
{
    use HasApiTokens;

    public function login()
    {
        return view('login');
    }

    public function loginUser(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('user token')->accessToken;
            return redirect('home');
//            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }


    public function logout()
    {
        auth('web')->logout();
        return redirect('login');
    }
}
