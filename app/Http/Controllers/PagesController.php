<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
       return view('home');
    }
    public function urbanPlots()
    {
        return view('urban');
    }
    public function upcountryPlots()
    {
        return view('upcountry');
    }
    public function apartments()
    {
        return view('apartments');
    }
    public function houses()
    {
        return view('houses');
    }
    public function contact()
    {
        return view('contact');
    }
    public function conditions()
    {
        return view('conditions');
    }
}
