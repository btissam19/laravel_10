@extends('welcome')
@section('content')
<div class="container mx-auto text-center pt-6 pb-5 mt-9">
<h1 class="text-6xl font-bold mt-12">All Posts</h1> 
</div>
@if (Auth::check())
<div class="container mx-auto p-5 border-b border-gray-300">
    <a href="/blogs/create" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase  bg-green-700 border-2 text-l">Add new blog</a> 
</div>
@endif
@foreach ($posts as $post)
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-14 border-b border-gray-300">
    <div class="flex">
        <img src="{{$post->image_path}}" alt="" class="object-cover">
    </div>
    <div >
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2>
        <div>
            By:<span class="text-gray-500 italic">{{$post->user->name}}</span>
            on:<span class="text-gray-500 italic">{{date('d-m-y',strtotime($post->updated_at))}}</span>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
            <a href="/blogs/{{$post->slug}}" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase inline-block bg-gray-700 border-2 text-l">read more</a>
        </div>
    </div>
</div> 
@endforeach 
@endsection