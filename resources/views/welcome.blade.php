@extends('layouts.layout')
@section('content')
    
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="{{asset('/img/biriyani.jpg')}}" alt="pizza house logo" height="400px">
        <div class="title m-b-md">
            বিরিয়ানি হাউজ <br>
            <small style="font-size: .6em;">খুলনার সবচেয়ে জনপ্রিয় বিরিয়ানি</small> 
        </div>
        <p class="msgg">{{ session('msgg') }}</p>
        <a href="{{route('createpizza')}}">অর্ডার করুন</a>
    </div>
</div>

@endsection

