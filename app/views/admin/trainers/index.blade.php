@extends('layouts.admin')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/admin/trainers/create') }}}" class="pull-right btn btn-primary">New Trainer</a>
    <h1>Manage Trainers</h1>
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
                <th>Address</th>
                <th>Locality</th>
                <th>Administrative Level 1</th>
                <th>Administrative Level 2</th>
                <th>Country</th>
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
                <th>Email</th>
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
                    <td>{{{ $trainer->user->email }}}</td>
                    <td>{{{ $trainer->created_at }}}</td>
                    <td>{{{ $trainer->updated_at }}}</td>
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL::to('admin/trainers/' . $trainer->id) }}">show</a>
                        |
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/trainers/' . $trainer->id . '/edit') }}">edit</a>

                        {{ Form::open(array('url' => 'admin/trainers/' . $trainer->id, 'class' => 'pull-right')) }}
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