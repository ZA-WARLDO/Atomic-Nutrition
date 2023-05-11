@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row ">
            <div class=" col">
                <span class="header pe-auto lh-1 text-uppercase">{{$user->fit_goal}} Program</span>
                
            </div>
            <div class="col-7 me-auto workout-progress  text-end">
                <span>4/10</span>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-2">
                <a class="text-decoration-none" href="#">
                    <span class="workout-button">week 1</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button">week 2</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button">week 3</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button">week 4</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 5</span>
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 6</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 7</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 8</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 9</span>
                </a>
            </div>
            <div class="col-2">
                <a class="text-decoration-none" ref="#">
                    <span class="workout-button-not-done">week 10</span>
                </a>
            </div>
        </div>
    </div>
    
    



@endsection