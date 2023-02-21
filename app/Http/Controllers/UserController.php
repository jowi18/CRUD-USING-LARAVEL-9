<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'name'=> 'required',
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $admin = User::create($validated);

        auth()->login($admin);

        return redirect('/')->with('messages','Successfully Login');
        
    }


    public function login(){
        return view('admins.login');
    }
    public function authenticate(Request $request){
        $validated = $request->validate([
           
            'email' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt($validated)){
            $request->session()->regenerate();
            return redirect('/')->with('messages','Successfully Login');
        }
        return back()->withErrors(['email' => 'Login Failed']);
    }

   public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        auth()->logout();

        return redirect('/admin/login')->with('messages', 'Successfully Logout!');
   }

    public function create(){
        return view('admins.register');
    }
}
