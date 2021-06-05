<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Tag;

class PropertyTagController extends Controller
{
    public function attachTag($property_id, $tag_id){
        $property = Property::find($property_id);
        $tag = Tag::find($tag_id);
        $property->tags()->attach($tag_id);
        drakify('success');
        return back();
    }
    public function detachTag($property_id, $tag_id){
        $property = Property::find($property_id);
        $tag = Tag::find($tag_id);
        $property->tags()->detach($tag_id);
        drakify('success');
        return back();
    }
}
