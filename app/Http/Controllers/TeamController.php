<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App;
use Illuminate\Support\Facades\Storage;


class TeamController extends Controller
{
    
    //Team
    public function showTeam(){
      //   App::setLocale('ar');
        $team = Team::Select('*')
        -> get();
        return view("dashboard.teamTable")->with('teams',$team);
        //->with(['teams'=>$team]);
    }

    
    public function storeTeam(Request $request){
        $team = new Team();

        $img = $request->file('image');
        $path = 'public/user_images/';
        $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
        Storage::disk('local')->put($path.$name, file_get_contents($img));
        $team-> img = $path.$name;
        $team-> save();
        return redirect()->back();
    }
    public function createTeam(){
         // App::setLocale('ar');
        return view('dashboard.teamForm');
    }
    public function editTeam($id){
        $team = Team::Select('*')
        -> Where('id',$id)
        ->first();
        return view("dashboard.teamEditForm")->with('Team',$team);
        
    }
    public function updateTeam(Request $request){
       $img = $request->file('image');
       $path = 'public/user_images/';
       $name = time().'_'.rand(1,10000).'.'.$img->getClientOriginalExtension();
       Storage::disk('local')->put($path.$name, file_get_contents($img));
       $team = Team::Select('*')->Where('id',$request->id);
        $team-> img = $path.$name;
        $team-> save();
        return redirect()->back();
    }
    public function dropTeam($id){
        Team::where('id', $id)
         ->delete();
        return redirect()->back();
    }

    public function restoreTeam($id){
        Team::onlyTrashed()
        ->where('id', $id)
        ->restore();
        // whereNull('deleted_at')
       return redirect()->back();
       }

}
