@extends('layouts.admin')

@section('content')
    <a href="/admin/employers/create" class="btn btn-primary">Create New Organization</a>
    <br/>
    <br/>
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
                    <td>Add | Delete</td>
                </tr>
            @endforeach
        <tbody>

        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop