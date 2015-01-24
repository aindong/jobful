<html>
<header>

    <link rel="stylesheet" href="/packages/bootstrap/3/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/packages/DataTables-1.10.4/extensions/Bootstrap/dataTables.bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/css/datepicker.css">
    <link rel="stylesheet" href="/packages/FullCalendar/fullcalendar.min.css"/>
    @yield('page-style')
</header>
<body>
    @yield('content')

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