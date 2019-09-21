<!doctype html>
<html class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>freelance</title>

<link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
<!--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">-->
<!--<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">-->
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('css/site.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="d-flex flex-column h-100">
<!--Header_section-->
<header id="header_wrapper">
	@yield('header')
</header>
<!--Header_section-->

<!--Main_Section-->

	@yield('content')

<!--Footer_section-->
<footer id="footer_wrapper" class="mt-auto">
    @yield('footer')
</footer>
<!--Footer_section-->

<!--Modal_loader-->
<div class="modal" id="load" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
    <div class="spinner-border text-white position-absolute m-auto" role="status" style="top: 0; left: 0; bottom: 0; right: 0;">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<!--<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>-->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/front.js') }}"></script>


</body>
</html>
