<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["category_id", "productName", "price"];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
