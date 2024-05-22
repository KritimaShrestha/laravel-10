<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function index1()
    {
        return view('about');
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store(Request $request){
        $contact=new Contact();
        $contact->name = $request->input('name');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->message=$request->input('message');
        $contact->save();
        return redirect()->route('contactus');
        
    }
}
?>