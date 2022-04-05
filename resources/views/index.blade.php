@extends('layouts.app')
@section('content')
    <div class="background-picture grid grid-cols-1 m-auto ">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    WELCOME TO BLOG WEB
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">Read
                    More</a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://images.unsplash.com/photo-1546074177-ffdda98d214f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" alt="" width="700" style="box-shadow: 10px">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Create Your First Blog
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Share your thought and let other learn from your Experience.
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Welcome to the blogWeb. A platform to share thoughts, emotions, knowledge and do something great for other for good.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl">Visit Blog</a>
        </div>
    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
           BlogWeb
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Technical Blog
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Social Blog
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Sports Blog
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Cinemas Blog
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-sm text-gray-400">Blog</span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Enjoy the blogs and learn what you feel and experience what you think.
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    Laravel
                </span>
                <h3 class="text-xl font-bold py-10">
                   Laravel framework is one of the good framework which enable developer to create beautiful website with more complex functionality
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-50 text-gray-100 text-xs font-extrabold py-3
                px-5 rounded-3xl">Find out more</a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2018/03/10/18/03/laptop-3214756_960_720.png" alt="" width="700">
        </div>
    </div>
@endsection
