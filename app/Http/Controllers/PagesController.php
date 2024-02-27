<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function information(Request $request)
    {
        if($request->agree == 1){
            return view('information');
        } else {
            return Redirect::route('conditions')->with('conditions', 'Please agree to terms and conditions before proceeding');
        }
    }
}
