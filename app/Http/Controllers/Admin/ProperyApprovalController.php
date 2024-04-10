<?php

namespace App\Http\Controllers\Admin;

use App\Events\PropertyRejected;
use App\Models\User;
use App\Models\Order;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Events\PropertyApproved;
use App\Http\Controllers\Controller;

class ProperyApprovalController extends Controller
{
    //
    public function approveProperty(Order $order)
    {

        $property = Property::where('propertyId', $order->property_id)->first();

        $user = User::where('id',  $order->user_id)->first();

        $property->update([
            'status' => 'Holdng Approved'
        ]);

        $order->update([
            'status' => 'Holding Approved'
        ]);

        event(new PropertyApproved($user));

        return redirect()->route('admin.orders')->with('successMessage','Property has been approved successfully');
    }

    public function disapproveProperty(Order $order)
    {

        $property = Property::where('propertyId', $order->property_id)->first();

        $user = User::where('id',  $order->user_id)->first();

        $property->update([
            'status' => 'Not taken',
            //'reason' => $request->input('reason')
        ]);

        $order->update([
            'status' => 'Not taken'
        ]);

        event(new PropertyRejected($user));

       // $order->delete();

        return redirect()->route('admin.orders')->with('successMessage','Property has been disapproved successfully');
    }
}
