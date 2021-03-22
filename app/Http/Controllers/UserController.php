<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function view()
    {
        $data['alldata'] = User::all();
        return view('pages.users.UserPage',$data);
    }
    public function add()
    {
        return view('pages.users.UserAdd');
    }
    public function store()
    {
        # code...
    }
    public function edit(Type $var = null)
    {
        # code...
    }
    public function update(Type $var = null)
    {
        # code...
    }
}
