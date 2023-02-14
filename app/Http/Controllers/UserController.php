<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login() 
    {
        return view('login');
    }

    public function checkLogin(LoginRequest $request) 
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        //return redirect("login")->withErrors('Login details are not valid');
        return redirect('login')->with('failed',"Login details are not valid");
    }

    public function registration()
    {
        return view('registration');
    }

    public function store(RegistrationRequest $request)
    {
        try {
            $role_id = Role::where('name', 'user')->first()->id;
            $user =  new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role_id = 2;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('login')->with('success',"Registration successfully");
        } catch (\Exception $e) {
            return redirect('registration')->with('failed',"Registration failed");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
