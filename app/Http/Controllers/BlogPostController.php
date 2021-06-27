<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Blogpost;
use Img;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = Blogpost::get();
        return view('admin.blogpost.index', compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogpost.create');
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

        $blogpost = Blogpost::create([
            'user_id' => auth()->id(),
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'img'=>$name,
            'description'=>$request->description
         ]);
        
         drakify('success');
         return redirect()->route('blogpost.index', compact('blogpost'));
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
        $blogpost = Blogpost::find($id);
        return view('admin.blogpost.edit',compact('blogpost'));
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
        $blogpost = Blogpost::find($id);
        
        

        $file = $request->file('img');
        if($file){
            $name = time().'_'.$file->getClientOriginalName();
            $image = Img::make($file->getRealPath());
            $image->crop(1200, 660)->save(public_path().'/images/properties/'.$name);
            $blogpost->img = $name;
        }
        

        
        $blogpost->name = $request->name;
        $blogpost->slug = Str::slug($request->name);
        $blogpost->description = $request->description;
       
       

        $blogpost->save();

        
        drakify('success');
        return redirect()->route('blogpost.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogpost = Blogpost::find($id);
        $blogpost->delete();
        drakify('success');
        return redirect()->route('blogpost.index');
    }
}
