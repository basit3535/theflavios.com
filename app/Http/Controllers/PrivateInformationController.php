<?php

namespace App\Http\Controllers;

use App\Models\PrivateInformation;
use Illuminate\Http\Request;

class PrivateInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $info = PrivateInformation::first(); // Assuming only one row is needed
        return view('dashboard.privateInformation.index', compact('info'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.privateInformation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_one' => 'nullable|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'opening_from' => 'nullable',
            'opening_to' => 'nullable',
        ]);

        PrivateInformation::create($request->all());

        return redirect()->route('private-information.index')->with('success', 'Information saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $info = PrivateInformation::findOrFail($id);
        return view('dashboard.privateInformation.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info = PrivateInformation::findOrFail($id);
        return view('dashboard.privateInformation.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // dd($request->all());
        $request->validate([
            'phone_one' => 'nullable|string|max:255',
            'phone_two' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string|max:255',
            'opening_from' => 'nullable',
            'opening_to' => 'nullable',
        ]);

        $info = PrivateInformation::findOrFail($id);
        $info->update($request->all());

        return redirect()->route('private-information.index')->with('success', 'Information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = PrivateInformation::findOrFail($id);
        $info->delete();

        return redirect()->route('private-information.index')->with('success', 'Information deleted successfully.');
    }
}
