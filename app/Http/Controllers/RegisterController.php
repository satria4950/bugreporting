<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request){
        $validateddata = $request->validate([
            'name' => 'required|max:225',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'role_id' => 'required'
        ]);
        
        // $validateddata['password'] = bcrypt($validateddata['password']);
        
        $validateddata['password'] = Hash::make($validateddata['password']);

        User::create($validateddata);
        
        // $request->session()->flash('success', 'Registration Successful');

        return redirect('/login')->with('success', 'Registration Successful');
    }
}
