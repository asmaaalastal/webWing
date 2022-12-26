<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex(){
        return view('index');
    }
    public function getContact(){
        return view('contact');
    }
    public function getAbout(){
        return view('about');
    }
    public function getClinet(){
        return view('client');
    }
    public function getService(){
        return view('service');
    }
    public function getTeam(){
        return view('team');
    }
    // function search_products(Request $request, $id){
    //     if ($request->q) {
          
    //     }
    //     return redirect("stores/$id");
    // }
}
