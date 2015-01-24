@extends('layouts.admin')

@section('content')
    {{ Form::open([
        'route' => 'admin.organizations.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.organizations.form.form')
    {{ Form::close() }}
@stop