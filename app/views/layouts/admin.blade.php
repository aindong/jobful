<html>
<head>
    <title>Dashboard | TPNP Job Portal</title>
    <link rel="stylesheet" href="/packages/bootstrap/3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/packages/DataTables-1.10.4/extensions/Bootstrap/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/css/datepicker.css">
    <link rel="stylesheet" href="/packages/FullCalendar/fullcalendar.min.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    @yield('page-style')
    <style>
        aside {
            height: 100%;
        }
        
        aside ul {
            background-color: #1d3193;
            margin: 0px;
            padding: 0px;
        }

        aside ul li {
            list-style: none;
            margin: 0px;
            padding: 10px 0px;
            transition: 0.2s all;
        }

        aside ul li a {
            color: #fff;
            font-size: 17px;
            margin-left: 20px;

        }

        aside ul li:hover {
            border-left: 10px solid #0F0B48;
        }

        aside ul li a:hover {
            color: #fff;
        }

        table {
            font-size: 12px !important;
        }

        .content {
            margin-top: 20px;
            overflow-x: scroll;
            min-width: 400px;
        }
    </style>
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
                        <a class="navbar-brand logo" href="#"><img src="/img/logo.png" alt="TPNP JobPortal"></a>
                    </div><!--end of .navbar-header-->
                </div><!--end of .row-->
            </div><!--end of .container-->
        </nav>
    </header>

    <div class="row">
        <aside class="col-md-2">
            <ul>
                <li><a href="/admin/trainers">Trainers</a></li>
                <li><a href="/admin/trainees">Trainees</a></li>
                <li><a href="/admin/courses">Courses</a></li>
                <li><a href="/admin/requests">Training Requests</a></li>
                <li><a href="/admin/events">Events</a></li>
                <li><a href="/admin/barangays">Barangays</a></li>
                <li><a href="/admin/barangaychairmen">Barangay Chairman</a></li>
                <li><a href="/admin/organizations">Organizations</a></li>
                <li><a href="/admin/users">Users</a></li>
            </ul>
        </aside>

        <div class="col-md-10">
            @yield('content')
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <img src="/img/logo.png" alt="logo">
                </div>
                <div class="copyright col-xs-6">
                    <p><small>Copyright © 2015, Training and Placement NetworkProgram</small></p>
                    <ul class="social-nets">
                        <li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram "></i></a></li>
                    </ul>
                </div>
            </div><!--end of .row-->
        </div><!--end of .container-->
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