<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',	
        'price',
        'thumbnail',	
        'desc',	
       'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function discounts() {
        return $this->hasMany(Discount::class);
    }

    public function stock() {
        return $this->hasOne(Stock::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
