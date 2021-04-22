<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PropertyController;



class ImageController extends Controller
{
    public function index()
    {
      //
    }
    
    public function create(Request $request, $id){
      if(session()->has('id')){
        $id  = Session::get('id');
        return view('admin.images.create', compact('id'));
      }
    }


    public function store(Request $request, $id){
      if(session()->has('id')){
       $id  = Session::get('id');
      }
  

      $this->validate($request, [
                'pathName' => 'required',
                'pathName.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,xlx,xls,pdf'
        ]);


    if($request->hasfile('pathName'))
    {
            foreach($request->file('pathName') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/images/properties/', $name);  
                $data[] = $name;  
            }
         }


    $file= new Image();
    $file->pathName=json_encode($data);
    $file->property_id = $id;
    $file->save();


    drakify('success');
    return redirect()->route('property.index');
    }  
    
  }

