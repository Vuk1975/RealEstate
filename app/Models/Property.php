<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Image;
use App\Models\Tag;


class Property extends Model
{
    use HasFactory;
    
    protected $fillable = ['street', 'quart', 'img', 'area','registered_area', 'window_type', 'water_outlets', 
                            'bathrooms', 'badrooms','rooms', 'flors', 'at_flor', 'year', 'description', 
                            'additional_info', 'price', 'category_id','subcategory_id'];

    
    public function user(){
        return $this->belongsTo('User');
        }
    public function category(){
    	return $this->hasOne(Category::class,'id','category_id');
    }
    public function image(){
    	return $this->hasOne(Image::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
        }
   
}



