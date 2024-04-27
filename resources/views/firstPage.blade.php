@extends('layouts.index')
@section('content')
    <div class="bg-gradient-to-br from-blue-500 to-blue-300  first-page h-screen flex   align-items-center justify-content-center  ">

        {{-- <div> <img src="{{ asset('img/img-removebg-preview (1).png') }}" width="550vw" alt="description of myimage">
        </div>
        <div class="bg-white first-page-section h-fit py-11 px-20 rounded-3xl ">
            <h1 class="font-extrabold fw-bolder first-page-section-h1   text-center w-[20vw]">Easiest Way to Manage Your Task</h1>
            <p class="text-gray-400 w-[20vw] text-center">  elit. Quasi esse perspiciatis culpa quae alias
                explicabo similique velit placeat.</p>
            <a href="{{ route('register') }}" class="bg-[#5dccef] ml-28 rounded-full py-3 px-3 text-white text-decoration-none "> next</a>
        </div> --}}
        <div class="container">
            <p>Welcome Viewrs!</p>
    
        </div>
    
        <div class="loading-page">
            <svg id="svg"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    
                <path d="M20.8 34c16.5-6.2 35 2.2 41.2 18.7l110.2 294L257.3 55c4-13.7 16.5-23 30.7-23s26.7 9.4 30.7 23l85.1 291.7L514 52.8c6.2-16.5 24.6-24.9 41.2-18.7s24.9 24.7 18.7 41.2l-144 384c-4.8 12.9-17.4 21.3-31.2 20.7s-25.7-9.8-29.5-23L288 178.3 206.7 457c-3.9 13.2-15.8 22.5-29.5 23s-26.3-7.8-31.2-20.7L2 75.2C-4.2 58.7 4.2 40.2 20.8 34z"/></svg>
            <div class="name-container">
                <div class="logo-name">T A S K</div>
            </div>
            <a href="{{ route('register') }}" class=" text-white  shadow-2xl text-decoration-none font-bold "> ...next</a>

        </div>

    </div>
@endsection
