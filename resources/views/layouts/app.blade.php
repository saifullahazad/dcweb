<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{!empty($title) ? $title : "LIFE"}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{url('/')}}/images/logo.png" type="image/png">

    <title>LIFE</title>

    <link href="{{url('/')}}/public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="{{url('/')}}/public/bootstrap/css/bootstrap.css" rel="stylesheet"/>

        <!-- global styles -->
        

        <!-- scripts -->
<!--         <script src="{{url('/')}}/themes/js/jquery-1.7.2.min.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>
         <script src="{{url('/')}}/themes/js/superfish.js"></script>
         <script src="{{url('/')}}/themes/js/jquery.scrolltotop.js"></script> -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <span class="text-uppercase text-success">
                    <img src="{{url('/')}}/images/logo.png" class="img-responsive" alt="Life">
                    </span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        
                        
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        
                    @else
                        <li class="dropdown">
                            {{--<li><a href="{{url('/')}}/admin-reg">Register</a></li>--}}
                             <li><a href="{{url('/')}}/doctor-list">Doctor List</a></li>
                             <li><a href="{{url('/')}}/patient-list">Patient List</a></li>
                             <li><a href="{{url('/')}}/treatment">Treatment</a></li>
                             <li><a href="{{url('/')}}/registration">Doctor Registration</a></li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    <li><a href="download/Life.apk" class="icon-download" title="Download App">Download App</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<script src="../../../public/bootstrap/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="../../../public/bootstrap/js/ajax_google_jquery.js" type="text/javascript"></script>
        <script src="../../../public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>

        <script src="js/jssor.js" type="text/javascript"></script>
        <script src="js/jssor.slider.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>
