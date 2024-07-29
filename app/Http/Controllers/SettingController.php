<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Setting::all(); // This returns an empty collection if no settings are found
        return view("admin.profile.index", compact('profile'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $setting = Setting::first();
        return view('admin.profile.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'website_name' => 'required|string|max:255',
            'phone_number1' => 'required|string|max:15',
            'phone_number2' => 'nullable|string|max:15',
            'email1' => 'required|email|max:255',
            'email2' => 'nullable|email|max:255',
            'address' => 'required|string',
            'maps' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'youtube_url' => 'nullable|url',
            'header_business_hour' => 'required|string',
            'time_business_hour' => 'required|string',
        ]);

        $request->setting_id = 1;

        $setting = Setting::first(); // Assuming there's only one setting entry

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('images', 'public');

            if ($setting->logo) {
                Storage::disk('public')->delete($setting->logo);
            }

            $setting->update(['logo' => $logoPath]);
        }

        $setting->update($request->except(['logo']));

        return redirect()->route('profile.index')->with('success', 'Settings updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
