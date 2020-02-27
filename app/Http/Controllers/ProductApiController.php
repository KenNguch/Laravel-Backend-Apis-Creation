<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductApiController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        $product->save();
        return response()->json($product);
    }

    public function show()
    {
        $product = Product::all();

        return response()->json($product);
    }

    public function showbyid($id)
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function updatebyid(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');

        $product->save();
        return response()->json($product);
    }

    public function deletebyid(Request $request, $id)
    {
        $product = Product::find($id);
        $product->delete($product);

        return response()->json($product);
    }
}
