@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/barangays') }}}" class="pull-right btn">Cancel</a>
    <h1>Edit Baranggay</h1>
    <div class="clearfix"></div>
</div>  

    {{ Form::model($barangay, [
        'route' => 'admin.barangays.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.barangays.form.form')
    {{ Form::close() }}
@stop