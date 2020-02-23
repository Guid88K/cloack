<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/dashboard/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset('/dashboard/assets/css/font-icons/entypo/css/entypo.css')}}">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{asset('/dashboard/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/dashboard/assets/css/neon-core.css')}}">
    <link rel="stylesheet" href="{{asset('/dashboard/assets/css/neon-theme.css')}}">
    <link rel="stylesheet" href="{{asset('/dashboard/assets/css/neon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('/back/assets/css/custom.css')}}">
    @yield('css')
    <script src="{{asset('/dashboard/assets/js/jquery-1.11.3.min.js')}}"></script>
<!--[if lt IE 9]><script src="{{asset('/dashboard/assets/js/ie8-responsive-file-warning.js')}}"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-body page-fade gray">

<div class="page-container">
    @include('dashboard.layouts.sidebar')
    <div class="main-content">
        @include('dashboard.layouts.header')
        @yield('content')
    </div>
</div>

<link rel="stylesheet" href="{{asset('/dashboard/assets/js/jvectormap/jquery-jvectormap-1.2.2.css')}}">
<link rel="stylesheet" href="{{asset('/dashboard/assets/js/rickshaw/rickshaw.min.css')}}">
<script src="{{asset('/dashboard/assets/js/gsap/TweenMax.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/joinable.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/resizeable.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/neon-api.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/rickshaw/vendor/d3.v3.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/raphael-min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/morris.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/toastr.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/neon-chat.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/neon-custom.js')}}"></script>
<script src="{{asset('/dashboard/assets/js/neon-demo.js')}}"></script>
@yield('js')
</body>
</html>
