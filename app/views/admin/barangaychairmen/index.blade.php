@extends('layouts.admin')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif
    
    <a href="/admin/barangaychairmen/create" class="btn btn-primary">Create New Barangay Chairman</a>
    <br/>
    <br/>

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