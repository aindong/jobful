@extends('layouts.admin')

@section('content')
    {{ Form::open([
        'route' => 'admin.barangays.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.barangays.form.form')
    {{ Form::close() }}
@stop