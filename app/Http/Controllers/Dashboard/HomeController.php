<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
      $user = Auth::user();
      $userContainers =$user->containers;
      return view('dashboard.home', ['userContainers' => $userContainers]);
    }
}
