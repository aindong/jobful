@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/organizations/create') }}}" class="pull-right btn btn-primary">New Organization</a>
    <h1>Manage Organizations</h1>
    <div class="clearfix"></div>
</div>  

    <div class="content">
        @if(Session::has('success'))
            <div class="alert alert-success">
                <span>{{ Session::get('success') }}</span>
            </div>
        @endif

        <table id="example" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            @foreach($employers as $employer)
                <tr>
                    <td></td>
                    <td>{{{ $employer->title }}}</td>
                    <td>{{{ $employer->description }}}</td>
                    <td>{{{ $employer->status }}}</td>
                    <td>{{{ $employer->created_at }}}</td>
                    <td>{{{ $employer->updated_at }}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/organizations/' . $employer->id) }}">show</a>
                        |
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/organizations/' . $employer->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/organizations/' . $employer->id, 'class' => 'pull-right')) }}
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
            $('#example').DataTable();
        });
    </script>
@stop