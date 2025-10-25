<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $fillable = [
        'name', 'menu_img', 'half_price', 'full_price', 'category_id', 'status', 'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
