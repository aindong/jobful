@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangaychairmen') }}}" class="pull-right btn">Cancel</a>
    <h1>Manage Chairmans</h1>
    <div class="clearfix"></div>
</div>  

    {{ Form::model($barangaychairman, [
        'route' => 'admin.barangaychairmen.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.barangaychairmen.form.form')
    {{ Form::close() }}
@stop