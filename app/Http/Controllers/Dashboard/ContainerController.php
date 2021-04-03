<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContainerController extends Controller
{
    public function index()
    {
      $user = Auth::user();
      $containers = $user->containers;

      return view('dashboard.container.list', ['containers' => $containers]);
    }
}
