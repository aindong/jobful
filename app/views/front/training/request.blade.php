@extends('layouts.default')

@section('title')
    Training
@stop

{{-- Page content --}}
@section('content')

<div class=" request-training">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">

        <div class="page-header">
            <h1><span class="glyphicon glyphicon-pencil"></span> Request Training</h1>
        </div>

<!-- FORM STARTS HERE -->
{{ Form::open( array(
    'url' => 'training/store',
    'method' => 'post',
    'id' => 'request-form',
    'class' => 'form-horizontal'
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
        <div class="checkbox" >
        <label>
        {{ Form::checkbox( 'course[' . $course->id . ']', $course->id, $isChecked, array(
            'id' => 'course-' . $course->id,
        ) ) . ' ' . $course->title }}
        </label>
        </div>
        <?php endforeach; ?>
        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
    </div>

    <div class="form-inline">
    {{ Form::label( 'name', 'Name', ['class' => 'control-label'] ) }}
    <div class=" @if ($errors->has('fname') || $errors->has('lname')) has-error @endif">
        <div class="form-group" >
        {{ Form::text( 'fname', Input::old('fname'), array(
            'id' => 'fname',
            'placeholder' => 'First name',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}
        </div>

        <div class="form-group" >
        {{ Form::text( 'lname', Input::old('lname'), array(
            'id' => 'lname',
            'placeholder' => 'Last name',
            'class' => 'form-control',
            'maxlength' => 10,
        ) ) }}
        </div>

        @if ($errors->has('fname')) <p class="help-block">{{ $errors->first('fname') }}</p> @endif
        @if ($errors->has('mname')) <p class="help-block">{{ $errors->first('mname') }}</p> @endif
        @if ($errors->has('lname')) <p class="help-block">{{ $errors->first('lname') }}</p> @endif
    </div>
    </div>

    <div class="form-group @if ($errors->has('baranggay')) has-error @endif">
        {{ Form::label( 'baranggay', 'Baranggay:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'baranggay', Input::old('baranggay'), array(
            'id' => 'baranggay',
            'placeholder' => 'Baranggay',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('baranggay')) <p class="help-block">{{ $errors->first('baranggay') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('locality')) has-error @endif">
        {{ Form::label( 'locality', 'Municipality:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'locality', Input::old('locality'), array(
            'id' => 'locality',
            'placeholder' => 'Municipality',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('locality')) <p class="help-block">{{ $errors->first('locality') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('district')) has-error @endif">
        {{ Form::label( 'district', 'District:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'district', Input::old('district'), array(
            'id' => 'district',
            'placeholder' => 'District',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('contact1')) has-error @endif">
        {{ Form::label( 'contact1', 'Contact #:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'contact1', Input::old('contact1'), array(
            'id' => 'contact1',
            'placeholder' => 'Contact',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('contact1')) <p class="help-block">{{ $errors->first('contact1') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('contact2')) has-error @endif">
        {{ Form::label( 'contact2', 'Contact #2 (optional):', ['class' => 'control-label'] ) }}
        {{ Form::text( 'contact2', Input::old('contact2'), array(
            'id' => 'contact2',
            'placeholder' => 'Contact',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('contact2')) <p class="help-block">{{ $errors->first('contact2') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {{ Form::label( 'email', 'Email:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'email', Input::old('email'), array(
            'id' => 'email',
            'placeholder' => 'Email',
            'class' => 'form-control',
        ) ) }}

        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    </div>

    <div class="form-group @if ($errors->has('type')) has-error @endif">
        {{ Form::label( 'participants', '# of expected participants:', ['class' => 'control-label'] ) }}
        {{ Form::text( 'participants', Input::old('participants'), array(
            'id' => 'participants',
            'placeholder' => '#',
            'class' => 'form-control',
        ) ) }}

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