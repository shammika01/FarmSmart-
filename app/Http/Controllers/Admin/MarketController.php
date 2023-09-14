<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\market;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketController extends Controller

{

    public function create()
    {
        return view('admin.market.create');
    }

    public function update(Request $request, market $market)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example for image upload validation
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Update the item with the validated data
        $market->update([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'image' => $imagePath,
            // Add other fields as needed
        ]);

        return redirect()->route('admin.market.index')->with('success', 'Item updated successfully.');
    }

    public function edit(market $market)
    {
        return view('admin.market.edit', compact('market'));
    }
    public function index()
    {

        $items = market::all();
        return view('admin.market.index', compact('items'));
    }

    public function destroy($id)
    {
        $marketItem = market::find($id);

        if (!$marketItem) {
            return redirect()->back()->with('error', 'Item not found.');
        }

        $marketItem->delete();

        return redirect()->route('admin.market.index')->with('success', 'Item deleted successfully.');
    }


    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust allowed file types and size as needed
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new Market instance and save it to the database
        Market::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'image' => $imagePath,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.market.index')->with('success', 'Item added successfully.');
    }
}
