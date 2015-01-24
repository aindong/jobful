@extends('layouts.admin')

@section('title')
    Requqests
@stop

@section('content')
<div class="page-header">
    <h1>Manage Requests</h1>
    <div class="clearfix"></div>
</div>  

    <table id="requests" class="display table table-striped" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Baranggay</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Baranggay</th>
            <th>Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </tfoot>
            @foreach($list as $key => $value)
                <tr>
                    <td></td>
                    <td>{{{ $value->id }}}</td>
                    <td>{{{ $value->lname . ', ' . $value->fname }}}</td>
                    <td>{{{ $value->baranggay }}}</td>
                    <td>{{{ date('M d, Y', strtotime($value->created_at)) }}}</td>
                    <td><?php
                     switch ($value->status) {
                         case '0':
                             echo 'New';
                             break;
                        case '1':
                            echo 'Approved';
                            break;
                        case '2':
                            echo 'Schedduled';
                            break;
                        case '100':
                            echo 'Denied';
                            break;
                    }
                    ?>
                    </td>
                    <td>
                        <!-- <a class="btn btn-small btn-success" href="{{ URL::to('admin/requests/' . $value->id) }}">show</a>
                        |  -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/requests/' . $value->id . '/edit') }}">show</a>

                        {{ Form::open(array('url' => 'admin/requests/' . $value->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        <tbody>

        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#requests').DataTable();
        });
    </script>
@stop
