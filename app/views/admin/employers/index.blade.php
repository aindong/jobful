@extends('layouts.admin')

@section('content')
    <table id="example" class="display" cellspacing="0" width="100%">
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
            @foreach($employers as $employer)
                <tr>
                    <td></td>
                    <td>{{{ $employer->lname }}}</td>
                    <td>{{{ $employer->fname }}}</td>
                    <td>{{{ $employer->mname }}}</td>
                    <td>{{{ $employer->address1 }}}</td>
                    <td>{{{ $employer->address2 }}}</td>
                    <td>{{{ $employer->locality }}}</td>
                    <td>{{{ $employer->administrative_level1 }}}</td>
                    <td>{{{ $employer->administrative_level2 }}}</td>
                    <td>{{{ $employer->country }}}</td>
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