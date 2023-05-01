@extends('welcome')
@section('content')
<div class="container mx-auto text-center pt-6 pb-5 mt-9">
 <h1 class="text-6xl font-bold mt-12">All Posts</h1>  
</div>
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-14 border-b border-gray-300">
    <div class="flex">
        <img src="https://picsum.photos/id/343/700/400" alt="" class="object-cover">
    </div>
    <div >
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">Best Nour in The World</h2>
        <div>
            By:<span class="text-gray-500 italic">test on 31-03-2023</span>
            <p class="text-l text-gray-700 py-8 leading-6">You are a good teacher that explains every detail in every topic. I would like to say Thank you. You are a hard worker. I like the way you introduce the topic and how the flow is going with your videos. If you need a web developer send</p>
            <a href="" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase inline-block bg-gray-700 border-2 text-l">read more</a>
        </div>
    </div>
</div> 

<div class="container mx-auto text-center pt-6 pb-5">
 <h1 class="text-6xl font-bold">All Posts</h1>  
</div>
<div class="container sm:grid grid-cols-2 gap-14 mx-auto py-14 px-14 border-b border-gray-300">
    <div class="flex">
        <img src="https://picsum.photos/id/349/700/400" alt="" class="object-cover">
    </div>
    <div >
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">Best Nour in The World</h2>
        <div>
            By:<span class="text-gray-500 italic">test on 31-03-2023</span>
            <p class="text-l text-gray-700 py-8 leading-6">You are a good teacher that explains every detail in every topic. I would like to say Thank you. You are a hard worker. I like the way you introduce the topic and how the flow is going with your videos. If you need a web developer send</p>
            <a href="" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase inline-block bg-gray-700 border-2 text-l">read more</a>
        </div>
    </div>
</div> 
  
  
@endsection