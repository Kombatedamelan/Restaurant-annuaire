<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function liste(){
        return view('pages.home.liste');
    }

    public function restaurant(){
        return view('auth.restaurant');
    }

    public function restaurantStore(Request $request){

        $restaurant = Restaurant::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'place'=>$request->place,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'prester_id'=>$request->prester_id,
        ]);
        if($request->cover){
            $coverNewName = "plants-cover-".Str::uuid().".".$request->cover->extension();
            $request->cover->move(public_path("images/uploads/events/covers"),$coverNewName);
            $restaurant->update(["cover"=>$coverNewName]);
        }
        return redirect()->route('index');
    }
}
