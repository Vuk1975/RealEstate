<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Img;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }
    
    public function create(){
        return view('admin.slider.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'img'=>'required|mimes:jpeg, png',
            'titleTop'=>'required',
            'introTitleTop'=>'required',
            'introSubtitle'=>'required',
            'introLink'=>'required'
            
        ]);
        $file = $request->file('img');
        $name = time().$file->getClientOriginalName();

        $image = Img::make($file->getRealPath());
        $image->crop(1920, 960)->save(public_path().'/images/slider/'.$name);

        Slider::create([
            'img'=>$name,
            'titleTop'=>$request->titleTop,
            'introTitleTop'=>$request->introTitleTop,
            'introSubtitle'=>$request->introSubtitle,
            'introLink'=>$request->introLink

        ]);
        drakify('success');
        return redirect()->route('slider.index');
    }
    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }
    public function update(Request $request, $id){
        $slider = Slider::find($id);

        $slider->titleTop = $request->titleTop;
        $slider->introTitleTop = $request->introTitleTop;
        $slider->introSubtitle = $request->introSubtitle;
        $slider->introLink = $request->introLink;
        $slider->save();
        drakify('success');
        return redirect()->route('slider.index');
    }

    public function destroy($id){
        Slider::find($id)->delete();
        drakify('success');
        return redirect()->back();
    }
}
