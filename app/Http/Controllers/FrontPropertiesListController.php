<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class FrontPropertiesListController extends Controller
{
    public function index() {
        $properties = Property::latest()->limit(6)->get();
        return view('properties', compact('properties'));
    }
    
}
