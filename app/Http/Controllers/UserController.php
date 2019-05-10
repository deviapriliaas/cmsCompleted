<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\User\UpdateUserRequest;
class UserController extends Controller
{
    public function index()
    {
        $user=User::all();

        return view('users.index')->with('users',$user);
    }
    public function makeadmin(User $user)
    {
        $user->role='admin';

        $user->save();

        session()->flash('completed','Admin Added');

        return redirect('users');
    }
    public function editprofil()
    {
        $auth=auth()->user();
        return view('users.edit')->with('user',$auth);
    }
    public function updateprofil(UpdateUserRequest $request)
    {
        $user= auth()->user();

        $user->name=$request->name;
        $user->email=$request->email;
       
        $user->save();

        session()->flash('completed','Edited Users');

        return redirect('users');

    }
}
