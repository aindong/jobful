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
                                            <li><a href="/training/{{{ $course->id }}}">{{{ $course->title }}}</a></li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div><!--end of .panel-->
                    </div><!--end of .row-->
                </div><!--end of .container-->
            </div><!--end of .training-courses-->

            <hr class="line-seperator">
            <div class="request-training-tools">
                <h2>Request Training Tools</h2>
                <div class="col-xs-6">
                    <div class="">
                        <label class="col-xs-3">Name : </label>
                        <div class="col-xs-9"><input type="text" class="form-control"></div>
                    </div>

                    <div class="">
                        <label class="col-xs-3">Email Address : </label>
                        <div class="col-xs-9"><input type="email" class="form-control"></div>
                    </div>

                    <div class="">
                        <label class="col-xs-3">Request : </label>
                        <div class="col-xs-9">
                            <select name="request" id="" class="form-control">
                                <option value="" selected>--Select Request--</option>
                                <option value="">Request One</option>
                                <option value="">Request Two</option>
                                <option value="">Request Three</option>
                            </select>
                            <button class="form-control btn" onclick="location.href='#'">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div><!--end of .request-training-tools-->
            <div class="clearfix"></div>
            <div class="employment-informations">
                <div class="col-xs-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Job Seeker</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div><!--end of .panel-->
                </div>

                <div class="col-xs-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Job Function</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div><!--end of .panel-->
                </div>

                <div class="col-xs-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Employer</h3>
                        </div>
                        <div class="panel-body">
                            Panel content
                        </div>
                    </div><!--end of .panel-->
                </div>
            </div><!--end of .employment-informations-->

        </div><!--end of .row-->
    </div><!--end of .container-->
@stop