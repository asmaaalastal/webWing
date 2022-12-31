<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests\TeamRequest;



class TeamController extends Controller
{
    
    //Team
    public function showTeam(){
        //App::setLocale('ar');
        //App()->setLocale('ar');
        $team = Team::Select('*')->withTrashed()
        -> get();
        return view("dashboard.teamTable")->with('teams',$team);
        //->with(['teams'=>$team]);
    }

    
    public function storeTeam(TeamRequest $request){
        $team = new Team();
        // $path = $request->file('image')->store('public/user_images');
    	// $fileName = basename($path);
    	// $team->img = $fileName;
        $filename = time().'.'.$request->image->extension();
        $request->image->move(public_path('user_images'), $filename);
        $team->img = '/user_images/' . $filename; 
        $st = $team-> save();
        return redirect()->back()->with('st',$st);
    }
    public function createTeam(){
        return view('dashboard.teamForm');
    }
    public function editTeam($id){
        $team = Team::Select('*')
        -> Where('id',$id)
        ->first();
        return view("dashboard.teamEditForm")->with('team',$team);
        
    }
    public function updateTeam(TeamRequest $request){
       $team = Team::Select('*')->Where('id',$request->id)->first();
    //    $path = $request->file('image')->store('public/user_images');
    //    $fileName = basename($path);
    //    $team->img = $fileName;
       $filename = time().'.'.$request->image->extension();
       $request->image->move(public_path('user_images'), $filename);
       $team->img = '/user_images/' . $filename; 
       $st =  $team -> save();
       return redirect()->back()->with('st',$st);
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
