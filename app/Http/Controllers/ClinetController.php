<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinet;
use Illuminate\Support\Facades\Storage;

// use Illuminate\Support\Facade\Storage;

class ClinetController extends Controller
{
    //Clinet
    public function showClinet(){
       $clinet = Clinet::Select('*')
       -> get();
       return view("dashboard.clinetTable")->with('clinets',$clinet);
   }
   public function storeClinet(Request $request){
       $clinet = new Clinet();
       $img = $request->file('image');
       $path = 'public/user_images/';
       $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
       Storage::disk('local')->put($path.$name, file_get_contents($img));
       $clinet-> img = $path.$name;
       $clinet-> name = $request-> name;
       $clinet-> description = $request-> description;
       $clinet-> email = $request-> email;
       $clinet-> phone_number = $request-> phone_number;
       $clinet-> save();
       return redirect()->back();
   }
   public function createClinet(){
       return view('dashboard.clinetForm');
   }
   public function editClinet($id){
       $clinet = Clinet::Select('*')
       -> Where('id',$id)
       ->first();
       return view("dashboard.clinetEditForm")->with('Clinet',$clinet);
        //صفحة الايدت
   }
   public function updateClinet(Request $request){
       $img = $request->file('image');
       $path = 'public/user_images/';
       $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
       Storage::disk('local')->put($path.$name, file_get_contents($img));
       $clinet = Clinet::Where('id',$request->id)
       ->Update([
    //    'img'=>$request->img,
       'name'=>$request->name,
       'description'=>$request->description,
       'email'=>$request->email,
       'phone_number'=>$request->phone_number
    ]);
       $clinet-> img = $path.$name;
       $clinet-> save();
       return redirect()->back();
   }
   public function dropClinet($id){
       Clinet::where('id', $id)
       ->delete();
       return redirect()->back();
   }
   public function restoreClinet($id){
       Clinet::onlyTrashed()
       ->where('id', $id)
       ->restore();
       // whereNull('deleted_at')
       return redirect()->back();
      }
}
