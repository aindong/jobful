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
    <header>

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
            <div class="top-menu pull-right">
                <a href="#"><i class="glyphicon glyphicon-user"></i>My Account</a>
                <a href="#"><i class="glyphicon glyphicon-lock"></i>Logout</a>
            </div>
            @yield('content')
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