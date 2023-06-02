<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Contracts\Service\Attribute\Required;

class PostesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('blogs.index')
        ->with('posts',Post::get());
        
    }
    public function create()
    {
        return view('blogs.create');
    }
    public function store(Request $request)
    {  
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);
        $slug= Str::slug($request->title, '-');
     $newImageName=uniqid().'-'.$slug.'.'.$request->image->extension();
     $request->image->move(public_path('images'),$newImageName);
      
     Post::create(['title'=>$request->input('title'),
     'description'=>$request->input('description'),
     'image_path'=>$newImageName,
     'slug'=>$slug,
     'user_id'=>auth()->user()->id]);
    return redirect('/blogs');    
    }
    public function show($slug)
    {
      return view('blogs.show')
      ->with('post',Post::where('slug',$slug)->first());
    }
    public function edit($slug)
    {
        return view('blogs.edit')
      ->with('post',Post::where('slug',$slug)->first());  
      //the first post means name of varaiable wich we will use
    }
    public function update(Request $request,$slug)
    {Post::where('slug',$slug)
        ->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'slug'=>$slug,'user_id'=>auth()->user()->id]);
            return redirect('/blogs'.$slug);  
    }

    public function destroy($slug)
    {
        Post::where('slug',$slug)->delete();
        return redirect('/blogs')
        ->with('message','the blog is deleted');
    }
}
