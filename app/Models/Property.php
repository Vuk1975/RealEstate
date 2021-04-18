<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;


class Property extends Model
{
    protected $fillable = ['street', 'quart', 'area','registered_area', 'window_type', 'water_outlets', 
                            'bathrooms', 'badrooms','rooms', 'flors', 'at_flor', 'year', 'description', 
                            'additional_info', 'price', 'category_id','subcategory_id'];

    public function category(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
}


