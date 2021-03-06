@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('email', 'Email Address *', ['class' => 'form-label']) }}
    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Password *', ['class' => 'form-label']) }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('lname', 'Last Name *', ['class' => 'form-label']) }}
    {{ Form::text('lname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('fname', 'First Name *', ['class' => 'form-label']) }}
    {{ Form::text('fname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('mname', 'Middle Name *', ['class' => 'form-label']) }}
    {{ Form::text('mname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('barangay_id', 'Barangay *', ['class' => 'form-label']) }}
    {{ Form::select('barangay_id', $barangays, null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/barangaychairmen" class="btn btn-default">Back</a>
<button type="submit" class="btn btn-default">Submit</button>