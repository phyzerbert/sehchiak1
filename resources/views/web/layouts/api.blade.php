<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <title>TAGaming-Gentingclub</title>
    <link rel="stylesheet" href="{{ asset('/web/css/bootstrap.min.css') }}">
    <script src="{{ asset('/web/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/web/js/popper.min.js') }}"></script>
    <script src="{{ asset('/web/js/bootstrap.min.js') }}"></script>
    <style>
        #ajax-loading{
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            display: none;
            opacity: 0.3;
            background-color: black;
        }
    </style>
    @yield('style')
</head>
<body>

    @yield('content')    
    
    <div id="ajax-loading" class="text-center">
        <img class="mx-auto" src="{{asset('web/layer/skin/default/loading-2.gif')}}" alt="" style="margin:45vh auto;">
    </div>
    @yield('afterjs')
</body>
</html>