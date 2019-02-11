<?php

namespace App\Http\Controllers\API\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
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
   * @param  \Illuminate\Support\Facades\Hash
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function register(Request $request)
  {
    $request->validate([
      'name'     => 'required|string|max:255',
      'email'    => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6|confirmed',
    ]);
    
    User::create([
      'name'     => $request['name'],
      'email'    => $request['email'],
      'password' => Hash::make($request['password']),
    ]);
    
    return response(['message' => 'Successfully created user!'], 201);
  }
}
