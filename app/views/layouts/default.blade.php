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
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="#"><img src="/img/logo.jpg" alt="TPNP JobPortal"></a>
                </div><!--end of .navbar-header-->

                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav menu">
                        <li><a href="/">Home</a></li>
                        {{--<li><a href="/training/request">Register</a></li>--}}
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="search form-group">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div><!--end of .navbar-collapse-->
            </div><!--end of .row-->
        </div><!--end of .container-->
    </nav>
</header>

@yield('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" href="/packages/bootstrap/3/js/bootstrap.min.js"></script>
</body>
</html>