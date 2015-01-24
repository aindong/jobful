<div class="form-group">
    {{ Form::label('fname', 'First Name *', ['class' => 'form-label']) }}
    {{ Form::text('fname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('lname', 'Last Name *', ['class' => 'form-label']) }}
    {{ Form::text('lname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('mname', 'Middle Name *', ['class' => 'form-label']) }}
    {{ Form::text('mname', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('country', 'Country *', ['class' => 'form-label']) }}
    {{ Form::text('country', 'Philippines', ['class' => 'form-control', 'required' => 'required', 'readonly' => 'readonly']) }}
</div>

<div class="form-group">
    {{ Form::label('address1', 'Address 1 *', ['class' => 'form-label']) }}
    {{ Form::text('address1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('address2', 'Address 2', ['class' => 'form-label']) }}
    {{ Form::text('address2', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('locality', 'Locality *', ['class' => 'form-label']) }}
    {{ Form::text('locality', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('administrative_level1', 'Administrative 1 *', ['class' => 'form-label']) }}
    {{ Form::text('administrative_level1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('administrative_level2', 'Administrative 2', ['class' => 'form-label']) }}
    {{ Form::text('administrative_level2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/trainers" class="btn btn-default">Back</a>
<button type="submit" class="btn btn-default">Submit</button>