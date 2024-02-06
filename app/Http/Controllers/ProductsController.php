<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Products::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_name = $request->input("name");
        $product_price = $request->input("price");
        $product_description = $request->input("description");

        $product = Products::create([
            'name' => $product_name,
            'price' => $product_price,
            'description' => $product_description,
        ]);
        return response()->json([
            'data' => new ProductResource($product)
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        return new ProductsResource($products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $product_name = $request->input('name');
        $product_price = $request->input('price');
        $product_description = $request->input('description');

        $product->update([
            'name' => $product_name,
            'price' => $product_price,
            'description' => $product_description,
        ]);

        return response()->json([
            'data' => new ProductResource($product)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return response->json(null, 204);
    }
}