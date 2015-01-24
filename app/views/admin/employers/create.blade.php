@extends('layouts.admin')

@section('content')
    {{ Form::open([
        'route' => 'admin.employers.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.employers.form.form')
    {{ Form::close() }}
@stop