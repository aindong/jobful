@extends('layouts.admin')

@section('title')
    Edit Event
@stop
        
@section('content')
<div class="page-header">
    <h1><span class="glyphicon glyphicon-flash"></span> Edit Event</h1>
</div>  

<!-- FORM STARTS HERE -->
{{ Form::model($event, array(
    'route' => array('admin.events.update', $event->id),
    'method' => 'put',
    'id' => 'courses-form',
) )
}}

{{ Form::hidden('id', $event->id); }}

@if ($errors->has())
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

    <div class="form-group @if ($errors->has('course_id')) has-error @endif">
        {{ Form::label( 'course_id', 'Course:' ) }}
        {{ Form::select( 'course_id', $courses, Input::old('course_id'), array(
            'id' => 'course_id',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('course_id')) <p class="help-block">{{ $errors->first('course_id') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('trainer_id')) has-error @endif">
        {{ Form::label( 'trainer_id', 'Trainer:' ) }}
        {{ Form::select( 'trainer_id', $trainers, Input::old('trainer_id'), array(
            'id' => 'trainer_id',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('trainer_id')) <p class="help-block">{{ $errors->first('trainer_id') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('start_date')) has-error @endif">
        {{ Form::label( 'start_date', 'Start:' ) }}
        {{ Form::text( 'start_date', Input::old('start_date'), array(
            'id' => 'start_date',
            'placeholder' => 'YYYY-MM-DD H:i:s',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('start_date')) <p class="help-block">{{ $errors->first('start_date') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('end_date')) has-error @endif">
        {{ Form::label( 'end_date', 'End:' ) }}
        {{ Form::text( 'end_date', Input::old('end_date'), array(
            'id' => 'end_date',
            'placeholder' => 'YYYY-MM-DD H:i:s',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('end_date')) <p class="help-block">{{ $errors->first('end_date') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('type')) has-error @endif">
        {{ Form::label( 'status', 'Status:' ) }}
        {{ Form::select( 'status', ['0' => 'Unpublished', '1' => 'Published'], Input::old('status'), array(
            'id' => 'status',
            'class' => 'form-control',
        ) ) }}
        
        @if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
    </div>

    <div class="form-group">
        {{ Form::submit( '&nbsp; Submit &nbsp;', array(
            'id' => 'btn-submit',
            'class' => 'btn btn-primary',
        ) ) }}
    </div>
{{ Form::close() }}

</form>
    
@stop