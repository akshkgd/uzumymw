<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct()
  {
    //its just a dummy data object.
    $user = User::all();

    // Sharing is caring
    View::share('user', $user);
  }
}
