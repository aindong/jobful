@extends('layouts.trainer')

@section('content')

    <div class="content">
        <table id="training" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>Trainer</th>
                <th>Course</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Participants</th>
                <th>Present Attendees</th>
                <th>Created Date</th>
                <th>Updated Date</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>Trainer</th>
                <th>Course</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Participants</th>
                <th>Present Attendees</th>
                <th>Created Date</th>
                <th>Updated Date</th>
            </tr>
            </tfoot>
            @foreach($event as $evt)
                <tr>
                    <td></td>
                    <td>{{{ $evt->trainer->lname . ', ' . $evt->trainer->fname . ' ' . $evt->trainer->mname }}}</td>
                    <td>{{{ $evt->course->title }}}</td>
                    <td>{{{ $evt->start_date }}}</td>
                    <td>{{{ $evt->end_date }}}</td>
                    <td>{{{ $evt->participants }}}</td>
                    <td>{{{ $evt->present_attendees }}}</td>
                    <td>{{{ $evt->created_at }}}</td>
                    <td>{{{ $evt->updated_at }}}</td>
                </tr>
            @endforeach
            <tbody>

            </tbody>
        </table>
    </div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#training').DataTable();
        });
    </script>
@stop
