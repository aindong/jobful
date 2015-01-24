@extends('layouts.admin')

@section('title')
    Manage Courses
@stop

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/admin/courses/create') }}}" class="pull-right btn btn-primary">New Course</a>
    <h1>Manage Courses</h1>
    <div class="clearfix"></div>
</div>  


    <div class="content">
        <table id="courses" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Code</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Code</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            @foreach($list as $key => $value)
                <tr>
                    <td></td>
                    <td>{{{ $value->id }}}</td>
                    <td>{{{ $value->code }}}</td>
                    <td>{{{ $value->title }}}</td>
                    <td>{{{ $value->duration . ' ' . $value->duration_metric }}}</td>
                    <td>{{{ $value->type }}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/courses/' . $value->id) }}">show</a>
                        |
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/courses/' . $value->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/courses/' . $value->id, 'class' => 'pull-right')) }}
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
            $('#courses').DataTable();
        });
    </script>
@stop
