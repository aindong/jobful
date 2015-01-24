@extends('layouts.default')

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">

<div class="page-header">
    <h1>Login</h1>
</div>  

@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

{{ Form::open(['route' => 'user.dologin', 'class' => 'form']) }}
    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
        {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
{{ Form::close() }}


</div>
<div class="col-md-4"></div>
</div>
</div>


@stop()