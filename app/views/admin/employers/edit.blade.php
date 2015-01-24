@extends('layouts.admin')

@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/organizations') }}}" class="pull-right btn">Cancel</a>
    <h1>Edit Organization</h1>
    <div class="clearfix"></div>
</div>  

    {{ Form::model($employer, [
        'route' => 'admin.organizations.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.employers.form.form')
    {{ Form::close() }}
@stop