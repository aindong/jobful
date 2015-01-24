@extends('layouts.admin')

@section('title')
    New Courses
@stop

{{-- Inline scripts --}}
@section('scripts')
@parent
@stop

{{-- Inline styles --}}
@section('styles')
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/admin/courses') }}}" class="pull-right btn">Cancel</a>
    <h1>Edit Course</h1>
    <div class="clearfix"></div>
</div>  

<!-- FORM STARTS HERE -->
{{ Form::model($course, array(
    'route' => array('admin.courses.update', $course->id),
    'method' => 'put',
    'id' => 'courses-form',
) )
}}

{{ Form::hidden('id', $course->id); }}

@if ($errors->has())
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

    <div class="form-group @if ($errors->has('code')) has-error @endif">
        {{ Form::label( 'code', 'Code:' ) }}
        {{ Form::text( 'code', Input::old('code'), array(
            'id' => 'code',
            'placeholder' => 'Code',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}
        @if ($errors->has('code')) <p class="help-block">{{ $errors->first('code') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('title')) has-error @endif">
        {{ Form::label( 'title', 'Title:' ) }}
        {{ Form::text( 'title', Input::old('title'), array(
            'id' => 'title',
            'placeholder' => 'Title',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('title')) has-error @endif">
        {{ Form::label( 'description', 'Description:' ) }}
        {{ Form::textarea( 'description', Input::old('description'), array(
            'id' => 'description',
            'placeholder' => 'Description',
            'class' => 'form-control',
        ) ) }}
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('duration')) has-error @endif">
        {{ Form::label( 'duration', 'Duration:' ) }}
        {{ Form::text( 'duration', Input::old('duration'), array(
            'id' => 'duration',
            'placeholder' => 'Duration',
            'class' => 'form-control',
        ) ) }}

        {{ Form::select( 'duration_metric', ['day' => 'Days', 'hour' => 'Hours'], Input::old('duration_metric'), array(
            'id' => 'duration_metric',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('duration')) <p class="help-block">{{ $errors->first('duration') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('type')) has-error @endif">
        {{ Form::label( 'type', 'Type:' ) }}
        {{ Form::select( 'type', ['livelihood' => 'Livelihood', 'skill' => 'Skill'], Input::old('type'), array(
            'id' => 'type',
            'class' => 'form-control',
        ) ) }}
        
        @if ($errors->has('type')) <p class="help-block">{{ $errors->first('type') }}</p> @endif
    </div>

    <div class="form-group">
        {{ Form::submit( '&nbsp; Submit &nbsp;', array(
            'id' => 'btn-submit',
            'class' => 'btn btn-primary',
        ) ) }}
    </div>
{{ Form::close() }}
    
@stop