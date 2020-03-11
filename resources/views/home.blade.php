@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">বিরিয়ানি হাউজ এডমিন প্যানেল</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>স্বাগতম, {{ Auth::user()->name }}</h3>
                    <h5>
                        <a href="{{ route('allpizzas') }}">সব অর্ডার দেখুন</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
