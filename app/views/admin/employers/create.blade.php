@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/organizations') }}}" class="pull-right btn">Cancel</a>
    <h1>New Organization</h1>
    <div class="clearfix"></div>
</div>  


    {{ Form::open([
        'route' => 'admin.organizations.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.employers.form.form')
    {{ Form::close() }}
@stop