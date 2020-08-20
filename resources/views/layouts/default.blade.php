<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','WeiBo')</title>
    <link rel="stylesheet" href="{{asset('bootstrap-3.4.1/css/bootstrap.min.css')}}">
</head>
<body>
    @include('layouts._header')
    <div class="container-fluid">
        @yield('content')
    </div>
    @include('layouts._footer')
    <script type="text/javascript" src="{{asset('jquery-3.3.1/jquery-3.3.1.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-3.4.1/js/bootstrap.min.js')}}"></script>
</body>
</html>

