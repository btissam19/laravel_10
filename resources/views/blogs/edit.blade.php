@extends('welcome')
@section('content')
<div class="container mx-auto">
    <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">{{$post->title}}</h2> 
    By:<span class="text-gray-500 italic">{{$post->user->name}}</span>
    on:<span class="text-gray-500 italic">{{date('d-m-y',strtotime($post->updated_at))}}</span> 
</div>
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-14 border-b border-gray-300">
    <div class="flex">
        <img src="{{$post->image_path}}" alt="" class="object-cover h-96 w-full">
    </div>
        <div>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
    </div>
    <a href="/blogs/{{$post->slug}}" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase  bg-green-700 border-2 text-l">edit blog</a> 
</div>  
@endsection