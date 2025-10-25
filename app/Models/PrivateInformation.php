<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateInformation extends Model
{
    //
      protected $fillable = [
        'phone_one',
        'phone_two',
        'email',
        'address',
        'opening_from',
        'opening_to',
    ];
}
