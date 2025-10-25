<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\SocialLink;
use App\Models\WeeklyMenu;
use Illuminate\Http\Request;
use App\Models\PrivateInformation;

class WebController extends Controller
{
    //
    public function index(){
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $categories = Category::all();
        $weeklyMenu = WeeklyMenu::with('category')->latest()->get();
        $menuItems = Menu::with('category')->latest()->get();
        $socialLinks = SocialLink::all();
        $privateInformation = PrivateInformation::first();
        return view('welcome', compact('days','categories','weeklyMenu','menuItems','socialLinks','privateInformation'));
    }
    public function menu(){
        return view('menu');
    }
}
