<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.catalogue.index", [
            'catalogues' => Catalogue::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.catalogue.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(Catalogue::$rules);

        // Handle the image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store the image in the 'public' disk and get the path
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the catalogue with the uploaded image path
        Catalogue::create([
            'image' => $imagePath,
            'package_name' => $request->package_name,
            'description' => $request->description,
            'price' => $request->price,
            'status_publish' => $request->status_publish,
            'created_at' => now(),
            'user_id' => auth()->id() // assuming you want to store the user_id
        ]);

        return redirect()->route('catalogues.index')->with('success', 'Catalogue created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $catalogue = Catalogue::findOrFail($id);
        return view('admin.catalogue.edit', ['catalogue' => $catalogue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(Catalogue::$rules);

        // Find the catalogue by ID
        $catalogue = Catalogue::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');

            // Delete the old image if it exists
            if ($catalogue->image) {
                Storage::disk('public')->delete($catalogue->image);
            }

            // Update the catalogue with the new image path
            $catalogue->update([
                'image' => $imagePath,
                'package_name' => $request->package_name,
                'description' => $request->description,
                'price' => $request->price,
                'status_publish' => $request->status_publish,
                'updated_at' => now(),
            ]);
        } else {
            // Update the catalogue without changing the image path
            $catalogue->update([
                'package_name' => $request->package_name,
                'description' => $request->description,
                'price' => $request->price,
                'status_publish' => $request->status_publish,
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('catalogues.index')->with('success', 'Catalogue updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catalogue = Catalogue::findOrFail($id);
        // Delete the associated image file if it exists
        if ($catalogue->image) {
            Storage::disk('public')->delete($catalogue->image);
        }

        $catalogue->delete();
        return redirect()->route('catalogues.index')->with('success', 'Catalogue deleted successfully.');
    }
}
