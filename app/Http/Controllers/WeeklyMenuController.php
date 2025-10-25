<?php

namespace App\Http\Controllers;

use App\Models\WeeklyMenu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WeeklyMenuController extends Controller
{
    public function index()
    {
        $menus = WeeklyMenu::with('category')->latest()->get();
        $categories = Category::all();

        return view('dashboard.weekly_menu.index', compact('menus','categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.weekly_menu.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'full_price' => 'required|numeric|min:0',
            'half_price' => 'required|numeric|min:0',
            'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'category_id' => 'required|exists:categories,id',
            'menu_img' => 'nullable|image',
        ]);

        if ($request->hasFile('menu_img')) {
            $file = $request->file('menu_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('menu_images'), $filename);
            $validated['menu_img'] = 'menu_images/' . $filename;
        }

        WeeklyMenu::create($validated);

        return redirect()->route('weekly-menus.index')->with('success', 'Menu added successfully.');
    }

    public function edit($id)
    {
        $menu = WeeklyMenu::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.weekly_menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $menu = WeeklyMenu::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'full_price' => 'required|numeric|min:0',
            'half_price' => 'required|numeric|min:0',
            'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'category_id' => 'required|exists:categories,id',
            'menu_img' => 'nullable|image',
        ]);

        if ($request->hasFile('menu_img')) {
            $file = $request->file('menu_img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('menu_images'), $filename);
            $validated['menu_img'] = 'menu_images/' . $filename;
        }

        $menu->update($validated);

        return redirect()->route('weekly-menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy($id)
    {
        $menu = WeeklyMenu::findOrFail($id);

        // Delete old image if exists
        if ($menu->menu_img && file_exists(public_path($menu->menu_img))) {
            unlink(public_path($menu->menu_img));
        }

        $menu->delete();

        return redirect()->route('weekly-menus.index')->with('success', 'Menu deleted successfully.');
    }
}
