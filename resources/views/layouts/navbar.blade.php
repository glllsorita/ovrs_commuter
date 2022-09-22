<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- FanIcon Link -->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/fanicon.png') }}">

    <!--Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="http://fonts.cdnfonts.com/css/circular-std" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

	<!-- Script -->
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/main.js'])

</head>

<body onload="document.body.style.visibility=`visible`;">
    <script>document.body.style.visibility=`hidden`;</script>
    
    
<!--Scroll -->
<a href="#" class="scrolltop" id="scroll-top">
    <i class='bx bx-chevron-up scrolltop__icon'></i>
</a>

<!--Navigation -->

<header class="l-header" id="header">
 <nav class="nav bd-container">
     <a href="{{ route('home') }}" class="nav__logo">Van<mark style="background: none;color: "class="vango">Go</mark></a>
     <div class="nav__menu" id="nav-menu">
         <ul class="nav__list">

            @if(Route::is('terms', 'privacy'))

            <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                
            @else

                <li class="nav__item"><a href="{{ url('/') }}" class="nav__link {{ (request()->is('/*')) ? 'active-link' : '' }}">Home</a></li>

                <!-- Hide these links when the user isn't logged in -->
                @if (Auth::guest())

                <li class="nav__item"><a href="{{ url('/#about') }}" class="nav__link {{ (request()->is('')) ? 'active-link' : '' }}">About</a></li>
                <li class="nav__item"><a href="{{ url('/#services') }}" class="nav__link {{ (request()->is('')) ? 'active-link' : '' }}">Services</a></li>
                <li class="nav__item"><a href="{{ url('/#contact') }}" class="nav__link {{ (request()->is('')) ? 'active-link' : '' }}">Contact us</a></li>

                @endif

                <!-- Show these links when user is logged in -->
                @if (Route::has('login'))
                    @auth
                    <li class="nav__item"><a href="{{ route('bookings') }}" class="nav__link {{ (request()->is('bookings')) ? 'active-link' : '' }}">Bookings</a></li>
                    <li class="nav__item"><a href="{{ route('account') }}" class="nav__link {{ (request()->is('account/*')) ? 'active-link' : '' }}">Account</a></li>
                    <li class="nav__item"><a href="#modalWindowExit" class="nav__link"><span class="iconify" data-icon="entypo:log-out" data-width="13" data-height="13"></span></a></li>

                @else

                    @if (Route::has('register'))
                        <li class="nav__item"><a href="{{ route('register') }}" class="nav__link {{ (request()->is('register')) ? 'active-link' : '' }}">Register</a></li>
                    @endif
                    
                    <li class="nav__item"><a href="{{ route('login') }}" class="nav__link {{ (request()->is('login')) ? 'active-link' : '' }}">Log In</a></li>
                    @endauth
                    
                @endif

                <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
  
            @endif
            
            
         </ul>
     </div>
     <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
     </div>
 </nav>
</header>

         <!-- EXIT MODAL -->
    	<div id="modalWindowExit" class="">
        	<div>
            	<header>
                	<div class="close">
                    	<a href="#close" class="exit"><i class="uil uil-times"></i></a>
                	</div>
               	 	<br>
            		<center>
               	 		<img src="{{ asset('assets/offline.png') }}" class="modal-img-logout"> 
                	</center>
                    <br>
                	<center>
                     	<span class="dashboard-subtitle-modal">Are you sure you want to Log out?</span>
                	</center>
                	<br>
            	</header>
            	<div class="content">
                	<div class="field">
                    	<div class="modal-choice">
                        	<center>
                          		<button type="submit" class="choice-1 logoutyes" ><a href="{{ route('logout') }}" class="nav__link yesbtn">Yes</a></button>
                            	<button class="choice-2"><a href="#close" class="choices-2">No</a></button>
                        	</center>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>


        {{-- <script type="text/javascript">

            function openModal() {
                        $("#modalWindowExit").modal('show');
                    }

        </script> --}}

</body>