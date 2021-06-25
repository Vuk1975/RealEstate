<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Service;

class FrontPropertiesListController extends Controller
{
    public function index() {
        //$categories = Category::get();
        $properties = Property::latest()->limit(6)->get();
        $sliders = Slider::get();
        $services = Service::latest()->limit(3)->get();
        return view('index', compact('properties', 'sliders', 'services'));
    }
    
    
    public function properties() {
        $properties = Property::with('category')->simplePaginate(12);
        return view('properties',compact('properties'));
    }

    public function show($slug, $id){
        $property = Property::with('image')->find($id);
        $photos = json_decode($property->image->pathName, true);
        //$productFromSameCategories = Property::with('image')
        //->inRandomOrder()
        //->where('category_id', $property->category_id)
        //->where('id', '!=', $property->id)
        //->limit(3)
        //->get();

        return view('show', compact('property', 'photos'));
    }

    public function showCaterory($slug, $id){
        $category = Category::with('property')->find($id);
       
        $productFromSameCategories = Property::with('category')
        ->inRandomOrder()
        ->where('category_id', $category->id)
        ->simplePaginate(12);

        return view('category', compact('category', 'productFromSameCategories'));
    }
    
}
