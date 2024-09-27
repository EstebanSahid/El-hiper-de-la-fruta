<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*public function __invoke() {
        return "Hola Loign";
    }*/

    public function autenticacion(Request $request)
    {
        /*
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, return success response
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            // Authentication failed
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
            */
    }
}
