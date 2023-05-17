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
<body class="{{ request()->is('home')? 'cookie-monster-bg' : ''}}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light {{request()->is('/') ? 'cookie-monster-bg' : 'online-bg' }} shadow">
            <div class="container">
                @if (request()->is('/') || request()->is('login') || request()->is('register'))
                    <a href="/" class="navbar-brand active fw-bold">Atomic Nutrition </a>
                @endif
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth
                    <ul class="navbar-nav fw-bold text-upper text-center">
                        <li class="nav-item  "><a href="/home" class="nav-link "><span class="{{request()->is('home')? 'active' : ''}} ">Home</span></a></li>
                        <li class="nav-item "><a href="/workouts" class="nav-link "><span class="{{request()->is('workouts')? 'active' : ''}} ">Workouts</span></a></li>
                        <li class="nav-item"><a href="/lessons/0" class="nav-link"><span class="{{request()->is('lessons/*' )? 'active' : ''}}">Lessons</span></a></li>
                        <div class="modal fade" id="summary">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Profile</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body ">
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Name:</h5>
                                            
                                        </div>
                                        <div class="col text-start">
                                            <h5>{{$user->name}}</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Fitness Goal:</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>{{$user->fit_goal}}</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Fitness Level</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>
                                                <?php 
                                                if($user->level == 0)
                                                {
                                                    echo "Beginner";
                                                }
                                                else
                                                {
                                                    echo "Intermediate";
                                                }
                                                ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Height:</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>{{$user->height_cm}}cm</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Weighth:</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>{{$user->weight_kg}}kg</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Age:</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>{{$user->age}}</h5>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col info_header">
                                            <h5>Gender:</h5>
                                        </div>
                                        <div class="col text-start">
                                            <h5>
                                                <?php 
                                                if($user->sex == 'F')
                                                {
                                                    echo "Female";
                                                }
                                                if ($user->sex == 'M') {
                                                    echo "Male";
                                                } else {
                                                    echo "Others";
                                                }
        
                                                   
                                                
                                                ?>

                                            </h5>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href="/editInfo">
                                    <button type="button" class="btn btn-primary">Edit</button>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>

        </div>

                    </ul>
                    @endauth
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login') || request()->is('register'))
                                <li class="nav-item ">
                                    <a class="nav-link fw-bold {{request()->is('register')? 'text-dark' : 'text-white' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register') && (request()->is('login')))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                   
                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#summary">INFO</a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>





        <main class="py-4">
       
            
            @yield('content')
        </main>
    </div>

</body>
</html>
