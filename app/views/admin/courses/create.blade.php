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
            <h1><span class="glyphicon glyphicon-flash"></span> Create Course</h1>
        </div>  

<!-- FORM STARTS HERE -->
{{ Form::open( array(
    'route' => 'admin.courses.store',
    'method' => 'post',
    'id' => 'courses-form',
) ) }}

@if ($errors->has())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>        
    @endforeach
</div>
@endif


    <div class="form-group @if ($errors->has('code')) has-error @endif">
        <label for="name">Code</label>
        <input type="text" id="code" class="form-control" name="code" placeholder="Code" value="{{ Input::old('code') }}">
        @if ($errors->has('code')) <p class="help-block">{{ $errors->first('code') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('title')) has-error @endif">
        <label for="name">Title</label>
        <input type="text" id="title" class="form-control" name="title" placeholder="Code" value="{{ Input::old('title') }}">
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