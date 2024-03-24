<?php

namespace App\Http\Controllers;

use App\Models\Property;
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
        $properties = Property::where('category', 'Urban plot')->get();

        return view('urban', compact('properties'));
    }
    public function upcountryPlots()
    {
        $properties = Property::where('category', 'Upcountry plot')->get();

        return view('upcountry', compact('properties'));
    }
    public function apartments()
    {
        $properties = Property::where('category', 'Apartments')->get();

        return view('apartments', compact('properties'));
    }
    public function houses()
    {
        $properties = Property::where('category', 'House')->get();

        return view('houses', compact('properties'));
    }
    public function contact()
    {

        return view('contact');
    }
    public function conditions()
    {

        return view('conditions');
    }
    public function handleInfo(Request $request)
    {
        if($request->agree == 1){
            return redirect()->route('information');
        } else {
            return redirect()->route('conditions')->with('conditions', 'Please agree to terms and conditions before proceeding');
        }
    }
    public function information()
    {
            return view('information');
    }
    public function payment()
    {
        return view('payment');
    }
}
