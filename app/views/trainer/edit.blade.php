@extends('layouts.trainer')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/trainers') }}}" class="pull-right btn">Cancel</a>
    <h1>Edit Trainer</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::model($trainer, [
        'route' => 'trainers.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('trainers.form.form')

    {{ Form::close() }}
@stop