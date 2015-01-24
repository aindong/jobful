@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangays') }}}" class="pull-right btn">Cancel</a>
    <h1>New Baranggay</h1>
    <div class="clearfix"></div>
</div>  

    {{ Form::open([
        'route' => 'admin.barangays.store',
        'method' => 'post',
        'class' => 'form',
        'role' => 'form'
    ]) }}

        @include('admin.barangays.form.form')
    {{ Form::close() }}
@stop