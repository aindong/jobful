@extends('layouts.trainee')

@section('content')

    <div class="content">
        <h1>Coming soon..</h1>
    </div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#training').DataTable();
        });
    </script>
@stop
