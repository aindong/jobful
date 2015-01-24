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
                    <form action="">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <input type="text" class="form-control" placeholder="Password">
                        <p><small><a href="#">Forgot your password?</a></small></p>
                        <a href="#" class="form-control btn button-submit">SUBMIT</a>
                    </form>
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
                                <div class="col-xs-6">
                                    <ul class="list">
                                        <li><a href="#">Small Engine (Yanmar, Kubato : 10 days)</a></li>
                                        <li><a href="#">Cellphone Repair (10 days)</a></li>
                                        <li><a href="#">Dressmaking / ISMO (10 days)</a></li>
                                        <li><a href="#">Housekeeping (10 days)</a></li>
                                        <li><a href="#">Catering (5 days)</a></li>
                                        <li><a href="#">Massage Theraphy (10 days)</a></li>
                                        <li><a href="#">Motorcycle Mechanics (10 days)</a></li>
                                        <li><a href="#">Shielded Metal Arc Welding (10 days)</a></li>
                                        <li><a href="#">Practical Electricity (8 days)</a></li>
                                    </ul>
                                </div>

                                <div class="col-xs-6">
                                    <ul class="list">
                                        <li><a href="#">Haircut / Barbering (5 days)</a></li>
                                        <li><a href="#">Facial Make - Up (7 days)</a></li>
                                        <li><a href="#">Manicure / Pedicure (6 days)</a></li>
                                        <li><a href="#">4 in 1 Training (Perfume , Making, Laundry Soap making, Dishwashig Soap Making, Fabric Conditioner Making ) (1 day)</a></li>
                                        <li><a href="#">Veggie Noodle Making (3 days)</a></li>
                                        <li><a href="#">Food Processing (6 days)</a></li>
                                        <li><a href="#">Commercial Cooking (6 days)</a></li>
                                        <li><a href="#">Meat Processing (5 days)</a></li>
                                        <li><a href="#">CLASP (Finishing Course Call Center Training) (12 days)</a></li>
                                    </ul>
                                </div>
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