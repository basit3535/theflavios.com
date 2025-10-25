<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
      protected $fillable = [
        'name','status'
    ];

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
    public function weeklymenu()
    {
        return $this->hasMany(WeeklyMenu::class);
    }
}
