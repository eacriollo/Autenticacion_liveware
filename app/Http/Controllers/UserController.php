<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('permission:user.view')->only(['index']);
    }
    public function index()
    {
        $users = User::with('roles')->latest()->get();
        return view('users.index', compact('users'));
    }
}
