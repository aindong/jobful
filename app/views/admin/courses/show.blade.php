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
    <h1>{{ $course->title }}</h1>
    <div class="clearfix"></div>
</div>  
    
    <a class="btn btn-small btn-info" href="{{ URL::to('admin/courses/' . $course->id . '/edit') }}">Edit this Course</a>

@stop