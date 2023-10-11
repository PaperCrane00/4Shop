<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function types()
    {
    	return $this->hasMany(Type::class);
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
