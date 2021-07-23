<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ ('css/home.css') }}" rel="stylesheet">
    <style>
    body{
        overflow-y:hidden;
    }
    </style>

    
    
</head>
<body >

<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif
</div>
<nav class="navbar navbar-toggleable-md fixed-top navbar-transparent" color-on-scroll="500">
        
            
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    
                    
                </button>
            
            
        
    </nav>  

    <div class="wrapper">
        <div class="page-header section-dark" style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/antoine-barres.jpg')">
            <div class="filter"></div>
    		    <div class="content-center">
    			    <div class="container">
    				    <div class="title-brand">
    					    <h1 class="presentation-title">Welcome</h1>
    					    <div class="fog-low">
    						<img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
    					    </div>
    					    <div class="fog-low right">
    						<img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
    					    </div>
    				    </div>
                        
    			    </div>
    		    </div>
                <div class="moving-clouds" style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/clouds.png'); ">

                </div>
    	    </div>
        </div>
    </div>
  
    
</body>
</div>
</body>
</html>
