<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function showContact(){
        $contact = Contact::Select('*')->withTrashed()
        -> get();
        return view("dashboard.contactTable")->with('contacts',$contact);
    }
    public function dropContact($id){
        Contact::where('id', $id)
        ->delete();
        return redirect()->back();
    }
    public function restoreContact($id){
        Contact::onlyTrashed()
        ->where('id', $id)
        ->restore();
        return redirect()->back();
       }
}
