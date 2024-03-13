<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePropertyRequest;
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

        $product = Property::create([
            'category' => $propertyData['category'],
            'ownersName' => $propertyData['ownersName'],
            'location' => $propertyData['location'],
            'price' => $propertyData['propertyPrice'],
            'status' => 'Not taken'
        ]);

        return redirect()->route('admin.products')->with('productSuccess', 'The property has been added successfully');

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('admin.productedit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $product->update($request->except(['firstImage','secondImage','thirdImage','fourthImage']));

        $firstPath = $this->storeUpdatedProductImage($request->file('firstImage'), $product->firstImage);
        $secondPath = $this->storeUpdatedProductImage($request->file('secondImage'), $product->secondImage);
        $thirdPath = $this->storeUpdatedProductImage($request->file('thirdImage'), $product->thirdImage);
        $fourthPath = $this->storeUpdatedProductImage($request->file('fourthImage'), $product->fourthImage);

        $product->update(
            [
            'firstImage' => $firstPath,
            'secondImage' => $secondPath,
            'thirdImage' => $thirdPath,
            'fourthImage' => $fourthPath,
            ]
        );

        return redirect()->route('admin.products')->with('productUpdateSuccess', 'The product data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        Storage::disk('public')->delete($product->firstImage);
        Storage::disk('public')->delete($product->secondImage);
        Storage::disk('public')->delete($product->thirdImage);
        Storage::disk('public')->delete($product->fourthImage);

        $product->delete();

        return redirect()->route('admin.products')->with('productDeleteSuccess', 'The product has been deleted successfully');
    }

    private function storeProductImage($productFile)
    {
        $imageExtension = $productFile->extension();

        $content = file_get_contents($productFile);

        $imageName = Str::random(25);

        $path = "products/$imageName.$imageExtension";

        Storage::disk('public')->put($path, $content);

        return $path;
    }

    private function storeUpdatedProductImage($productFile, $oldFile)
    {

        Storage::disk('public')->delete($oldFile);

        $imageExtension = $productFile->extension();

        $content = file_get_contents($productFile);

        $imageName = Str::random(25);

        $path = "products/$imageName.$imageExtension";

        Storage::disk('public')->put($path, $content);

        return $path;
    }

}
