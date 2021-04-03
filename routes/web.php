<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['isGuest'])->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
  Route::post('/login', [AuthController::class, 'create']);

  Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
  Route::post('/register', [RegisterController::class, 'store']);
});

Route::prefix('email')->group(function () {
  Route::get('verify', function () {
    return view('email.verify');
  })->name('verification.notice');

  Route::get('verified', function () {
    return view('email.verified');
  })->name('verification.verified');

  Route::get('verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('verification.verified');
  })->name('verification.verify');
});

Route::middleware(['isLoggedIn', 'auth', 'verified'])->prefix('dashboard')->group(function (){
  Route::get('/', function () {
    return 'Hello World';
  })->name('dashboard.index');
});
