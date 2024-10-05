<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketController extends Controller
{

    public function index()
    {
        $product = Product::get();

        return view('markets', [
            'title' => 'market',
            'data' => $product
        ]);
    }

    public function byId($id)
    {
        $product = Product::where('id', $id)->get();

        return view('market', [
            'title' => 'market',
            'data' => $product
        ]);
    }

    public function buyProduct(Request $request)
    {
        $request->validate([
            'productId' => 'required',
            'jumlah' => 'required'
        ]);



        $user = Auth::user();

        $product = Product::find($request->productId);
        $product->update([
            "stok" => $product->stok - $request->jumlah
        ]);


        $chart = $user->chart->where('product_id', $request->productId)->first();

        if ($chart) {
            $chart->update([
                'jumlah' => $chart->jumlah + $request->jumlah
            ]);
        } else {
            $belanja = new Chart;

            $belanja->user_id = $user->id;
            $belanja->product_id = $request->productId;
            $belanja->jumlah = $request->jumlah;
            $belanja->save();
        }


        return back();
    }
}
