<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function product()
    {

        $product = Product::get();


        return view('product-dashboard', ["data" => $product]);
    }
}
