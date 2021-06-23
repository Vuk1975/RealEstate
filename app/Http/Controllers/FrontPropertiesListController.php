<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Property;
use App\Models\Slider;

class FrontPropertiesListController extends Controller
{
    public function index() {
        $properties = Property::latest()->limit(6)->get();
        $sliders = Slider::get();
        return view('index', compact('properties', 'sliders'));
    }
    
    public function properties() {
        $properties = Property::with('category')->paginate(12);
        return view('properties',compact('properties'));
    }

    public function show($slug, $id){
        $property = Property::find($id);
        $photos = json_decode($property->image->pathName, true);
        $productFromSameCategories = Property::inRandomOrder()->
        where('category_id', $property->category_id)->
        where('id', '!=', $property->id)
        ->limit(3)
        ->get();

        return view('show', compact('property', 'photos', 'productFromSameCategories'));
    }
}
