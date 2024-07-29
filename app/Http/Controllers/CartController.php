<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create($catalogueId)
    {
        $catalogue = Catalogue::findOrFail($catalogueId);
        return view('landing.cart', compact('catalogue'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'catalogue_id' => 'required|exists:tb_catalogues,catalogue_id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:15',
            'wedding_date' => 'required|date',
            'status' => 'required|string|in:pending,confirmed,canceled',
        ]);

        $catalogue = Catalogue::findOrFail($request->catalogue_id);

        Order::create([
            'catalogue_id' => $request->catalogue_id,
            'package_name' => $catalogue->package_name,
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'wedding_date' => $request->wedding_date,
            'status' => 'pending', // Set the default status to pending
            'user_id' => auth()->id(), // Assuming the user is logged in
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('landing.dashboard')->with('success', 'Order placed successfully.');
    }
}
