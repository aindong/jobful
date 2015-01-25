<html>
<head>
    <title>Dashboard | TPNP Job Portal</title>
    <link rel="stylesheet" href="/packages/bootstrap/3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/packages/DataTables-1.10.4/extensions/Bootstrap/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/css/datepicker.css">
    <link rel="stylesheet" href="/packages/FullCalendar/fullcalendar.min.css"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    @yield('page-style')
    <link rel="stylesheet" href="/css/back.css">
</head>
<body>
<aside class="col-md-2">
    <ul>
        <div style="margin: 20px 0px">
            <a href="{{{ URL::to('/trainee') }}}"><img src="/img/logo.png" alt="" width="150"/></a>
        </div>

        <li><a href="/trainee/requests">My Trainings</a></li>
        <li><a href="/trainee/my-profile">My Profile</a></li>
    </ul>
</aside>

<nav class="navs col-md-10">
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav menu pull-right">
            <li><a href="{{{ URL::to('/') }}}"><i class="glyphicon glyphicon-info"></i>Back to Home</a></li>
            <li><a href="{{{ URL::to('/admin') }}}">My Account</a></li>
            <li><a href="{{{ URL::to('/logout') }}}">Logout</a></li>
        </ul>
    </div><!--end of .navbar-collapse-->
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>


<footer>

</footer>

<script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
<script type="text/javascript" href="/packages/bootstrap/3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/packages/DataTables-1.10.4/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/packages/DataTables-1.10.4/extensions/Bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/js/moment.js"></script>
<script type="text/javascript" src="/packages/FullCalendar/fullcalendar.min.js"></script>
@yield('page-script')
</body>
</html>