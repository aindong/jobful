@extends('layouts.admin')

@section('content')
    {{ Form::open([
        'route' => 'admin.barangaychairmen.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.barangaychairmen.form.form')
    {{ Form::close() }}
@stop