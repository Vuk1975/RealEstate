<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Category;
use App\Models\Subcategory;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->get();
        return view('admin.property.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Property $property)
    {
        $this->validate($request,[
            'street'=>'required',
            'quart'=>'required',
            'area'=>'required',
            'registered_area'=>'required',
            'window_type'=>'required',
            'water_outlets'=>'required|numeric',
            'bathrooms'=>'required|numeric',
            'badrooms'=>'required|numeric',
            'rooms'=>'required|numeric',            
            'flors'=>'required|numeric',
            'at_flor'=>'required|numeric',
            'year'=>'required|numeric',
            'description'=>'required|min:3',
            'additional_info'=>'required',
            'price'=>'required|numeric',
            'category'=>'required'
         ]);

        $property = Property::create([
  
            'street'=>$request->street,
            'quart'=>$request->quart,
            'area'=>$request->area,
            'registered_area'=>$request->registered_area,
            'window_type'=>$request->window_type,
            'water_outlets'=>$request->water_outlets,
            'bathrooms'=>$request->bathrooms,
            'badrooms'=>$request->badrooms,
            'rooms'=>$request->rooms,
            'flors'=>$request->flors,
            'at_flor'=>$request->at_flor,
            'year'=>$request->year,
            'description'=>$request->description,
            'additional_info'=>$request->additional_info,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'subcategory_id'=>$request->subcategory,

         ]);

         $id = $property->id;
         session()->put('id', $id);
         drakify('success');
         return redirect()->route('image.create', compact('property', 'id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        return view('admin.property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);

        $property->street = $request->street;
        $property->quart = $request->quart;
        $property->area= $request->area;
        $property->registered_area = $request->registered_area;
        $property->window_type = $request->window_type;
        $property->water_outlets = $request->water_outlets;
        $property->bathrooms = $request->bathrooms;
        $property->badrooms = $request->badrooms;
        $property->rooms = $request->rooms;
        $property->flors = $request->flors;
        $property->at_flor = $request->at_flor;
        $property->year = $request->year;
        $property->description = $request->description;
        $property->additional_info = $request->additional_info;
        $property->price = $request->price;
        $property->category_id = $request->category;
        $property->subcategory_id = $request->subcategory;

        $property->save();

        $id = $property->id;
        session()->put('id', $id);
        drakify('success');
        return redirect()->route('image.update', compact('property', 'id'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        
        drakify('success');
        return redirect()->route('property.index');
    }
    

    public function loadSubCategories(Request $request,$id){
        $subcategory  = Subcategory::where('category_id',$id)->pluck('name','id');
        return response()->json($subcategory);
    }
}
