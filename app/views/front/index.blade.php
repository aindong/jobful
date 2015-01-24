@extends('layouts.default')

@section('content')
    <div class="landing-page">
        <div class="container">
            <div class="row">
                <div class="tagline col-xs-8">
                    <h3>Pellentesque ut </h3>
                    <h1>Neque Suspendisse</h1>
                    <h3>nisl elit .</h3>
                </div><!--end of .tagline-->

                <div class="login col-xs-4">
                    {{--<form action="">--}}
                        {{--<input type="text" class="form-control" placeholder="Email Address">--}}
                        {{--<input type="text" class="form-control" placeholder="Password">--}}
                        {{--<p><small><a href="#">Forgot your password?</a></small></p>--}}
                        {{--<a href="#" class="form-control btn button-submit">SUBMIT</a>--}}
                    {{--</form>--}}

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <span>{{ Session::get('error') }}</span>
                        </div>
                    @endif

                    {{ Form::open(['route' => 'user.dologin', 'class' => 'form']) }}
                    <div class="form-group">
                        {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
                        {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email Address', 'style' => 'color: #fff']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Password', ['class' => 'form-label']) }}
                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password', 'style' => 'color: #fff']) }}
                    </div>

                    <button type="submit" class="form-control btn button-submit">Submit</button>
                    {{ Form::close() }}
                </div><!--end of .login-->

            </div><!--end of .row-->
        </div><!--end of .container-->
    </div><!--end of .landing-page-->

    <div class="container">
        <div class="row">

            <div class="training-courses">
                <div class="container">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2 class="panel-title">Community based training program skills training to employment</h2>
                            </div><!--end of .panel-heading-->
                            <div class="panel-body">
                                <?php $i = 0; ?>
                                @foreach($courses as $course)
                                    <div class="col-xs-6">
                                        <ul class="list">
                                            <li><a href="/training/{{{ $course->id }}}/show">{{{ $course->title }}}</a></li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--end of .panel-->
                    </div><!--end of .row-->
                </div><!--end of .container-->
            </div><!--end of .training-courses-->

        </div><!--end of .row-->
    </div><!--end of .container-->

    <div class="request-training-tools">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <h1>Request Training Tools</h1>
                    <p>In turpis. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed aliquam ultrices mauris. Fusce egestas elit eget lorem.
                        <br>
                        Morbi nec metus. Etiam iaculis nunc ac metus. Cras non dolor. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. In turpis.</p>
                </div>

                <button class="pull-right col-xs-4" onclick="location-href='#'">Go to Request Tools</button>
            </div><!--end of .row-->
        </div><!--end of .container-->
    </div><!--end of .request-training-tools-->

    <div class="align-center">
        <div class="container">
            <div class="row">
                <h2>Pellentesque habitant morbi tristique senectus</h2>
                <p>Donec vitae sapien ut libero venenatis faucibus. Duis lobortis massa imperdiet quam. Donec mollis hendrerit risus. Fusce pharetra convallis urna. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Curabitur nisi. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Vivamus laoreet. Fusce fermentum odio nec arcu. Donec vitae orci sed dolor rutrum auctor.</p>
            </div><!--end of .row-->
        </div><!--end of container-->
    </div>
@stop