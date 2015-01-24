@extends('layouts.admin')

@section('title')
    New Requests
@stop

{{-- Inline scripts --}}
@section('scripts')
@parent
@stop

{{-- Inline styles --}}
@section('styles')
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
    <a href="{{{ URL::to('/admin/requests') }}}" class="pull-right btn">Cancel</a>
    <h1>Edit Course</h1>
    <div class="clearfix"></div>
</div>  

<dl class="dl-horizontal">
    <dt>First Name</dt>
    <dd>{{{ $request->fname }}} &nbsp;</dd>
    <dt>Last Name</dt>
    <dd>{{{ $request->lname }}} &nbsp;</dd>
    <dt>Baranggay</dt>
    <dd>{{{ $request->baranggay }}} &nbsp;</dd>
    <dt>District</dt>
    <dd>{{{ $request->district }}} &nbsp;</dd>
    <dt>Municipality</dt>
    <dd>{{{ $request->locality }}} &nbsp;</dd>
    <dt>Contact</dt>
    <dd>{{{ $request->contact1 }}} &nbsp;</dd>
    <?php if ($request->contact1): ?>
    <dt>Contact #2</dt>
    <dd>{{{ $request->contact2 }}} &nbsp;</dd>
    <?php endif; ?>
    <dt>Email</dt>
    <dd>{{{ $request->email }}} &nbsp;</dd>
    <dt>Expected Participants</dt>
    <dd>{{{ $request->participants }}} &nbsp;</dd>

    <dt>Request Date</dt>
    <dd>{{{ date('M d, Y', strtotime($request->created_at)) }}} &nbsp;</dd>

    <dt>Courses</dt>
    <dd>
        <?php foreach($request->courses as $value): ?>
        <?php echo @$courses[$value->course_id]; ?><br/>
        <?php endforeach; ?>
        &nbsp;
    </dd>
</dl>


<!-- FORM STARTS HERE -->
{{ Form::model($request, array(
    'route' => array('admin.requests.update', $request->id),
    'method' => 'put',
    'id' => 'requests-form',
) )
}}

{{ Form::hidden('id', $request->id); }}

@if ($errors->has())
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif

    <div class="form-group @if ($errors->has('type')) has-error @endif">
        {{ Form::label( 'status', 'Status:' ) }}
        {{ Form::select( 'status', [0 => 'New', 1 => 'Approved', 3 => 'Scheduled', 100 => 'Denied'], Input::old('status'), array(
            'id' => 'status',
            'class' => 'form-control',
        ) ) }}
        
        @if ($errors->has('type')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
    </div>

    <div class="form-group">
        {{ Form::submit( '&nbsp; Submit &nbsp;', array(
            'id' => 'btn-submit',
            'class' => 'btn btn-primary',
        ) ) }}
    </div>
{{ Form::close() }}

@stop