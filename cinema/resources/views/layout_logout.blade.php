<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    @section('css')
        {{--<link href="{{ asset('css/pixel-admin.min.css') }}" rel="stylesheet" type="text/css">--}}
        {{--<link href="{{ asset('css/widgets.min.css') }}" rel="stylesheet" type="text/css">--}}
        {{--<link href="{{ asset('css/rtl.min.css') }}" rel="stylesheet" type="text/css">--}}
        {{--<link href="{{ asset('css/themes.min.css') }}" rel="stylesheet" type="text/css">--}}
        {{--<link href="{{ asset('css/pages.min.css') }}" rel="stylesheet" type="text/css">--}}
        {{--<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">--}}
        <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">
    @show
</head>

<body class="theme-fresh page-signin-alt">

        <div class="signin-header">
            <a href="index.html" class="logo">
                <div class="demo-logo bg-primary">
                </div>&nbsp;
                <strong>Cine</strong>3WA
            </a>
            <a href="{{ url('auth/register') }}" class="btn btn-primary">Sign Up</a>
        </div>

        @include('Partials/_flashdatas')

        @yield('content')

    @section('js')

            {{--<script src="{{ asset('js/jquery.min.js') }}"></script>--}}
        <!-- Get jQuery from Google CDN -->
        <!--[if !IE]> -->
        <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
        <!-- <![endif]-->
        <!--[if lte IE 9]>
        <script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
        <![endif]-->


        <!-- Pixel Admin's javascripts -->
        {{--<script src="{{ asset('js/all.js') }}"></script>--}}
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/pixel-admin.min.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>

        <script type="text/javascript">
            init.push(function () {
                // Javascript code here
            })
            window.PixelAdmin.start(init);
        </script>

    @show


    </body>
</html>