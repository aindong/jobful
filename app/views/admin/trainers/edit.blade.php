@extends('layouts.admin')

@section('content')
    {{ Form::model($trainer, [
        'route' => 'admin.trainers.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.trainers.form.form')

    {{ Form::close() }}
@stop