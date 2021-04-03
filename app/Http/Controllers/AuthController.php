<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  public function create(LoginRequest $request): RedirectResponse
  {
    $validated = $request->validated();

    if (Auth::attempt($validated)) {
      $request->session()->regenerate();

      return redirect()->route('dashboard.index');
    } else {
      return back()->withErrors([
        'email' => 'The provided credentials does not match.'
      ]);
    }
  }

  public function destroy(Request $request): RedirectResponse
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('auth.login')->with(['success' => 'Successfully logged out']);
  }
}
