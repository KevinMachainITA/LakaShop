<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function searchByName(Request $request)
    {
        $searchTerm = $request->searchTerm;
        $products = Product::where('name', 'like', '%' . $searchTerm . '%')->get();
        if ($products->isEmpty()) {
            return response()->json(['data' => []]);
        } else {
            return new ProductCollection($products);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>['required','string'],
            'description' =>['required','string'],
            'price' =>['required','numeric','min:1','max:99999'],
            'stock' =>['required','numeric','min:1','max:1000'],
            'discount' =>['required','numeric','min:0','max:100','not_in:0'],
            'size' =>['required','numeric','min:1','max:40'],
            'image' =>['string'],
            'category_id' =>['required']
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->size = $request->size;
        $product->image = $request->image;
        $product->category_id = $request->category_id;
        
        if($product->save()){
            return response()->json(['message' => 'Product created successfully'], 201);
        } else {
            return response()->json(['error' => 'The product could not be saved'], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $product = Product::find($request->id);
        $category = $product->category;

        return $product->name." - ".$category->name;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' =>['required','string'],
            'description' =>['required','string'],
            'price' =>['required','numeric','min:1','max:99999'],
            'stock' =>['required','numeric','min:1','max:1000'],
            'discount' =>['required','numeric','min:0','max:100','not_in:0'],
            'size' =>['required','numeric','min:1','max:40'],
            'image' =>['string'],
            'category_id' =>['required']
        ]);

        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->discount = $request->discount;
        $product->size = $request->size;
        $product->image = $request->image;
        $product->category_id = $request->category_id;
        
        if($product->save()){
            return response()->json(['message' => 'Product updated successfully'], 201);
        } else {
            return response()->json(['error' => 'The product could not be updated'], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
