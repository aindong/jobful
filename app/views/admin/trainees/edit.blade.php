@extends('layouts.admin')

@section('content')
    {{ Form::model($trainee, [
        'route' => 'admin.trainees.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.trainees.form.form')
    {{ Form::close() }}
@stop

@section('page-script')
    <script type="text/javascript">
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>
@stop