<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function chart($id)
    {
        if (Auth::user()->id != $id) {
            return redirect('/profile');
        }

        $chart = Chart::where('user_id', $id)->get();


        return view('chart', ['data' => $chart]);
    }

    public function profile()
    {
        return view('profile', ['data' => Auth::user()]);
    }



    public function removeChart(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'productId' => 'required'
        ]);

        $chart = Chart::find($request->id);

        $product = Product::find($request->productId);

        $product->update([
            'stok' => $product->stok +  $chart->jumlah
        ]);


        $chart->delete();

        return back();
    }
}
