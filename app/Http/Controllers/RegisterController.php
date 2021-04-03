<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
      return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
      $validated = $request->validated();

      $newUser = User::create($validated);

      event(new Registered($newUser));

      Auth::login($newUser);

      return redirect()->route('verification.notice');
    }
}
