@extends('layouts.admin')

@section('content')
    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th></th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Address 1</th>
            <th>Address 2</th>
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
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Address 1</th>
            <th>Address 2</th>
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
                    <td>{{{ $trainer->lname }}}</td>
                    <td>{{{ $trainer->fname }}}</td>
                    <td>{{{ $trainer->mname }}}</td>
                    <td>{{{ $trainer->address1 }}}</td>
                    <td>{{{ $trainer->address2 }}}</td>
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