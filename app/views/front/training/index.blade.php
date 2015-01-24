@extends('layouts.default')

@section('content')
    <div class="container">
        
        <h1>{{{ $course->title }}}  <a href="/training/{{{ $course->id }}}/request" class="btn btn-primary">Request for training</a></h1>
        <h3>Type: </h3>
            <p>{{{ $course->type }}}</p>

        <h3>Duration: </h3>
            <p>{{{ $course->duration }}} {{{ $course->duration_metric }}}/s</p>

        <h3>Description: </h3>
            <p>{{{ $course->description }}}</p>
    </div>
@stop