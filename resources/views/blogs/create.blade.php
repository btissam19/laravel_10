@extends('welcome')
@section('content')
   <div class="container m-auto text-center pt-14 pb-5">
    <h1 class="text-6xl font-bold mt-2">Add new post</h1>
    </div> 
    <div class="container m-auto text-center pt-14 pb-5">
        <form action="/blog" method="POST">
            <input type="text" name="title" placeholder="Title" class="w-5/6 h-20 text-6xl rounded-lg shadow-lg border-b hover:border-green-400 p-10 mb-5">
            <textarea name="descreption" placeholder="descreption" class="w-5/6 h-60 text-l hover:border-green-400 rounded-lg shadow-lg border-b p-10 mb-5"></textarea>
       <div class="py-14">
        <label class="bg-gray-200 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">
          <span>Select an image to upload </span>
          <input type="file" name="image_path" class="hidden">
       </div>
       <button type="submit" class="bg-green-400 hover:bg-gray-700 text-gray-700 hover:text-gray-200 transition duration-300 cursor-pointer p-5 rounded-lg font-bold uppercase">send post</button>
        </form> 
            
    @endsection
