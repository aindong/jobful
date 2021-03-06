@extends('layouts.trainer')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/trainer') }}}" class="pull-right btn">Cancel</a>
    <h1>My Profile</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::model($trainer, [
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('trainer.form.form')

    {{ Form::close() }}
@stop