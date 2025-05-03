<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $guarded = [];

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, '.', ',');
    }
}
