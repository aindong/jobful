
<div class="form-group">
    {{ Form::label('barangay', 'Barangay', ['class' => 'form-label']) }}
    {{ Form::text('barangay', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('locality', 'Locality', ['class' => 'form-label']) }}
    {{ Form::text('locality', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('district', 'District', ['class' => 'form-label']) }}
    {{ Form::text('district', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('rep1', 'Representative 1', ['class' => 'form-label']) }}
    {{ Form::text('rep1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('rep2', 'Representative 2', ['class' => 'form-label']) }}
    {{ Form::text('rep2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('contact1', 'Contact Number 1', ['class' => 'form-label']) }}
    {{ Form::text('contact1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('contact2', 'Contact 2', ['class' => 'form-label']) }}
    {{ Form::text('contact2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('email1', 'Email Address 1', ['class' => 'form-label']) }}
    {{ Form::text('email1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('email2', 'Email Address 2', ['class' => 'form-label']) }}
    {{ Form::text('email2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/barangays" class="btn btn-default">Back</a>
<button type="submit" class="btn btn-default">Submit</button>