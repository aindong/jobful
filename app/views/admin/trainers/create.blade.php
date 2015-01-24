@extends('layouts.admin')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/admin/trainers') }}}" class="pull-right btn">Cancel</a>
    <h1>New Trainer</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::open([
        'route' => 'admin.trainers.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.trainers.form.form')

    {{ Form::close() }}
@stop