<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function types()
    {
    	return $this->hasMany(Type::class);
    }

}
