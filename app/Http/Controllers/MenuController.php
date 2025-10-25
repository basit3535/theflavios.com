<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::with('category')->get();
        $categories = Category::all();
        return view('dashboard.menu.index', compact('menus', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::all();
        // return view('dashboard.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'menu_img' => 'nullable|image',
            'full_price' => 'required|numeric|min:0',
            'half_price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = null;
        if ($request->hasFile('menu_img')) {
            $file = $request->file('menu_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('menu_images');

            // Make sure the folder exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $imagePath = 'menu_images/' . $fileName; // This is the path to store in DB
        }


        Menu::create([
            'name' => $request->name,
            'menu_img' => $imagePath,
            'full_price' => $request->full_price,
            'half_price' => $request->half_price,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu item created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $menu = Menu::with('category')->findOrFail($id);
        // return view('dashboard.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    //     $menu = Menu::findOrFail($id);
    //     $categories = Category::all();
    //     return view('dashboard.menu.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $menu = Menu::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'menu_img' => 'nullable|image',
            'full_price' => 'required|numeric|min:0',
            'half_price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagePath = $menu->menu_img;

        if ($request->hasFile('menu_img')) {
            // Delete old image if it exists
            if ($menu->menu_img && file_exists(public_path($menu->menu_img))) {
                unlink(public_path($menu->menu_img));
            }

            $file = $request->file('menu_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('menu_images');

            // Create directory if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $imagePath = 'menu_images/' . $fileName;
        }

        $menu->update([
            'name' => $request->name,
            'menu_img' => $imagePath,
            'full_price' => $request->full_price,
            'half_price' => $request->half_price,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu item deleted successfully.');
    }
}
