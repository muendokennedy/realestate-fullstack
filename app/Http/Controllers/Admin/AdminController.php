<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.index');
    }

    public function analytics()
    {
        return view('admin.analytics');
    }
    public function products()
    {

        return view('admin.products');
    }
    public function orders()
    {
        $customerOrders = Order::all();

        return view('admin.orders', compact('customerOrders'));
    }
    public function stock()
    {
        $properties = Property::latest()->get();

        return view('admin.stock', compact('properties'));
    }
    public function clientinfo()
    {
        return view('admin.clientinfo');
    }
    public function settings()
    {
        return view('admin.settings');
    }
}
