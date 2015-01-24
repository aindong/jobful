<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TPNP Job Portal</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/packages/bootstrap/3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default navs">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="#"><img src="/img/logo.png" alt="TPNP JobPortal"></a>
                    </div><!--end of .navbar-header-->
                </div>

                <div class="col-md-6">
                    <div class="navbar-collapse collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav menu pull-right">
                            <li><a href="{{{ URL::to('/') }}}">About</a></li>
                            <li><a href="{{{ URL::to('/') }}}">Contact</a></li>
                            <li><a href="{{{ URL::to('/login') }}}">Login</a></li>
                        </ul>
                    </div><!--end of .navbar-collapse-->
                </div>

            </div><!--end of .row-->
        </div><!--end of .container-->
    </nav>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="copyright col-xs-6">
                <p><small>Copyright © 2015, Training and Placement NetworkProgram</small></p>
            </div>
            <div class="social col-xs-6">
                
                <ul class="social-nets">
                    <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram "></i></a></li>
                </ul>
            </div>
        </div><!--end of .row-->
    </div><!--end of .container-->
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" href="/packages/bootstrap/3/js/bootstrap.min.js"></script>
</body>
</html>