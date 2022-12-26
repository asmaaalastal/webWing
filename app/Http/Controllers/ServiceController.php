<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
     //Services
     public function showServices(){
       // App::setLocale('ar');

        $services = Service::Select('*')
        -> get();
        return view("dashboard.servicesTable")->with('services',$services);
    }
    public function storeServices(Request $request){
        $service = new Service();
        $img = $request->file('image');
        $path = 'public/user_images/';
        $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
        Storage::disk('local')->put($path.$name, file_get_contents($img));

        $service-> img = $path.$name;
        $service-> name = $request->name;
        $service-> description = $request->description;
        $service-> save();
        return redirect()->back();
    }
    public function createServices(){
         // App::setLocale('ar');
        return view('dashboard.servicesForm');
    }
    public function editServices($id){
        $service = Service::Select('*')
        -> Where('id',$id)
        ->first();
        return view("dashboard.servicesEditForm")->with('Service',$service);
    }
    public function updateServices(Request $request){
       $img = $request->file('image');
       $path = 'public/user_images/';
       $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
       Storage::disk('local')->put($path.$name, file_get_contents($img));     
        $service = Service::Where('id',$request->id)
        ->Update([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        $service-> img = $path.$name;
        $service-> save();
        return redirect()->back();
    }
    public function dropServices($id){
        Service::where('id', $id)->delete();
        return redirect()->back();
    }
    public function restoreServices($id){
        Service::onlyTrashed()
        ->where('id', $id)
        ->restore();
        // whereNull('deleted_at')
       return redirect()->back();
       }

}
