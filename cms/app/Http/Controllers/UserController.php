<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index(){
        return view('user.list')->with('users', User::all());
    }

    public function makeAdmin(User $user){
        dd($user);
        $user->role = 'admin';
        $user->save();
        session()->flash('success', 'User made admin successfully');
        return redirect(route('user-index'));
    }
    
}

