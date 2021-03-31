<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function index(Request $request)
  {
    return view('login');
  }

  public function create(LoginRequest $request)
  {
    $validated = $request->validated();

    return var_dump($validated);
  }
}
