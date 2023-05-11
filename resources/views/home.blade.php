@extends('layouts.app')

@section('content')
<!-- This is a modal -->
<div class="modal fade" id="foodDiary">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action=""></form>
                <div class="modal-header">
                                    
                    <h1 class="modal-title">Summary</h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body ">
                
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col"><h4>Breakfast</h4></div>
                                <div class="col">
                                    <?php 
                                        $totalCalories = $meals->where('meal_time', 'Breakfast')->sum('calories');
                                        echo $totalCalories
                                    ?>
                                </div>
                            </div>
                            
                            @foreach($meals->where('meal_time', 'Breakfast') as $meal)
                                <div class="row">
                                    <div class="col">
                                        {{$meal['meal_name']}}
                                    </div>
                                    <div class="col">
                                        {{$meal['calories']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col">
                            <h3>Lunch</h3>
                            @foreach($meals->where('meal_time', 'Lunch') as $meal)
                                <div class="row">
                                    <div class="col">
                                        {{$meal['meal_name']}}
                                    </div>
                                    <div class="col">
                                        {{$meal['calories']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <h3>Dinner</h3>
                            @foreach($meals->where('meal_time', 'Dinner') as $meal)
                                <div class="row">
                                    <div class="col">
                                        {{$meal['meal_name']}}
                                    </div>
                                    <div class="col">
                                        {{$meal['calories']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                    

                </div>

                <div class="modal-footer">
                    <button class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- This is a modal -->


<div class="container bg-white">
    <div class="row justify-content-center border-success bg-white">
        <div class="col-6 border">
            <div>
                <h1>1680</h1>
                <h1>------</h1>
                <h1>2240</h1>
            </div>
            <h1>Calories Left: 1135</h1>
        </div>
        <div class="col-6 ">
            <span class="header" style="color: black">Meal Diary</span>
            <div class="row">
                <div class="col">Breakfast</div>
                <div class="col">
                <?php 
                    $totalCalories = $meals->where('meal_time', 'Breakfast')->sum('calories');
                    echo $totalCalories;
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col">Lunch</div>
                <div class="col">
                <?php 
                    $totalCalories = $meals->where('meal_time', 'Lunch')->sum('calories');
                    echo $totalCalories;
                ?>
                </div>
            </div>
            <div class="row ">
                <div class="col">Dinner</div>
                <div class="col">
                <?php 
                    $totalCalories = $meals->where('meal_time', 'Dinner')->sum('calories');
                    echo $totalCalories;
                ?>
                </div>
            </div>
            <div class="row">
                <div class="col">Calories Cosumed:</div>
                <div class="col">
                <?php 
                    $totalCalories = $meals->sum('calories');
                    echo $totalCalories
                ?>
                </div>
            </div>

        </div>
    </div>
    <div class="row  border border-solid-bottom">
        <div class="col">
        <button class="btn btn-primary">
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#foodDiary">SUMMARY</a> 
        </button>
        </div>
        <div class="col">
            <button class="btn btn-primary">
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#addFood">ADD FOOD</a> 
        </button>
            
        </div>
    </div>
</div>

<!-- This is a modal -->

<div class="modal fade" id="addFood">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- Header content -->
                                    <h1 class="modal-title">Log Food Here</h1>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body ">
                                <!-- This is the body goes here -->    
                                    <form method="POST" action="{{ route('store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md">
                                                <input id="food" type="text" class="form-control"  name="name" autofocus placeholder="Enter food here">
                                            </div>
                                            <div class="col-md">
                                                <input id="food" type="number" class="form-control"  name="calories" autofocus placeholder="Calories">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-12 mt-3">
                                                <select class="form-select" aria-label="Default select example" name="time" id="time">
                                                    <option @if(is_null($user->fit_goal)) selected @endif>Choose time of day</option>
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch" >Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn  btn-block form-button-cookie"  type="submit">ADD FOOD</button>
                                        </div>
                                    </form>

                                    
                                </div>
                                    <div class="modal-footer">
                                    <!--This is the footer button goes here-->
                                    </div>
                            </div>
                        </div>
</div>



<!-- This is a modal -->






@endsection
