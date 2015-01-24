@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangaychairmen/create') }}}" class="pull-right btn btn-primary">New Chairman</a>
    <h1>Manage Chairmans</h1>
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
                <th>Name</th>
                <th>Email</th>
                <th>Barangay</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Barangay</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </tfoot>
            @foreach($barangaychairmen as $barangaychairman)
                <tr>
                    <td></td>
                    <td>{{{ $barangaychairman->lname .", ". $barangaychairman->fname ." ". $barangaychairman->mname }}}</td>
                    <td>{{{ $barangaychairman->user->email }}}</td>
                    <td>{{{ $barangaychairman->barangay->barangay }}}</td>
                    <td>{{{ $barangaychairman->created_at }}}</td>
                    <td>{{{ $barangaychairman->updated_at }}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/barangaychairmen/' . $barangaychairman->id) }}">show</a>
                        |
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/barangaychairmen/' . $barangaychairman->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/barangaychairmen/' . $barangaychairman->id, 'class' => 'pull-right')) }}
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