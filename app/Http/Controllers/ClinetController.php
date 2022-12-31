<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clinet;
use App\Http\Requests\ClinetRequest;

// use Illuminate\Support\Facade\Storage;

class ClinetController extends Controller
{
    //Clinet
    public function showClinet(){
       $clinet = Clinet::Select('*')->withTrashed()
       -> get();
       return view("dashboard.clinetTable")->with('clinets',$clinet);
   }
   public function storeClinet(ClinetRequest $request){
       $clinet = new Clinet();
    //    $path = $request->file('image')->store('public/user_images');
    //    $fileName = basename($path);
    //    $clinet->img = $fileName;
       $filename = time().'.'.$request->image->extension();
       $request->image->move(public_path('user_images'), $filename);
       $clinet->img = '/user_images/' . $filename; 
       $clinet-> name = $request-> name;
       $clinet-> name_ar = $request-> name_ar;
       $clinet-> description = $request-> description;
       $clinet-> description_ar = $request-> description_ar;
       $st = $clinet-> save();
       return redirect()->back()->with('st',$st);
   }
   public function createClinet(){
       return view('dashboard.clinetForm');
   }
   public function editClinet($id){
       $clinet = Clinet::Select('*')
       -> Where('id',$id)
       ->first();
       return view("dashboard.clinetEditForm")->with('clinet',$clinet);
        //صفحة الايدت
   }
   public function updateClinet(ClinetRequest $request){
    $clinet = Clinet::Select('*')->where('id', $request->id)->first();
    // $path = $request->file('image')->store('public/user_images');
    // $fileName = basename($path);
    // $clinet->img = $fileName;
    $filename = time().'.'.$request->image->extension();
    $request->image->move(public_path('user_images'), $filename);
    $clinet->img = '/user_images/' . $filename; 
    $clinet -> name = $request-> name;
    $clinet-> name_ar = $request-> name_ar;
    $clinet -> description = $request-> description;
    $clinet-> description_ar = $request-> description_ar;
    $st =  $clinet -> save();
    return redirect()->back()->with('st',$st);
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
