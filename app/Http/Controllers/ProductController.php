<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return view('tambahProduct');
    }

    public function sentData(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'stok' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);



        Product::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'stok' => $request->stok,
            'image' => "storage/" . $request->file('image')->store('images')
        ]);

        // $product = new Product();
        // $product->name = $request->name;
        // $product->desc = $request->desc;
        // $product->stok = $request->stok;
        // $product->image = 'product-images' . $imageName;
        // $product->save();

        return back();
    }

    public function deleteProduct()
    {
        $product = Product::get();

        if (!$product) {
            return back();
        } else {
            Product::query()->delete();
        }

        return back();
    }

    public function deleteProductById(Request $request)
    {
        $request->validate([
            'id'
        ]);

        Product::where('id', $request->id)->delete();

        return back();
    }
}
