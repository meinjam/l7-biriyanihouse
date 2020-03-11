@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
    <h1>বিরিয়ানি অর্ডার করুন</h1>
    <form action="/storepizza" method="post">
        @csrf
        <label for="name">আপনার নাম:</label>
        <input type="text" name="name" id="name" required>

        <label for="type">কিসের বিরিয়ানি অর্ডার করতে চান?</label>
        <select name="type" id="type">
            <option value="চিকেন">চিকেন</option>
            <option value="টার্কি">টার্কি</option>
            <option value="বিফ">বিফ</option>
            <option value="মাটন">মাটন</option>
        </select>

        <label for="base">কি পরিমান অর্ডার করতে চান?</label>
        <select name="base" id="base">
            <option value="হাফ">হাফ</option>
            <option value="ফুল">ফুল</option>
        </select>

        <fieldset>
            <label>আনুষঙ্গিক জিনিস:</label>
            <input type="checkbox" name="toppings[]" value="ডিম">ডিম<br />
            <input type="checkbox" name="toppings[]" value="সালাদ">সালাদ<br />
            <input type="checkbox" name="toppings[]" value="বোরহানি">বোরহানি<br />
            <input type="checkbox" name="toppings[]" value="সফট ড্রিংস">সফট ড্রিংস<br />
        </fieldset>

        <input type="submit" value="অর্ডার করুন">

    </form>
</div>

@endsection