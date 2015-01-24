@extends('layouts/default')

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

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Edit Course</h1>
        </div>  

<!-- FORM STARTS HERE -->
{{ Form::model($course, array(
    'route' => array('admin.courses.update', $course->id),
    'method' => 'put',
    'id' => 'courses-form',
) )
}}

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

    <div class="form-group">
        {{ Form::submit( '&nbsp; Submit &nbsp;', array(
            'id' => 'btn-submit',
            'class' => 'btn btn-primary',
        ) ) }}
    </div>
{{ Form::close() }}

</form>

</div>
</div>
    
@stop