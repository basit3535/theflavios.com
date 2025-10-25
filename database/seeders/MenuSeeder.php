<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          $menuItems = [
                    // Soup
                    ['name' => 'Chef special soup (chicken)', 'category_id' => '1', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Thai chili soup', 'category_id' => '1', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Creamy Mushroom soup', 'category_id' => '1', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Hot & sour soup', 'category_id' => '1', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Appetizers / Snacks
                    ['name' => 'Taco (signature)', 'category_id' => '2', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Drumstick', 'category_id' => '2', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Hash brown', 'category_id' => '2', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Thai chicken on Toast (signature)', 'category_id' => '2', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Better fry chicken (signature)', 'category_id' => '2', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Oven baked Pasta', 'category_id' => '2', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Loaded fries', 'category_id' => '2', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Desi Specialities - Handi
                    ['name' => 'Mughalai handi (signature)', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Creamy cheese handi', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'White handi', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Hara bhara', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'White jalfrezi', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Desi Specialities - Karhai/Rice
                    ['name' => 'Chicken Karhai', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken Nehari', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken Qorma', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken Pulao', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken Mince', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken Qeema', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Velvet Chicken', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Mutton Karahi', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Mutton Pulao', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Mutton Paye', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Mutton Mince', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Mutton Qeema', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beef Karahi', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beef Pulao', 'category_id' => '3', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beef Paye', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beef Mince', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beef Qeema', 'category_id' => '3', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Curry Pakora', 'category_id' => '3', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Chinese / Thai - Gravies
                    ['name' => 'Tso’s chicken (Signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Kung pao (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Cashewnut Chicken (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Crispy chili chicken (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Hot & Spicy chicken (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Shinghai chicken (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Black pepper chicken', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken chili dry', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Manchurian', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Chinese / Thai - Rice
                    ['name' => 'Bounty rice (signature)', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Egg fried rice', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Vegetable fried rice', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Chicken fried rice', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Masala fried rice', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Garlic fried rice', 'category_id'=> '4', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Continental - Pasta
                    ['name' => 'Alfredo pasta (fettuccine / penne) (signature)', 'category_id' => '5', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Honey pepper pasta (signature)', 'category_id' => '5', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Pesto penne pasta (signature)', 'category_id' => '5', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],

                    // Continental - Salad
                    ['name' => 'Thai grill salad (signature)', 'category_id' => '6', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Special chicken salad (signature)', 'category_id' => '6', 'menu_img' => 'images/gallery2-img1.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Beet piece salad', 'category_id' => '6', 'menu_img' => 'images/gallery2-img7.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                    ['name' => 'Sweet & sour apple salad', 'category_id' => '6', 'menu_img' => 'images/gallery2-img5.jpg',  'half_price' => ' 12', 'full_price' => '24'],
                ];
                DB::table('menus')->insert( $menuItems);

    }
}
