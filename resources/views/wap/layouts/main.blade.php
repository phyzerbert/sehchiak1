<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>TAG777</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- <link rel="stylesheet" href="{{ asset('/web/css/oneone/bootstrap.min.css') }}" />  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.css"> -->
    <!-- <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('/web/css/oneone/style.css') }}" />

    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/member.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/ssc.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/mmenu.all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/commonCss.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/custom.css') }}">

    <!-- <script type="text/javascript" src="{{ asset('/wap/js/jquery.js') }}"></script> -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.15/jquery.touchSwipe.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js" type="text/javascript"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script> -->
    <style>
        body * {
            font-weight: bolder !important;
        }
    </style>


    @yield('after.css')
</head>
<body class="m_bac">
@yield('content')
@include('wap.layouts.footer')
@yield('before.js')
<script type="text/javascript" src="{{ asset('/wap/js/touchslide.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/marquee.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/layer.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/base.js') }}"></script>
<script type="text/javascript" src="{{ asset('/wap/js/wap_ajax-submit-form.js') }}"></script>
<script src="{{ asset('/web/js/banner-slider.js') }}"></script>

<script type="text/javascript">
    TouchSlide({
        slideCell: "#slide",
        mainCell: ".bd",
        titCell: ".hd",
        effect: "leftLoop",
        autoPage: true,
        autoPlay: true
    });
    $("#news").marquee({duration: 10000});
    var info = function () {
        lay_msg('请登录后操作！', null);
    };
    var g_login = function () {
        var e = function () {
            location.replace("/guest.php");
        };
        lay_msg('试玩账号，登录成功！', e);
    };
    var onUrl = function (t) {
        t = Number(t) > 0 ? Number(t) : 1;
        location.replace('/route.php?t=' + t);
    };
</script>
@yield('after.js')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</body>
</html>