@extends('layouts.default')

@section('title')
    Training
@stop

{{-- Page content --}}
@section('content')

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Request Training</h1>
        </div>  

<!-- FORM STARTS HERE -->
{{ Form::open( array(
    'url' => 'training/store',
    'method' => 'post',
    'id' => 'request-form',
) ) }}

@if ($errors->has())
<div class="alert alert-danger">
    {{ HTML::ul($errors->all()) }}
</div>
@endif
    
    <div class="form-group @if ($errors->has('title')) has-error @endif">
        {{ Form::label( 'courses', 'Courses (Please Check)' ) }}
        <?php foreach ($courses as $course): ?>
        <?php 
        $isChecked = false;
        if (Input::old()) {
            $isChecked = Input::old('course.' . $course->id, false);
        }
        ?>
        <div class="form-control" >
        {{ Form::checkbox( 'course[' . $course->id . ']', $course->id, $isChecked, array(
            'id' => 'course-' . $course->id,
        ) ) . ' ' . $course->title }}
        </div>
        <?php endforeach; ?>
        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('code')) has-error @endif">
        {{ Form::label( 'name', 'Name:' ) }}
        {{ Form::text( 'fname', Input::old('fname'), array(
            'id' => 'fname',
            'placeholder' => 'First name',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}

        {{ Form::text( 'mname', Input::old('mname'), array(
            'id' => 'mname',
            'placeholder' => 'Middle name',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}

        {{ Form::text( 'lname', Input::old('lname'), array(
            'id' => 'lname',
            'placeholder' => 'Last name',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}

        @if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif
        @if ($errors->has('mname')) <p class="help-block">{{ $errors->first('mname') }}</p> @endif
        @if ($errors->has('lname')) <p class="help-block">{{ $errors->first('lname') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('baranggay')) has-error @endif">
        {{ Form::label( 'baranggay', 'Baranggay:' ) }}
        {{ Form::text( 'baranggay', Input::old('baranggay'), array(
            'id' => 'baranggay',
            'placeholder' => 'Baranggay',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('baranggay')) <p class="help-block">{{ $errors->first('baranggay') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('locality')) has-error @endif">
        {{ Form::label( 'locality', 'Municipality:' ) }}
        {{ Form::text( 'locality' ) }}
        
        @if ($errors->has('locality')) <p class="help-block">{{ $errors->first('locality') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('district')) has-error @endif">
        {{ Form::label( 'district', 'District:' ) }}
        {{ Form::text( 'district' ) }}
        
        @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('contact1')) has-error @endif">
        {{ Form::label( 'contact1', 'Contact #:' ) }}
        {{ Form::text( 'contact1' ) }}
        
        @if ($errors->has('contact1')) <p class="help-block">{{ $errors->first('contact1') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('contact2')) has-error @endif">
        {{ Form::label( 'contact2', 'Contact #2 (optional):' ) }}
        {{ Form::text( 'contact2' ) }}
        
        @if ($errors->has('contact1')) <p class="help-block">{{ $errors->first('contact1') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {{ Form::label( 'email', 'Email:' ) }}
        {{ Form::text( 'email' ) }}
        
        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('type')) has-error @endif">
        {{ Form::label( 'participants', '# of expected participants:' ) }}
        {{ Form::text( 'participants' ) }}
        
        @if ($errors->has('participants')) <p class="help-block">{{ $errors->first('participants') }}</p> @endif
    </div>

    <div class="form-group">
        {{ Form::submit( '&nbsp; Submit &nbsp;', array(
            'id' => 'btn-submit',
            'class' => 'btn btn-primary',
        ) ) }}
    </div>

{{ Form::close() }}

</form>

</div>
</div>
    
@stop