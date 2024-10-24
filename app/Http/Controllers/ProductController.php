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
        // dd($request);

        // Memvalidasi request
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'stok' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);


        // Menambahkan produk kedalam database
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
        // Mengambil data product dari database
        $product = Product::get();

        // Validasi data product
        if (!$product) {
            return back();
        } else {
            Product::query()->delete();
        }

        return back();
    }

    public function deleteProductById(Request $request)
    {
        // Validasi request
        $request->validate([
            'id'
        ]);

        // Menghapus data product
        Product::where('id', $request->id)->delete();

        return back();
    }
}
