@extends('layouts.admin')

@section('content')
    {{ Form::open([
        'route' => 'admin.trainees.store',
        'method' => 'post',
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