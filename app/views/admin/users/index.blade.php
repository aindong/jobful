@extends('layouts.admin')

@section('content')

    <div class="content">
        <table id="example" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>Email</th>
                <th>Password</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>Email</th>
                <th>Password</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </tfoot>
            @foreach($users as $user)
                <tr>
                    <td></td>
                    <td>{{{ $user->email }}}</td>
                    <td>{{{ $user->password }}}</td>
                    <td>{{{ $user->created_at }}}</td>
                    <td>{{{ $user->updated_at }}}</td>
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