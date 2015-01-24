@extends('layouts.admin')

@section('content')
    {{ Form::model($barangay, [
        'route' => 'admin.barangays.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.barangays.form.form')
    {{ Form::close() }}
@stop