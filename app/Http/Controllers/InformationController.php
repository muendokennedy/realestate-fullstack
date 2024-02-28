<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInformationRequest;
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

        return redirect()->route('information')->with('message', 'information was received successfully, please wait for a review');
    }
}
