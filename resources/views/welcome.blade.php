@extends('layouts.app')

@section('content')
<div class="container test">
    <div class="row justify-content-center ">
        <div class="row justify-content-center ">
        <div class="col-5 fw-bold cookie-monster-color center-home offset-1">
            <h1 style="font-family: Open Sans;  font-size: 70px">Good health Starts with what you eat</h1>
            <p class="fs-5 text-secondary">Want to eat more mindfully? Track meals,
            Learn about your habits, and reach your goals with Atomic Nutrition
            </p>
            <x-button-component name="Sign-Up" url="{{route('register')}}"> </x-button-component>
            <!-- {{route('register')}} -->
        </div>
        <div class="col">
            <img src="{{asset('img/fruit.png')}}"  alt="...">

        </div>
    </div>
</div>
@endsection
