<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Team;
use App\Clinet;


class AdminController extends Controller
{

    //dashboard 
    public function getHome(){
        $services = Service::select('*')->get();
        return view('dashboard/dashboardHome')->with(['services' => $services]);
    }
    public function getTeamForm(){
        return view('dashboard/teamForm');
    }
    public function getServicesForm(){
        return view('dashboard/servicesForm');
    }
    public function getClinetForm(){
        return view('dashboard/clinetForm');
    }
    public function getTeamTable(){
        return view('dashboard/teamTable');
    }
    public function getServicesTable(){
        return view('dashboard/servicesTable');
    }
    public function getClinetTable(){
        return view('dashboard/clinetTable');
    }
    public function getTeamEditForm(){
        return view('dashboard/teamEditForm');
    }
    public function getServicesEditForm(){
        return view('dashboard/servicesEditForm');
    }
    public function getClinetEditForm(){
        return view('dashboard/clinetEditForm');
    }
    
   
    
    

}
