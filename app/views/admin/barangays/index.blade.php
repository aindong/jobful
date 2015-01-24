@extends('layouts.admin')

@section('content')
<a href="/admin/barangays/create" class="btn btn-primary">Create New Barangay</a>
    <br/>
    <br/>
    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th></th>
            <th>Barangay</th>
            <th>Locality</th>
            <th>District</th>
            <th>Representative 1</th>
            <th>Representative 2</th>
            <th>Contact number 1</th>
            <th>Contact number 2</th>
            <th>Email 1</th>
            <th>Email 2</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th></th>
            <th>Barangay</th>
            <th>Locality</th>
            <th>District</th>
            <th>Representative 1</th>
            <th>Representative 2</th>
            <th>Contact number 1</th>
            <th>Contact number 2</th>
            <th>Email 1</th>
            <th>Email 2</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </tfoot>
            @foreach($barangays as $barangay)
                <tr>
                    <td></td>
                    <td>{{{ $barangay->barangay }}}</td>
                    <td>{{{ $barangay->locality }}}</td>
                    <td>{{{ $barangay->district }}}</td>
                    <td>{{{ $barangay->rep1 }}}</td>
                    <td>{{{ $barangay->rep2 }}}</td>
                    <td>{{{ $barangay->contact1 }}}</td>
                    <td>{{{ $barangay->contact2 }}}</td>
                    <td>{{{ $barangay->email1 }}}</td>
                    <td>{{{ $barangay->email2 }}}</td>
                    <td>{{{ $barangay->created_at }}}</td>
                    <td>{{{ $barangay->updated_at }}}</td>
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