<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function listuser(){
        $users = User::get();
        return view('fitureadmin.listuser', compact('users'));
    }
    public function store(Request $request)
    {
        $data = new User();
        $data->name= $request->nama;
        $data->level = $request->level;
        $data->email= $request->email;
        $data->desc= $request->desc;
        $data->password = bcrypt($request->password);
        $data->save();

        session()->flash('success', 'This User has been added');

        return back();
    }
    public function show(User $user)
    {
        //
        return view('fitureadmin.detailuser', compact('user'));
    }
}
