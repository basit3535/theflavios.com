<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeeklyMenu extends Model
{
    //
    protected $fillable = [
        'name', 'menu_img', 'half_price', 'full_price', 'category_id', 'status', 'description','day'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
