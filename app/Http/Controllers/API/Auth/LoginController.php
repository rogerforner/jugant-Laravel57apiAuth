<?php

namespace App\Http\Controllers\API\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //
  }

  /**
   * Handle the incoming request.
   *
   * @param  \App\User
   * @param  \Illuminate\Support\Facades\Auth
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function login(Request $request)
  {
    $request->validate([
      'email'    => 'required|string|email',
      'password' => 'required|string',
    ]);

    $credentials = request(['email', 'password']);
    if (!Auth::attempt($credentials)) {
      return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user  = $request->user();
    $token = $user->createToken('Laravel Password Grant Client')->accessToken;

    return response(['token' => $token], 200);
  }
}
