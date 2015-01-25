@extends('layouts.trainee')

@section('content')

    <div class="content">
        <table id="training" class="display table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Barangay</th>
                <th>District</th>
                <th>Locality</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Barangay</th>
                <th>District</th>
                <th>Locality</th>
                <th>Contact</th>
                <th>Email</th>
            </tr>
            </tfoot>
            @foreach($training as $train)
                <tr>
                    <td></td>
                    <td>{{{ $train->lname . ', ' . $train->fname . ' ' . $train->mname }}}</td>
                    <td>{{{ $train->barangay }}}</td>
                    <td>{{{ $train->district }}}</td>
                    <td>{{{ $train->locality }}}</td>
                    <td>{{{ $train->contact1 }}}</td>
                    <td>{{{ $train->email }}}</td>
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
            $('#training').DataTable();
        });
    </script>
@stop
