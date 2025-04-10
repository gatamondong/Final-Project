<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function index() {
        $properties = Property::latest()->get();
        return view('properties.index', compact('properties'));
    }

    public function create() {
        return view('properties.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'location' => 'required',
            'image' => 'image|nullable|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('properties', 'public');
        }

        Property::create($data);
        return redirect()->route('properties.index');
    }

    public function edit(Property $property) {
        return view('properties.edit', compact('property'));
    }

    public function update(Request $request, Property $property) {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'location' => 'required',
            'image' => 'image|nullable|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($property->image);
            $data['image'] = $request->file('image')->store('properties', 'public');
        }

        $property->update($data);
        return redirect()->route('properties.index');
    }

    public function destroy(Property $property) {
        if ($property->image) {
            Storage::disk('public')->delete($property->image);
        }
        $property->delete();
        return redirect()->route('properties.index');
    }

    public function show(Property $property)
        {
            return view('properties.show', compact('property'));
        }

}
