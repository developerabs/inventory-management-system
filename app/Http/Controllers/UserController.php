<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'role'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);

        $user = new User();
        $user->role = $request->role;
        $user->name = $request->name;
        $user->mobile = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.view')->with('success','New User added success');
    }
    public function edit($id)
    {
        $editData = User::find($id);
        return view('pages.users.UserUpdate',compact('editData'));
    }
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'role'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
        ]);

        $user = User::find($id);
        $user->role = $request->role;
        $user->name = $request->name;
        $user->mobile = $request->phone;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.view')->with('success','User updated success');
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.view')->with('delete','User delete success');
    }
}
