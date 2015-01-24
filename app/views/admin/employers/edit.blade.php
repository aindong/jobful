@extends('layouts.admin')

@section('content')
    {{ Form::model($employer, [
        'route' => 'admin.organizations.update',
        'method' => 'put',
        'class' => 'form',
        'role' => 'form'
    ]) }}

    @include('admin.employers.form.form')
    {{ Form::close() }}
    <script type="text/javascript">
	$(function() {
		$('#dp5').datepicker()
	});
	</script>
@stop

@section('page-script')
	
@stop