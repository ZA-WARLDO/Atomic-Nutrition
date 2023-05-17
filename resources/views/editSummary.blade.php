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


<div class="container m-5 p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Meal</div> 

                <div class="card-body p-5">
                    <form method="POST" action="#">
                        @csrf

                            <div class="row g-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Chicken Joy" aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Calories " aria-label="Last name">
                                </div>
                            </div>
                            <div class="row mt-3 g-3 mb-4">
                                <select name="" id="" class="form-select" aria-label="Default select example">
                                    <option value="">Choose time of day</option>
                                    <option value="">Breakfast</option>
                                    <option value="">Lunch</option>
                                    <option value="">Dinner</option>
                                </select>
                            </div>
                            <div> <button class="btn  btn-block form-button-cookie"  type="submit">CONFIRM CHANGES</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



   
</body>
</html>
