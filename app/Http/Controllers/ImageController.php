<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PropertyController;
use Img;



class ImageController extends Controller
{
    public function index()
    {
      //
    }
    
    public function edit(Property $property, Image $image)
    {
        
      if(session()->has('id')){
        $id  = Session::get('id');
       }
      $property = Property::find($id);
      $property_id = $property->id;
      
      $image = Image::where('property_id',  '=', $property_id)->firstOrFail();
      
      
        
      return view('admin.images.edit', compact('property', 'image'));
    }

    public function create(Request $request, $id){
        if(session()->has('id')){
        $id  = Session::get('id');
        }
        
        return view('admin.images.create', compact('id'));
    }


    public function store(Request $request, $id){
      if(session()->has('id')){
       $id  = Session::get('id');
      }
      

      $this->validate($request, [
                'pathName' => 'required',
                'pathName.*' => 'mimes:jpeg,jpg,png,gif,'
        ]);


    if($request->hasfile('pathName'))
    {
            foreach($request->file('pathName') as $file)
            {
                $name = time().'_'.$file->getClientOriginalName();
                $img = Img::make($file->getRealPath());
                $img->crop(1200, 660)->save(public_path().'/images/properties/'.$name);
                $data[] = $name;  

            }
         }

         
    $file = new Image();
    $file->pathName = json_encode($data);
    $file->property_id = $id;
    $file->save();



    drakify('success');
    return redirect()->route('property.show', [$file->property_id]);
    }  

    public function update(Request $request, $id){
      if(session()->has('id')){
        $id  = Session::get('id');
       }
      $property = Property::find($id);
      $property_id = $property->id;
      
      $image = Image::where('property_id',  '=', $property_id)->firstOrFail();
      
      $deleteImage = $request->input('deleteImage');
      $oldImages = json_decode( $image->pathName, true);

      if($deleteImage){
        $restImages = array_diff($oldImages, $deleteImage);
      }else{
        $restImages = $oldImages;
      }
     
      if($request->hasfile('pathName'))
        {
            foreach($request->file('pathName') as $file)
            {
                $name = time().'_'.$file->getClientOriginalName();
                $img = Img::make($file->getRealPath());
                $img->resize(1200, 660)->save(public_path().'/images/properties/'.$name);
                $data[] = $name;  
            }
            $newImages = $data;
            $updatedImages = array_merge ($restImages, $newImages);
         }else{
            $updatedImages = $restImages;
         }
      
     
      
      $image->pathName = json_encode($updatedImages);
      $image->save();
      drakify('success');
      return redirect()->route('property.index');
      
    }

    public function destroy($id){
      if(session()->has('id')){
        $id  = Session::get('id');
       }
      $file = new Image();
      $file->property_id = $id;
             
        
        \Storage::disk('public')->delete('/images/properties/' . $file->pathName);
        $file->delete();
        drakify('success');
        return redirect()->route('property.index');
    }
  }

