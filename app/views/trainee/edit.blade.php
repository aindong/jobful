@extends('layouts.trainee')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/trainee') }}}" class="pull-right btn">Cancel</a>
    <h1>My Profile</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::model($trainee, [
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('trainee.form.form')

    {{ Form::close() }}
@stop