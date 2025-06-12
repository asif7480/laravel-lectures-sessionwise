<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ["categoryName"];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
