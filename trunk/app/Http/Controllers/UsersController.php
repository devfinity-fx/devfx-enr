<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function index()
    {
        $users = array();
        $users = User::all();
        return view('admin.users.index')->with("allUsers", $users);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
       User::create($request->all());
        return redirect('users');
    }
}
