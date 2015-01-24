@extends('layouts.admin')

@section('content')
    <table id="example" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th></th>
            <th>Locality</th>
            <th>District</th>
            <th>Barangay</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th></th>
            <th>Locality</th>
            <th>District</th>
            <th>Barangay</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </tfoot>
            @foreach($barangays as $barangay)
                <tr>
                    <td></td>
                    <td>{{{ $barangay->locality }}}</td>
                    <td>{{{ $barangay->district }}}</td>
                    <td>{{{ $barangay->barangay }}}</td>
                    <td>{{{ $barangay->locality }}}</td>
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