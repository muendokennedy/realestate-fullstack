<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    //
     /**
     * Store a newly created product in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        $propertyData = $request->validated();

        $propertyId = rand(100000, 999999);

        $product = Property::create([
            'propertyId' => $propertyId,
            'category' => $propertyData['category'],
            'ownersName' => $propertyData['ownersName'],
            'location' => $propertyData['location'],
            'price' => $propertyData['propertyPrice'],
            'status' => 'Not taken'
        ]);

        return redirect()->route('admin.stock')->with('productSuccess', 'The property has been added successfully');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        //
        return view('admin.productedit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
        $property->update($request->validated());

        return redirect()->route('admin.stock')->with('productUpdateSuccess', 'The property data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        //

        $property->delete();

        return redirect()->route('admin.stock')->with('productDeleteSuccess', 'The property has been has been deleted successfully');
    }

}
