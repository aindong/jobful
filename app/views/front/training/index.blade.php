@extends('layouts.default')

@section('content')
    <h1>{{{ $course['title'] }}}</h1>
    <h3>Type: </h3>
    <p>{{{ $course['skill'] }}}</p>
    <h3>Duration: </h3>
    <p>{{{ $course['duration'] }}} {{{ $course['duration_metric'] }}}</p>
    <h3>Description: </h3>
    <p>{{{ $course['description'] }}}</p>
@stop