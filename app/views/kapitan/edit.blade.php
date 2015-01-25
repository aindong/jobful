@extends('layouts.kapitan')

@section('content')

<div class="page-header">
    <a href="{{{ URL::to('/kapitan') }}}" class="pull-right btn">Cancel</a>
    <h1>My Profile</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::model($kapitan, [
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('kapitan.form.form')

    {{ Form::close() }}
@stop