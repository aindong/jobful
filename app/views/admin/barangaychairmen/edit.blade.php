@extends('layouts.admin')

@section('content')
    {{ Form::model($barangaychairman, [
        'route' => 'admin.barangaychairmen.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.barangaychairmen.form.form')
    {{ Form::close() }}
@stop