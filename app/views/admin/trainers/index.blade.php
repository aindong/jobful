@extends('layouts.admin')

@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{ Session::get('success') }}</span>
        </div>
    @endif

    <a href="/admin/employers/create" class="btn btn-primary">Create New Trainer</a>
    <br/>
    <br/>

    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Address</th>
            <th>Locality</th>
            <th>Administrative Level 1</th>
            <th>Administrative Level 2</th>
            <th>Country</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Address</th>
            <th>Locality</th>
            <th>Administrative Level 1</th>
            <th>Administrative Level 2</th>
            <th>Country</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </tfoot>
            @foreach($trainers as $trainer)
                <tr>
                    <td></td>
                    <td>{{{ $trainer->lname .", ". $trainer->fname ." ". $trainer->mname }}}</td>
                    <td>{{{ $trainer->address1 .", ". $trainer->address2 }}}</td>
                    <td>{{{ $trainer->locality }}}</td>
                    <td>{{{ $trainer->administrative_level1 }}}</td>
                    <td>{{{ $trainer->administrative_level2 }}}</td>
                    <td>{{{ $trainer->country }}}</td>
                    <td>{{{ $trainer->created_at }}}</td>
                    <td>{{{ $trainer->updated_at }}}</td>
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