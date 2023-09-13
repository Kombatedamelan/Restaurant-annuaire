<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistersController extends Controller
{
    public function userRegisterIndex(){
        return view('auth.register');
    }

    public function userRegister(Request $request){
        $role = Role::where("name", "prester")->first();

        User::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role_id'=>$role->id,
        ]);

        return back()->with('success', 'utilisateur créee');
    }
}
