<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(){
        return view('pages.dashboard.admin.index');
    }


    public function userStore(Request $request){
        // dd($request);

         $role = Role::where("name", "Prester")->first();

         User::create([
             'lastname'=>$request->lastname,
             'firstname'=>$request->firstname,
             'email'=>$request->email,
             'password'=>Hash::make($request->password),
             'role_id'=>$role->id,
         ]);
        
         return back()->with("success", "Utilisateur enregistrer avec suucès !");

    }
}
