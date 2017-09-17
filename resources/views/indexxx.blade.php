<!DOCTYPE html>
<html>
    <head>
        <title>Doctor</title>
        <meta charset="utf-8">
        <title>{{!empty($title) ? $title : "Doctor_services"}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="{{url('/')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{url('/')}}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="{{url('/')}}/themes/css/bootstrappage.css" rel="stylesheet"/>

        <!-- global styles -->
        <link href="{{url('/')}}/themes/css/flexslider.css" rel="stylesheet"/>
        <link href="{{url('/')}}/themes/css/main.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="{{url('/')}}/themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/themes/js/superfish.js"></script>
        <script src="{{url('/')}}/themes/js/jquery.scrolltotop.js"></script>
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">
                    <a href="{{url('/')}}" class="logo pull-left"><img src="{{url('/')}}/public/themes/images/logo.png" class="site_logo" alt=""></a>
                    <nav id="menu" class="pull-right">
                        <ul>
                             <li><a href="{{url('/')}}">Home</a></li>
                             <li><a href="{{url('/')}}/doctor-list">Doctor List</a></li>
                             <li><a href="{{url('/')}}/patient-list">Patient List</a></li>
                             <li><a href="{{url('/')}}/treatment">Treatment</a></li>
                             <li><a href="{{url('/')}}/registration">Registration</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            @yield("content")


        </div>
        <script src="{{url('/')}}/themes/js/common.js"></script>
        <script src="{{url('/')}}/themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
$(function () {
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 4000,
            animationSpeed: 600,
            controlNav: false,
            directionNav: true,
            controlsContainer: ".flex-container" // the container that holds the flexslider
        });
    });
});
        </script>
    </body>
</html>
