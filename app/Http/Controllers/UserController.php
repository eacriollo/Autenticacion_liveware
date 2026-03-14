<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //


    public function index()
    {
        abort_unless(auth()->user()->can('user.view'), 403);
        $users = User::with('roles')->latest()->get();
        return view('users.index', compact('users'));
    }
}
