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

<h1>Showing {{ $course->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $course->title }}</h2>
    </div>
    
    <a class="btn btn-small btn-info" href="{{ URL::to('admin/courses/' . $course->id . '/edit') }}">Edit this Course</a>

@stop