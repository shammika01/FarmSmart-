<?php

namespace App\Http\Controllers;

use App\Models\market;
use Illuminate\Http\Request;

class FrontEndMarketController extends Controller
{
    public function index()
    {
        $marketItem = market::all();
        return view('market.index', ['marketItem' => $marketItem]);
    }

    public function cart(Request $request)
    {
        $cart = json_decode($request->query('cart'), true);

        $cartData = json_decode($request->input('cartData'), true);

        // You can optionally save the cart data to the session for future reference
        session()->put('cart', $cartData);

        // Load the next view and pass the cart data
        return view('market.cart', ['cartData' => $cartData]);

        // $marketItem = market::all();
        // return view('market.cart', ['marketItem' => $marketItem], compact('cart'));
    }
}
