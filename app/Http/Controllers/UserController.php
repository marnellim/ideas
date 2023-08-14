<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();

        return view('users.index', ['users' => $users]);
    }

    public function dashboard()
    {
        $usersCount = \App\Models\User::count();
        
        return view('dashboard', ['usersCount' => $usersCount]);
    }
}