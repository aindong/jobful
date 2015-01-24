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
    {{ Form::label('address1', 'Address 1 *', ['class' => 'form-label']) }}
    {{ Form::text('address1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('address2', 'Address 2' *, ['class' => 'form-label']) }}
    {{ Form::text('address2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('locality', 'Locality *', ['class' => 'form-label']) }}
    {{ Form::text('locality', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('administrative_level1', 'Administrative Level 1 *', ['class' => 'form-label']) }}
    {{ Form::text('administrative_level1', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('administrative_level2', 'Administrative Level 2' *, ['class' => 'form-label']) }}
    {{ Form::text('administrative_level2', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('country', 'Country *', ['class' => 'form-label']) }}
    {{ Form::select('country', array(
        'philippines'   => 'Philippines'), 
        null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('civil_status', 'Civil Status *', ['class' => 'form-label']) }}
    {{ Form::select('civil_status', array(
        'single'        => 'Single', 
        'married'       => 'Married',
        'widowed'       => 'Widow',
        'separated'     => 'Separated',
        'divorced'      => 'Divorced'), 
        null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('gender', 'Gender *', ['class' => 'form-label']) }}
    {{ Form::select('gender', array(
        'male'      => 'Male', 
        'female'    => 'Female'), 
        null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('age', 'Age *', ['class' => 'form-label']) }}
    {{ Form::text('age', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('bday', 'Birth Date *', ['class' => 'form-label']) }}
    {{ Form::text('bday', null, ['class' => 'form-control datepicker', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('attainment', 'Educational Attainment *', ['class' => 'form-label']) }}
    {{ Form::text('attainment', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('occupation', 'Occupation *', ['class' => 'form-label']) }}
    {{ Form::text('occupation', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>


<a href="/admin/trainees" class="btn btn-default">Back</a>
<button type="submit" class="btn btn-default">Submit</button>