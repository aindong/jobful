@extends('layouts.admin')

@section('content')
<a href="/admin/trainees/create" class="btn btn-primary">Create New Trainee</a>
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
            <th>Civil Status</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Birth Date</th>
            <th>Educational Attainment</th>
            <th>Occupation</th>
            <th>Email</th>
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
            <th>Civil Status</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Birth Date</th>
            <th>Educational Attainment</th>
            <th>Occupation</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </tfoot>
            @foreach($trainees as $trainee)
                <tr>
                    <td></td>
                    <td>{{{ $trainee->lname .", ". $trainee->fname ." ". $trainee->mname }}}</td>
                    <td>{{{ $trainee->address1 .", ". $trainee->address2 }}}</td>
                    <td>{{{ $trainee->locality }}}</td>
                    <td>{{{ $trainee->administrative_level1 }}}</td>
                    <td>{{{ $trainee->administrative_level2 }}}</td>
                    <td>{{{ $trainee->country }}}</td>
                    <td>{{{ $trainee->civil_status }}}</td>
                    <td>{{{ $trainee->gender }}}</td>
                    <td>{{{ $trainee->age }}}</td>
                    <td>{{{ $trainee->bday }}}</td>
                    <td>{{{ $trainee->attainment }}}</td>
                    <td>{{{ $trainee->occupation }}}</td>
                    <td>{{{ $trainee->email }}}</td>
                    <td>{{{ $trainee->created_at }}}</td>
                    <td>{{{ $trainee->updated_at }}}</td>
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