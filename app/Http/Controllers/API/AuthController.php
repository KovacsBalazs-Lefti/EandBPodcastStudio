<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterRequest $request ) {
        $userData = $request->all();
        $userData['jelszo'] = Hash::make($request->input('jelszo'));

        // Felhasználó létrehozása és mentése
        $user = User::create($userData);

        return $user;

    }
    public function login(LoginRequest $request)  {
        $user = User::where("email", $request->email)->get();
        return $user;

    }


    public function logut(Request $request) {

    }
}
