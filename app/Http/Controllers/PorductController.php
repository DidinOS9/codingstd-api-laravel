<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PorductController extends Controller
{
    public function createData(Request $request)
    {
        Product::create([
            'name' => $request->product_name,
            'price' => $request->price,
            'desc' => $request->desc
        ]);
        return response()->json([
            'message' => 'success create data'
        ]);
    }

    public function getAllData()
    {
        $products = Product::all();
        return response()->json([
            'products' => $products
        ]);
    }

    public function getData($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    public function searchData(Request $request)
    {
        $products = Product::where('name', 'LIKE', '%'.$request->product_name.'%')->get();
        return response()->json([
            'productSearch' => $products
        ]);
    }

    public function updateData(Request $request, $id)
    {
        Product::findOrFail($id)->update([
            'name' => $request->product_name,
            'price' => $request->price,
            'desc' => $request->desc
        ]);

        return response()->json([
            'messsage' => 'success update data'
        ]);
    }
}
