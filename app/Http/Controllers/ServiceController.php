<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests\ServiceRequest;


class ServiceController extends Controller
{
     //Services
     public function showServices(){
        $services = Service::Select('*')->withTrashed()
        -> get();
        return view("dashboard.servicesTable")->with('services', $services);
    }
    public function storeServices(ServiceRequest $request){
        $service = new Service();
        // $path = $request->file('image')->store('public/user_images');
    	// $fileName = basename($path);
    	// $service->img = $fileName;
        $filename = time().'.'.$request->image->extension();
        $request->image->move(public_path('user_images'), $filename);
        $service->img = '/user_images/' . $filename; 
        $service-> name = $request->name;
        $service-> name_ar = $request-> name_ar;
        $service-> description = $request->description;
        $service-> description_ar = $request-> description_ar;
        $st = $service-> save();
        return redirect()->back()->with('st',$st);
    }
    public function createServices(){
         // App::setLocale('ar');
        return view('dashboard.servicesForm');
    }
    public function editServices($id){
        $service = Service::Select('*')
        -> Where('id',$id)
        ->first();
        return view("dashboard.servicesEditForm")->with('service',$service);
    }
    public function updateServices(ServiceRequest $request){
        $service = Service::Select('*')->Where('id',$request->id)->first();
        $service-> name = $request->name;
        $service-> name_ar = $request-> name_ar;
        $service-> description = $request->description;
        $service-> description_ar = $request-> description_ar;
        $filename = time().'.'.$request->image->extension();
        $request->image->move(public_path('user_images'), $filename);
        $service->img = '/user_images/' . $filename; 
        // $path = $request->file('image')->store('public/user_images');
    	// $fileName = basename($path);
    	// $service->img = $fileName;
        $st =  $service -> save();
        return redirect()->back()->with('st',$st);
    }
    public function dropServices($id){
        Service::where('id', $id)
        ->delete();
        return redirect()->back();
    }
    public function serviceDetail($id){
        $service = Service::select('*')->where('id',$id )->first();
        return view('serviceDetail')->with('service' , $service);
}
    public function restoreServices($id){
        Service::onlyTrashed()
        ->where('id', $id)
        ->restore();
        // whereNull('deleted_at')
       return redirect()->back();
       }

}
