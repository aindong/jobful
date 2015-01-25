@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="page-header">
        <h1>{{{ $course->title }}}</h1>
        <p>About the training</p>
    </div>  

    <p>{{{ $course->description }}}</p>

    
    <h3>Type: </h3>
        <p>{{{ ucfirst($course->type) }}}</p>

    <h3>Duration: </h3>
        <p>{{{ $course->duration }}} {{{ $course->duration_metric }}}(s)</p>
      
    <a href="/training/request" class="btn btn-primary">Request for training</a>      

</div>

@stop