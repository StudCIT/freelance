<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>freelance</title>

<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<!--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">-->
<!--<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">-->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">


  <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

</head>
<body>
<!--Header_section-->
<header id="header_wrapper">
	@yield('header')
</header>
<!--Header_section-->

<!--Main_Section-->

	@yield('content')

<!--Footer_section-->
<footer id="footer_wrapper">
    @yield('footer')
</footer>
<!--Footer_section-->

<!--<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>-->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>


</body>
</html>
