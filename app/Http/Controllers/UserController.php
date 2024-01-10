<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index', compact('users'));
  }

  public function create()
  {
    return Inertia::render('User/Create');
  }
}
