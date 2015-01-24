@extends('layouts.admin')

@section('content')
    <div id='calendar'></div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {

            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
            })

        });
    </script>
@stop