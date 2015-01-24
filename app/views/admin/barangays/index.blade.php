@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangays/create') }}}" class="pull-right btn btn-primary">New Baranggay</a>
    <h1>Manage Baranggays</h1>
    <div class="clearfix"></div>
</div>  


    <div class="content">
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
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/barangays/' . $barangay->id) }}">show</a>
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/barangays/' . $barangay->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/barangays/' . $barangay->id, 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>
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