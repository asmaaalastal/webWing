<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckLangParaml;
use App;
use App\Service;
use App\Team;
use App\Clinet;
use App\Contact;

class UserController extends Controller
{
    public function getIndex()
    {
        App()->setLocale('ar');
        $teams = Team::select('*')->paginate(3);
        $services = Service::select('*')->paginate(6);
        $clinets = Clinet::select('*')->paginate(1);
        return view('index')->with(['teams' => $teams, 'services' => $services, 'clinets' => $clinets]);
    }
    public function getContact()
    {
        return view('contact');
    }
    public function getAbout()
    {
        return view('about');
    }
    public function getClinet()
    {
        $clinets = Clinet::select('*')->paginate(1);
        return view('client')->with('clinets', $clinets);
    }
    public function getService()
    {
        $services = Service::select('*')->paginate(3);
        return view('service')->with('services', $services);
    }
    public function getTeam()
    {
        $teams = Team::select('*')->paginate(3);
        return view('team')->with('teams', $teams);
    }
    public function contactClinet(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }
    public function search(Request $request)
    {
        $services = [];

        if (session()->get("locale") == "en") {
            $services = Service::select('*')->where('name', 'like', '%' . $request->name . '%')->paginate(6);
        } else 
            $services = Service::select('*')->where('name_ar', 'like', '%' . $request->name_ar . '%')->paginate(6);
        

        return view('search')->with('services', $services);
    }
    public function changeLang($lang)
    {

        return redirect()->back();
    }



    public function switchLanguage(Request $request)
    {
        $locale = $request->input("locale");
        session()->put('locale', $locale);

        //dd(session()->get("locale"));
        $request->session()->save();
        return redirect()->back();
    }
}
