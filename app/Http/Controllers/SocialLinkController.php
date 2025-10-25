<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //
        $socialLinks = SocialLink::all();
        return view('dashboard.social_links.index', compact('socialLinks'));
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
        $socialLink = $request->all();
        SocialLink::create($socialLink);
        return redirect()->route('social-links.index')->with('success', 'Social link created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $socialLink = $request->all();
        SocialLink::findOrFail($id)->update($socialLink);
        return redirect()->route('social-links.index')->with('success', 'Social link updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $socialLink = SocialLink::findOrFail($id);
        $socialLink->delete();
        return redirect()->route('social-links.index')->with('success', 'Social link deleted successfully.');
    }
}
