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
}
