<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            @section('title') {{ 'TPNP' }} @show
        </title>
        <meta name="description" content="@yield('meta-description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="base_url" content="{{ URL::to('/') }}">
        
        @section('head')
        @show
        {{-- HTML5 shim, for IE6-8 support of HTML5 elements --}}
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        {{ HTML::style('css/style.css') }}

        {{-- Call custom inline styles --}}
        @section('styles')
        @show
    </head>

    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- will be used to show any messages -->
        <div id="outer-wrap">
            <div id="wrap">
                <div id="inner-wrap">
                    <div class="content-wrapper">
                        @section('content.header')
                        @show
                        <div id="content-top">
                            {{-- Page content top --}}
                            @section('content.top')
                            @show
                        </div>

                        <div id="content">
                            {{-- Notifications --}}
                            {{-- @include('partials/notifications') --}}

                            {{-- Page content --}}
                            @section('content')
                            @show
                        </div>

                    </div> <!-- /.content-wrapper -->

                </div> <!-- /.inner-wrap -->
                {{-- Footer --}}
                
            </div> <!-- /.wrap -->

        </div> <!-- /.outer-wrap -->

        {{-- Call custom inline scripts --}}
        @section('scripts')
        @show

    </body>
</html>
