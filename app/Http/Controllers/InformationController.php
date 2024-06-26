<?php

namespace App\Http\Controllers;

use App\Events\CustomerInformationSubmitted;
use App\Http\Requests\UserInformationRequest;
use App\Models\Order;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function userInfo(UserInformationRequest $request)
    {
        $information = $request->validated();

        $user = User::where('id',  auth('web')->user()->id)->first();

        $user->name = $information['name'];
        $user->email = auth('web')->user()->email ?? $information['email'];
        $user->birthdate = $information['birthdate'];
        $user->mobilenumber = $information['mobilenumber'];
        $user->gender = $information['gender'];
        $user->occupation = $information['occupation'];
        $user->identitydocument = $information['identitydocument'];
        $user->IDnumber = $information['IDnumber'];
        $user->issueplace = $information['issueplace'];
        $user->expirydate = $information['expirydate'];
        $user->countryissued = $information['countryissued'];
        $user->issueauthority = $information['issueauthority'];
        $user->county = $information['county'];
        $user->ward = $information['ward'];
        $user->zipcode = $information['zipcode'];
        $user->address = $information['address'];
        $user->town = $information['town'];
        $user->propertyID = $information['propertyID'];

        $user->update();

        $property = Property::where('propertyId', $user->propertyID)->first();

        $property->update([
            'status' => 'Pending Approval'
        ]);

        $order = new Order();
        $order->user_id = $user->id;
        $order->property_id = $property->propertyId;
        $order->status = 'Pending Approval';
        $order->save();

        event(new CustomerInformationSubmitted($user));

        return redirect()->route('information')->with('successMessage','Congratulations!!! Your holding request has been received, please wait for a review');
    }
}
