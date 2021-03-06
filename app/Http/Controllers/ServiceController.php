<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Service;
use Img;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:3',
            'img' => 'required|mimes:jpeg,jpg,png,gif',
            'description'=>'required|min:3',
           
         ]);
        
        
        $file = $request->file('img');
        $name = time().$file->getClientOriginalName();

        $image = Img::make($file->getRealPath());
        $image->crop(1200, 660)->save(public_path().'/images/properties/'.$name);

        $service = Service::create([
            'user_id' => auth()->id(),
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'img'=>$name,
            'description'=>$request->description
         ]);
        
         drakify('success');
         return redirect()->route('service.index', compact('service'));
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
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
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
        $service = Service::find($id);
        
        

        $file = $request->file('img');
        if($file){
            $name = time().'_'.$file->getClientOriginalName();
            $image = Img::make($file->getRealPath());
            $image->crop(1200, 660)->save(public_path().'/images/properties/'.$name);
            $service->img = $name;
        }
        

        
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->description = $request->description;
       
       

        $service->save();

        
        drakify('success');
        return redirect()->route('service.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        drakify('success');
        return redirect()->route('service.index');
    }
}
