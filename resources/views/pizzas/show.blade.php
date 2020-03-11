@extends('layouts.app')
@section('content')

<div class="wrapper pizza-details">
    <h1>অর্ডার করেছেন, {{ $pizza->name }}</h1>
    <p class="type">বিরিয়ানির প্রকার - {{ $pizza->type }} বিরিয়ানি</p>
    <p class="base">বিরিয়ানির পরিমান - {{ $pizza->base }}</p>
    <p class="toppings">আনুষঙ্গিক জিনিস:</p>
    <ul>
        @foreach ($pizza->toppings as $toppings)
        <li>{{ $toppings }}</li>
        @endforeach
    </ul>
    <a href="{{url('pizzas/' . $pizza->id . '/complete')}}" id="corder">অর্ডার পূরন করুন</a>
</div>
<a href="{{ route('allpizzas') }}" class="back"><- সব অর্ডারে ফেরত যান</a>
@endsection