@extends('layouts.admin')

@section('content')
    <div class="content">
        @if(Session::has('success'))
            <div class="alert alert-success">
                <span>{{ Session::get('success') }}</span>
            </div>
        @endif

        <a href="/admin/organizations/create" class="btn btn-primary">Create New Organization</a>
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
                    <td>
                        <a href="/admin/organizations/{{{ $employer->id }}}/edit">Edit</a>
                        |
                        <a href="#" data-id="{{ $employer->id }}">Delete</a>
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