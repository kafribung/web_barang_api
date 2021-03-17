<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\Auht\LoginResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $creadensial =  $request->only(['email', 'password']);

        if (Auth::attempt($creadensial)) {
            $data          = Auth::user(['name']);
            $data['token'] = Auth::user()->createToken($request->email)->plainTextToken;
            return LoginResource::make($data);
        } else return response(['msg'=> 'The provided credentials do not match our records.'], 404);
    }
}
