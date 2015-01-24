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

<table class="table">
@foreach($list as $key => $value)
    <tr>
        <td>{{ $value->id }}</td>
        <td>{{ $value->title }}</td>

        <!-- we will also add show, edit, and delete buttons -->
        <td>

            <!-- delete the Course (uses the destroy method DESTROY /courses/{id} -->
            <!-- we will add this later since its a little more complicated than the other two buttons -->
            {{ Form::open(array('url' => 'courses/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this Course', array('class' => 'btn btn-warning')) }}
            {{ Form::close() }}

            <!-- show the Course (uses the show method found at GET /courses/{id} -->
            <a class="btn btn-small btn-success" href="{{ URL::to('admin/courses/' . $value->id) }}">Show this Course</a>

            <!-- edit this Course (uses the edit method found at GET /courses/{id}/edit -->
            <a class="btn btn-small btn-info" href="{{ URL::to('admin/courses/' . $value->id . '/edit') }}">Edit this Course</a>

        </td>
    </tr>
@endforeach
</table>
    
@stop

