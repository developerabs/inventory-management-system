<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.users.ProfileView',compact('user'));
    }
    public function edit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('pages.users.ProfileUpdate',compact('editData'));
    }
    public function update(Request $request)
    {
        
        $id = Auth::user()->id;

        $validated = $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
            'address'=>'required',
            'gender'=>'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('images/user/'.$user->image));
            $fileName = $id.'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images/user'),$fileName);
            $user->image = $fileName;
        }
        $user->save();
        return redirect()->route('profile.view')->with('success','Profile updated success');
    }
}
