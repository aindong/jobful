@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangaychairmen') }}}" class="pull-right btn">Cancel</a>
    <h1>New Chairman</h1>
    <div class="clearfix"></div>
</div>  

    {{ Form::open([
        'route' => 'admin.barangaychairmen.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.barangaychairmen.form.form')
    {{ Form::close() }}
@stop