@extends('layouts.admin')

@section('title')
    Events
@stop

@section('content')
    <div class="content">
        <table id="events" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Course</th>
                <th>Trainer</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Participants</th>
                <th>Participated</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Course</th>
                <th>Trainer</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Participants</th>
                <th>Participated</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            @foreach($list as $key => $value)
                <tr>
                    <td></td>
                    <td>{{{ $value->id }}}</td>
                    <td>{{{ $value->course_id }}}</td>
                    <td>{{{ $value->trainer_id }}}</td>
                    <td>{{{ date('M d, Y', strtotime($value->start_date)) }}}</td>
                    <td>{{{ date('M d, Y', strtotime($value->end_date)) }}}</td>
                    <td>{{{ $value->participants }}}</td>
                    <td>{{{ $value->present_attendees }}}</td>
                    <td>{{{ $value->status ? 'Published' : 'Draft' }}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/events/' . $value->id) }}">show</a>
                        |
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/events/' . $value->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/events/' . $value->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>
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
            $('#events').DataTable();
        });
    </script>
@stop
