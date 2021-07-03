<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Property;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Blogpost;

class FrontPropertiesListController extends Controller
{
    //index page
    public function index() {
        //$categories = Category::get();
        $properties = Property::latest()->limit(6)->get();
        $sliders = Slider::get();
        $services = Service::latest()->limit(3)->get();
        $blogposts = Blogpost::latest()->limit(2)->get();
        return view('index', compact('properties', 'sliders', 'services', 'blogposts'));
    }
    
    //All Properties
    public function properties() {
        $properties = Property::with('category')->simplePaginate(12);
        return view('properties',compact('properties'));
    }
    //Single property
    public function show($slug, $id){
        $property = Property::with('image')->find($id);
        $photos = json_decode($property->image->pathName, true);
        return view('show', compact('property', 'photos'));
    }
    //Properties from same category
    public function showCategory($slug, $id){
        $category = Category::with('property')->find($id);
        $productFromSameCategories = Property::with('category')
        ->inRandomOrder()
        ->where('category_id', $category->id)
        ->simplePaginate(12);
        return view('category', compact('category', 'productFromSameCategories'));
    }

    public function showSubcategory($id){
        
        $subcategory = Subcategory::with('property')->find($id);
        $properties = Property::with('subcategory')->where('subcategory_id', $subcategory->id)
        ->where('category_id', $subcategory->category_id)
        ->inRandomOrder()
        ->simplePaginate(12);
        return view('subcategory', compact('subcategory', 'properties'));
    }

    //Services page
    public function services(){
        $services = Service::latest()->get();
        return view('services', compact('services'));
    }
    //Single service
    public function showService($slug, $id){
        $service = Service::find($id);     
        return view('showService', compact('service'));
    }
    
     //Blogposts page
     public function blogposts(){
        $blogposts = Blogpost::with('user')->latest()->get();
        return view('blogposts', compact('blogposts'));
    }
    //Single blog
    public function showBlogpost($slug, $id){
        $blogpost = Blogpost::with('user')->find($id);     
        return view('showBlogpost', compact('blogpost'));
    }
}