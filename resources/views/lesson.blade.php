@extends('layouts.app')


@section('content')

<div class="container justify-content-center">
    <div class="row ">
        <div class="col-12 ms-auto text-center qoute">"Knowledge is Power"</div>
    </div>

    <div class="row mt-5">
        <div class="col-4 ms-auto ">
            <div>
                <a href="{{$lesson->link}}" class=> <span class="cookie-monster-color lesson-title text-uppercase">{{$lesson->title}}</span></a>
                <p>{{$lesson->short_description}}</p>
            </div>
            <div>
                <a href="{{$lesson2->link}}"> <span class="cookie-monster-color lesson-title text-uppercase">{{$lesson2->title}}</span> </a>
                <p>{{$lesson2->short_description}}</p>
            </div>

            <x-button-component name="Refresh" url="{{$num}}"/>
            

        </div>

        <div class="col-5 me-auto offset-1 ">

             <img src="{{asset('img/Protein.png')}}" height="400">

            

        </div>
    </div>


    
</div>



@endsection