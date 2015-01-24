@section('content')
	{{{ Form::open('employers') }}}
		{{{ Form::label('firstname', 'First Name: ') }}}
		{{{ Form::text('firstname') }}}
	{{{ Form::close() }}}


@stop