<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    public $guarded = [];

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, '.', ',');
    }

    use Searchable;

    protected $table = 'products'; // اگه جدول خاص داری، مشخص کن

    public function toSearchableArray()
    {
        return [
            'productName' => $this->productName,
            'description' => $this->description,
            // سایر فیلدهایی که می‌خوای ایندکس بشن
        ];
    }
}
