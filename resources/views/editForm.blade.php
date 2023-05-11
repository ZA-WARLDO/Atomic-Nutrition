<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Atomic Nutrition</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{url('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- Your main.js file -->
<script src="{{url('js/main.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="cookie-monster-bg">
    <!-- <div class="modal fade" id="editForm">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                   <h4 class="modal-title">Edit Info</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <!-- </div> -->
            
                                    
                                    
        <!-- </div>
    </div> -->


<div class="container my-5 py-5s">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info</div> 

                <div class="card-body">
                    <form method="POST" action="/info/update/{{$user->id}}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fit_goal" class="col-md-4 col-form-label text-md-end">Fitness Program</label>

                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="fit_goal" id="fit_goal">
                                    <option @if(is_null($user->fit_goal)) selected @endif>Choose Program</option>
                                    <option value="Build Muscle" @if($user->fit_goal == "Build Muscle") selected @endif >Build Muscle</option>
                                    <option value="Lose Weight" @if($user->fit_goal == "Lose Weight") selected @endif>Lose Weight</option>
                                    <option value="Maintain Weight" @if($user->fit_goal == "Maintain Weight") selected @endif>Maintain Weight</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="height" class="col-md-4 col-form-label text-md-end" >Height cm</label>

                            <div class="col-md-6">
                                <input id="height" type="number" class="form-control" name="height" value="{{$user->height_cm}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="weight" class="col-md-4 col-form-label text-md-end">Weight kg</label>

                            <div class="col-md-6">
                                <input id="weight" type="number" class="form-control" name="weight" value="{{$user->weight_kg}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end" >Age</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{$user->age}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sex" class="col-md-4 col-form-label text-md-end">Gender</label>
                            <div class="col-md-6">
                                <select class="form-select" aria-label="Default select example" name="sex" id="sex">
                                    <option @if(is_null($user->fit_goal)) selected @endif>Choose Gender</option>
                                    <option value="M" @if($user->sex == 'M') selected @endif >Male</option>
                                    <option value="F" @if($user->sex == 'F') selected @endif>Female</option>
                                    <option value="O" @if($user->sex == 'O') selected @endif>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fit_level"  id="fit_level" class="col-md-4 col-form-label text-md-end">Fitness Level</label>
                            <div class="col-md-6">
                            <div class="form-check">
    <input class="form-check-input" type="radio" value="0" name="level" id="flexRadioDefault1" @if($user->level == 0) checked @endif>
    <label class="form-check-label" for="flexRadioDefault1">
        Beginner
    </label>
</div>

<div class="form-check">
    <input class="form-check-input" type="radio" value="1" name="level" id="flexRadioDefault2" @if($user->level == 1) checked @endif>
    <label class="form-check-label" for="flexRadioDefault2">
        Intermediate
    </label>
</div>
                            </div>
                        </div>
                        

                        <div class="row mb-5">
                            <div class="col-md-6 offset-md-9">
                                <button type="submit" class="btn btn-primary">
                                 Save Changes
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



   
</body>
</html>
