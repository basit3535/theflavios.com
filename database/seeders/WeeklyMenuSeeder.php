<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeeklyMenuSeeder extends Seeder
{

    public function run(): void
    {
         $weeklyMenu = [
            ['name' => 'Hash Brown', 'day' => 'monday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Cream Cheese Handi', 'day' => 'monday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Chicken Chili Dry', 'day' => 'monday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Pesto Penne Pasta', 'day' => 'monday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Drumsticks', 'day' => 'tuesday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Hara Bhara', 'day' => 'tuesday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Shenghai Chicken', 'day' => 'tuesday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Alfredo Pasta (Fettuccine / Penne)', 'day' => 'tuesday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Tacos', 'day' => 'wednesday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'White Handi', 'day' => 'wednesday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Cashewnut Chicken', 'day' => 'wednesday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Honey Pepper Pasta', 'day' => 'wednesday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Thai Chiken on Toast', 'day' => 'thursday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Mughalai Handi', 'day' => 'thursday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Hot & Spicy Chicken', 'day' => 'thursday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Pesto Penne Pasta', 'day' => 'thursday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Better Fry Chicken', 'day' => 'friday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Creamy Cheese Handi', 'day' => 'friday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Tso\'s Chicken', 'day' => 'friday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Black Pepper', 'day' => 'friday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Honey Pepper Pasta', 'day' => 'friday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Oven Baked Pasta', 'day' => 'saturday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'White Jalfrezi', 'day' => 'saturday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Crispy Chilli Chicken', 'day' => 'saturday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Alfredo Pasta (Fettuccine / Penne)', 'day' => 'saturday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Pesto Penne Pasta', 'day' => 'saturday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Loaded Fries', 'day' => 'sunday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Mughalai Handi', 'day' => 'sunday', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Kung Pao', 'day' => 'sunday', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Manchurian', 'day' => 'sunday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
            ['name' => 'Alfredo Pasta (Fettuccine / Penne)', 'day' => 'sunday', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24', 'category_id' => 1],
        ];

        DB::table('weekly_menus')->insert( $weeklyMenu);
    }
}
