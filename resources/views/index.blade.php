@extends('welcome')
@section('content')
<!-- hero-->
    <div class="hero-bg-image flex flex-col justify-center items-center space-y-7">
        <h1 class="font-bold text-gray-100 text-5xl">WELCOME TO MY BLOG</h1>
        <a href="/"  class="rounded-lg px-6 py-3 bg-gray-100 text-gray-700 font-bold uppercase">start reading</a>
    </div>

<!-- layout-->
<div class="container flex flex-col md:flex-row space-x-5">
    <div class="w-1/2 mx-32 my-6 ">
        <img src="https://picsum.photos/id/239/700/400" alt="" class="rounded-lg" >
    </div>
    <div class="flex flex-col items-left space-y-2 px-8 md:mx-0 justify-center md:w-1/2 ">
        <h2 class="font-bold text-2xl md:text-3xl text-gray-700">HOW TO BE AN EXPERT IN 2023</h2>
        <h4 class="font-bold  md:text-lx text-gray-600">You can find a list of all programming languages here.</h4>
        <p class="text-gray-500 text-sm ">Get the same random image every time based on a seed, by adding to the start of the url. You may combine any of the options above.
         For example, to get a specific image that is grayscale and blurred.</p>
        <a href="" class="rounded-lg px-6 py-3 mt-4 text-gray-100 bg-gray-700 font-bold uppercase self-start">read more</a>
    </div>
</div>
<!--categories-->

<div class="bg-gray-700 text-center p-10 mt-4">
    <h1 class="text-3xl font-bold text-gray-100  underline">Blog Categories</h1>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
        <div class="font-bold py-2 text-2xl text-gray-100">UX Design</div>
        <div class="font-bold py-2 text-2xl text-gray-100">Programming</div>
        <div class="font-bold py-2 text-2xl text-gray-100">Graphic</div>
        <div class="font-bold py-2 text-2xl text-gray-100">Front-End</div>  
    </div>
 
 
 
</div>
<!--Recent Posts-->
<div class="conatiner p-10 mx-auto text-center">
    <h2 class="font-bold text-gray-900 text-5xl py-5">Recent Posts</h2>
    <p class="text-gray-400 mt-6 leading-6 px-5">PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group. PHP is a server scripting language, and a powerful tool for making dynamic and interactive
         Web pages. PHP is a widely-used, free, and efficient alternative to</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto p-10">
    <div class="flex bg-yellow-800 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">
            <ul class="md:flex text-xs gap-2">
               <li class="bg-yellow-100 hover:bg-yellow-600 hover:text-yellow-100 text-yellow-800 transition duration-300 px-6 py-2 rounded-lg font-bold inline-block my-1 md:my-0"><a href="">PHP</a></li>
               <li class="bg-yellow-100 text-yellow-800 px-6 py-2 rounded-lg font-bold transition duration-300 hover:bg-yellow-600 hover:text-yellow-100  inline-block my-1 md:my-0"><a href="">Programming</a></li>
               <li class="bg-yellow-100 text-yellow-800 px-6 py-2 rounded-lg font-bold transition duration-300 hover:bg-yellow-600 hover:text-yellow-100  inline-block my-1 md:my-0"><a href="">Backend</a></li>
               <li class="bg-yellow-100 text-yellow-800 px-6 py-2 rounded-lg font-bold transition duration-300 hover:bg-yellow-600 hover:text-yellow-100 inline-block my-1 md:my-0"><a href="">Frontend</a></li> 
            </ul>
            <h3 class="text-l py-10 leading-6">
                PHP is a general-purpose scripting language geared toward web development. 
                It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.
                 The PHP reference implementation is now produced by The PHP Group. PHP is a server scripting language, 
                 and a powerful tool for making dynamic and interactive Web pages. 
                PHP is a widely-used, free, and efficient alternative to
            </h3>
            <a href="" class="rounded-lg px-5 py-3 mb-8 text-gray-100 font-bold uppercase inline-block bg-transparent border-2 text-l">read more</a>
        </div>
    </div>
   <div class="flex">
    <img src="https://picsum.photos/id/242/700/400" alt="" class="object-cover" >

   </div>
</div>

@endsection