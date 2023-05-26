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
    // {    $post=Post::all();
    //       dd($post);
        return view('blogs.index')
        ->with('posts',Post::get());
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $slug= Str::slug($request->title, '-');
     $newImageName=uniqid().'-'.$slug.'.'.$request->image_path->extension();
     $request->image_path->move(public_path('images'),$newImageName);
      
     Post::create(['title'=>$request->input('title'),'description'=>$request->input('description'),
     'image_path'=>$newImageName,'slug'=>$slug,'user_id'=>auth()->user()->id]);
    return redirect('/blogs');


        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
