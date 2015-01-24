@extends('layouts.admin')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/admin/trainees') }}}" class="pull-right btn">Cancel</a>
    <h1>New Trainee</h1>
    <div class="clearfix"></div>
</div>  

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