<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function view()
    {
        $data['alldata'] = User::all();
        return view('pages.UserPage',$data);
    }
}
