@extends('layouts.app')
@section('content')

<div class="wrapper pizza-index">
    <h1> অর্ডারকৃত সব বিরিয়ানি</h1>
    @foreach ($pizzas as $pizza)
        <div class="pizza-item">
            <img src="/img/biriyani-order.png" alt="pizza icon">
        <h4><a href="/pizzas/{{$pizza->id}}">অর্ডার করেছেন, {{$pizza->name}}</a></h4>
        </div>
    @endforeach
</div>

@endsection