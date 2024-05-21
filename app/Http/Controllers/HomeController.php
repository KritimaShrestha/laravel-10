<?php

namespace App\Http\Controllers;



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
    public function index2()
    {
        return view('contact');
    }

   
}
