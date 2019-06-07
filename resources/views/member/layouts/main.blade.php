<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TAG777 is the best Online Casino Malaysia, we provide live casino, sports betting, slots game, and online 4D lottery. Enjoy best online gaming in Malaysia.">
    <link rel="alternate" href="http://www.tag777.com/" hreflang="en" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <script type="text/javascript">
        var lbl_Ok = "{{ __('words.Ok') }}";
        var lbl_Confirm = '{{ __("words.Confirm") }}';
        function browserRedirect() {
            var sUserAgent = navigator.userAgent.toLowerCase();
            var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
            var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
            var bIsMidp = sUserAgent.match(/midp/i) == "midp";
            var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
            var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
            var bIsAndroid = sUserAgent.match(/android/i) == "android";
            var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
            var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
            if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
                location.href='/m';
            } else {
                return false;
            }
        }

        browserRedirect();
    </script>
    <link rel="stylesheet" href="{{ asset('/web/css/oneone/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('/web/fonts/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/web/css/vendor.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/web/css/member.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/yk_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/index1.css') }}">

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-58B9VKL');</script>

    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.ico')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="{{ asset('/web/css/oneone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/web/css/banner-slider.css') }}" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.15/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <!-- <script src="{{ asset('/web/js/script.js') }}"></script> -->
    <script src="{{ asset('/web/js/banner-slider.js') }}"></script>
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "EntertainmentBusiness",
        "additionalType": [
        "https://en.wikipedia.org/wiki/Online_casino",
        "https://en.wikipedia.org/wiki/Malaysia",
        "https://en.wikipedia.org/wiki/Online_gambling"
        ],
        "name": "OneOne gives you the best online betting experience in Malaysia",
        "description": "OneOne ONLINE ENTERTAINMENT CITY was established in the Philippines in 2013 and have since expanded across Asia. OneOne is a host to more than 30 most popular online gaming platforms from Europe to Asia, providing members with over 1000 online games. We offer the best online casino experience in Malaysia and is committed to customer safety and privacy. Our games are certified and internationally recognized, and the site uses SSL encryption only to give you a safe and reliable online betting platform with the widest gameplay choices. In addition to our highly-recommended Live casino games, we also provide Sports betting, Online slots games and 4D Lottery Betting. Not only you get to bet with your favorite games, you can now enjoy them in full privacy too anytime, anywhere on your favorite smart devices. Of course, at OneOne it is more than winning, read on to find out more on what else we have in store for you to fulfill your every entertainment need. It is just like visiting Las Vegas, only virtually in our digital entertainment platform.",
        "image": "http://www.tag777.com/img/OneOne-logo2.svg",
        "priceRange": "$10 - $100000",
        "openingHours": "Mo-Su",
        "url": "https://t.co/C34OM5OVaR#online-casino-malaysia",
        "logo": {
        "@type": "ImageObject",
        "url": "https://lh3.googleusercontent.com/--MPFOxLNhYw/AAAAAAAAAAI/AAAAAAAAAAs/AzLboTjeA9Y/s60-p-rw-no-il/photo.jpg",
        "width": {
        "@type": "QuantitativeValue",
        "value": 250
        },
        "height": {
        "@type": "QuantitativeValue",
        "value": 250
        }
        },
        "sameAs": [
        "https://instagram.com/p/BobSPVKH8js",
        "https://www.facebook.com/OneOnepromotion/",
        "https://www.youtube.com/watch?v=4g_X6v8Dp0k",
        "https://plus.google.com/u/1/116920268656739249906",
        "https://www.pinterest.com/oneonengamingen/",
        "https://www.reddit.com/user/oneonengamingen/",
        "https://twitter.com/oneonengamingen"
        ],
        "areaServed": [
        {
        "@type": "Country",
        "name": "Malaysia",
        "url": "https://www.wikidata.org/wiki/Q833"
        }
        ],
        "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Online Casino Malaysia",
        "itemListElement": [
        {
        "@type": "Offer",
        "itemOffered": "Service",
        "name": "Live Caino",
        "url": " http://www.tag777.com/live-casino.html"
        },
        {
        "@type": "Offer",
        "itemOffered": "Service",
        "name": "Sport Betting",
        "url": "http://www.tag777.com/sport-betting.html"
        },
        {
        "@type": "Offer",
        "itemOffered": "Service",
        "name": "Online Slot game",
        "url": "http://www.tag777.com/online-slots.html"
        },
        {
        "@type": "Offer",
        "itemOffered": "Service",
        "name": "Lottery 4D",
        "url": "http://www.tag777.com/online-4d.html"
        }
        ]
        }
        }
    </script>
    <script>
        /* {{ __('words.Ok') }} */
        var lbl_Ok = "{{ __('words.Ok') }}";
        var lbl_Confirm = '{{ __("words.Confirm") }}';
    </script>
    <meta name="google-site-verification" content="zWkWiTglCTA6BwI0pA2Iiu3JLcCiJ02gYcogfrnvLKM" />
    <meta name="google-site-verification" content="v6fcpYzojqELJhF2S1VKhPcLc5zAXnXBDGneOEyuJew" />
    <meta name="google-site-verification" content="enE6Xd81z3XgiFxXJyGlq3V4AVB4G2vAqKEAmzISLZ4" />
    <meta name="google-site-verification" content="_H_T62-ho-L748hGDr0fsH72th7uvxGr7rBk-ZhTyUY" />
</head>

<body class="preload">


    <div id="mm-wrapper">
        <header class="">
            <div id="topbar" class="">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <a class="navbar-toggler" id="responsive-menu-button" href="#my-menu">
                                <div id="nav-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <a href="{{ route('web.index') }}" class="site-logo"><img src="{{ asset('/web/images/oneone/logo_all.png') }}"
                                    alt="ONEONE Gaming"></a>
                        </div>
                        <div class="col-auto text-right">
                            <div class="loginAgent">
                                <a href="http://agent.tag777.com" target="_blank">{{ __('ft.proxy_login') }}</a>
                                <span>&nbsp;|&nbsp;</span>
                                <a href="javascript:;" class="daili_apply">{{ __('ft.Agent_Register') }}</a>
                                <span>|&nbsp;</span>
                                <a href="javascript:;" onclick="alert('{{__('ft.contact_customer_service')}}')">{{ __('ft.Forget_Password') }}</a>
                            </div>
                            <div class="d-none d-lg-block">
                                <div class="row no-gutters align-items-center justify-content-end">
                                    @if (Auth::guard('member')->guest())
                                        <div class="col-auto pr-3">
                                            <form class="form-inline" action="{{ route('member.login.post') }}" method="post">
                                                <div class="form-group mr-3">
                                                    <label for="username1" class="sr-only">Username</label>
                                                    <input class="form-control" type="text" placeholder="{{ __('ft.username') }}"
                                                        autocomplete="on" tabindex="1" maxlength="12" name="name" id="uname"
                                                        type="text">
                                                </div>
                                                <div class="form-group mr-3">
                                                    <label for="password1" class="sr-only">Password</label>
                                                    <div class="password-holder">
                                                        <input class="form-control" type="password" id="pwd" maxlength="12"
                                                            placeholder="{{ __('ft.password') }}" tabindex="2" name="password">
                                                        <button type="button" data-toggle="modal" data-target="#fpModal"
                                                            class="btn btn-light forgot-trigger">Forgot?</button>
                                                    </div>
                                                </div>
                                                <div class="form-group mr-3" id="TopLoginValidation">
                                                    <label for="topbar-verify" class="sr-only">Validation Code</label>
                                                    <div class="verify-holder">
                                                        <input class="form-control" placeholder="{{ __('ft.Captcha') }}"
                                                            tabindex="2" type="text" name="captcha">
                                                        <div class="img-verify">
                                                            <a href="javascript:;" class="lnk-refresh bg-refresh" onclick="re_captcha()">
                                                                <img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff6"
                                                                    idth="80" height="42">
                                                                <script>
                                                                    function re_captcha() {
                                                                        $url = "{{ URL('kit/captcha') }}";
                                                                        $url = $url + "/" + Math.random();
                                                                        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src = $url;
                                                                    }
                                                                </script>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button value="{{ __('ft.Login_Now') }}" type="button" class="btn btn-shadow btn-primary ajax-submit-btn"
                                                    id="btnTopLogin">Sign In</button>
                                            </form>                                           
                                        </div>
                                    @else
                                        <div class="loginUser">
                                            {{ $_member->name }}, {{ __('ft.Balance') }} :  <span class="yellowCr money" style="color:red;">{{ $_member->money }}</span>&nbsp;&nbsp;<br/>                                            
                                            <a href="{{ route('member.userCenter') }}">{{ __('ft.Customer_Center') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.finance_center') }}" class="onlinebank">{{ __('ft.Online_Banking') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.member_drawing') }}">{{ __('ft.Balance') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.indoor_transfer') }}">{{ __('ft.Game_Balance') }}</a>&nbsp;<br/>
                                            <a href="{{ route('member.customer_report') }}">{{ __('ft.Transaction_History') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.message_list') }}">{{ __('ft.Unread_Message') }}(<span
                                                        class="redCr">{{ $_not_read_message_num }}</span>)</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('ft.Log_out') }}</a>
                                            <form id="logout-form" action="{{ route('member.logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </div>                                                                                                                                                              
                                    @endif
                                    <div class="col-auto">
                                        <div class="lang-picker">
                                            <select class="langpick selectpicker  fit-width">
                                            
                                                <option data-content="<img src='{{ asset('/web/images/usa.gif') }}'/> English"
                                                @if(config('app.locale') == 'en')
                                                    selected
                                                @endif
                                                >{{ URL('lang/en') }}</option>
                                            
                                                <option data-content="<img src='{{ asset('/web/images/malay.png') }}'/> Malay"
                                                @if(config('app.locale') == 'malaya')
                                                    selected
                                                @endif
                                                >{{ URL('lang/malaya') }}</option>
                                                <option data-content="<img src='{{ asset('/web/images/china.gif') }}'/> 简体中文"
                                                @if(config('app.locale') == 'zh_cn')
                                                    selected
                                                @endif
                                                >{{URL('lang/zh_cn') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="register.html" class="btn-link text-white d-block d-lg-none" style="float:right">Register</a>
                            <a href="#" class="btn-link text-white d-block d-lg-none" data-toggle="modal" data-target="#loginModal"
                                style="float:right">Sign In &nbsp</a>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                @if (!Auth::guard('member')->guest())
                $(function () {
                    $.ajax({
                        type:'post',
                        url : "{{route('member.api.wallet_balance')}}",
                        dataType : 'json',
                        success : function (data) {
                            console.log(data);
                            if(data.statusCode == '01'){
                                // alert("Tag balance: " + Number($('.money').text()));
                                // alert("LiveCasino balance: " + Number(data.data));
                                var all = Number($('.money').text()) + Number(data.data);
                                // var all = Number($('.money').text());
                                $('.money').text('');
                                $('.money').text(all.toFixed(2));
                            }
                        }
                    })
                })
                @endif
            </script>
        </header>



        <nav class="yamm site-nav navbar navbar-light">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item i-home @if($web_route == 'web.index') on @endif" style="height: 50px;">
                        <a href="{{ route('web.index') }}" class="nav-link nav-home">
                            <i class="material-icons">home</i>
                            <img src="{{ asset('/web/images/oneone/logo_footer.png') }}" />
                        </a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.liveCasino') on @endif">
                        <a href="{{ route('web.liveCasino') }}" class="nav-link">
                            {{ __('ft.Live_Casino') }}
                        </a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.esports') on @endif">
                        <a href="{{ route('web.esports') }}" class="nav-link">
                            {{ __('ft.Sports') }}
                        </a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.eGame') on @endif">
                        <a href="{{ route('web.eGame') }}" class="nav-link">
                            {{ __('ft.Slot_Game') }}
                        </a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.poker') on @endif">
                        <a href="{{ route('web.poker') }}" class="nav-link" style="color:#fed80b;">
                            {{ __('ft.Chess') }}
                        </a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.lottory') on @endif">
                        <a href="{{ route('web.lottory') }}" class="nav-link">
                            {{ __('ft.Lottery_game') }}
                        </a>
                    </li>                    
                    <li class="nav-item">
                        {{-- <a href="javascript:window.open('/lottery_new','','width=1200,height=571')" class="nav-link"> --}}
                        <a href="javascript:window.open('/lottery_28','','width=1200,height=571')" class="nav-link">
                            {{ __('ft.lottery') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')" class="nav-link">{{ __('ft.Customer_Service') }}</a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.activityList') on @endif">
                        <a href="{{ route('web.activityList') }}" class="nav-link">{{ __('ft.Promotion') }}</a>
                    </li>
                    <li class="nav-item nav-signup">
                        @if (Auth::guard('member')->guest())
                            <a href="{{ route('web.register_one') }}" class="nav-link" style="color:#fed80b;">Sign Up</a>
                        @else
                            <a href="{{ route('member.logout') }}" class="nav-link" style="color:#fed80b;">Sign Out</a>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>



        <div id="mobile-navigation">
            <nav id="my-menu" class="nav">
                <ul class="upper">
                    <li class="mobile-nav-icon icon-home @if($web_route == 'web.index') on @endif"><a href="{{ route('web.index') }}">Home</a></li>
                    <li class="mobile-nav-icon icon-casino @if($web_route == 'web.esports') on @endif"><a href="live-casino.html">Casino</a></li>
                    <li class="mobile-nav-icon icon-sport"><a href="sport-betting.html">Sport</a></li>
                    <li class="mobile-nav-icon icon-slots"><a href="online-slots.html">Slots</a></li>
                    <li class="mobile-nav-icon icon-lottery"><a href="online-4d.html">Lottery</a></li>
                    <li class="mobile-nav-icon icon-download border-bottom"><a href="download.html">Download</a></li>
                    <li class="mobile-nav-icon icon-promotion"><a href="/FileUpload/promos-mobile-C-en-us.html">Promotion</a></li>
                    <li class="mobile-nav-icon icon-bonus"><a href="#" data-toggle="modal" data-target="#loginModal">Bonus
                            Points</a></li>
                    <li class="mobile-nav-icon icon-deposit"><a href="#" data-toggle="modal" data-target="#loginModal">Deposit</a></li>
                    <li class="mobile-nav-icon icon-withdrawal"><a href="#" data-toggle="modal" data-target="#loginModal">Withdrawal</a></li>
                    <li class="mobile-nav-icon icon-transfer"><a href="#" data-toggle="modal" data-target="#loginModal">In-site
                            Transfer</a></li>
                    <li class="mobile-nav-icon icon-message border-bottom"><a href="#" data-toggle="modal" data-target="#loginModal">Message</a></li>
                    <li class="mobile-nav-icon icon-help"><a href="#">Help Center</a></li>
                    <li class="mobile-nav-icon icon-livechat"><a href="javascript:MM_openBrWindow('https://secure.livechatinc.com/licence/2816672/open_chat.cgi?groups=0', '联络我们', 420, 530)">LiveChat</a></li>
                    <li class="mobile-nav-icon icon-feedback"><a href="#" data-toggle="modal" data-target="#complaintsModal"
                            onclick="CleanOpinionServiceModal();">Feedback</a></li>
                    <li class="mobile-nav-icon icon-callback"><a href="#" data-toggle="modal" data-target="#callbackModal">Callback
                            Service</a></li>
                    <li class="mobile-nav-icon icon-profile"><a href="#" data-toggle="modal" data-target="#loginModal">Profile</a></li>
                    <li>
                        <span class="lang-nav"><img src="{{ asset('/web/images/usa.gif') }}" /> English</span>
                        <ul class="Vertical">
                            <li class="active"><a href="index.html"><img src="{{ asset('/web/images/usa.gif') }}" />
                                    English</a></li>
                            <li><a href="zh/index.html"><img src="{{ asset('/web/images/china.gif') }}" /> 简体中文</a></li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>

        <div class="index-banner">
            {{-- Yuyuan Slider --}}
            <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active" style="width:230px;">{{ __('ft.NewYearLuckyDraw') }}</li>
                    <li data-target="#demo" data-slide-to="1">{{ __('ft.4DDeposit200Free20') }}</li>
                    <li data-target="#demo" data-slide-to="2">{{ __('ft.NewMemberBonus') }}</li>
                    <li data-target="#demo" data-slide-to="3">{{ __('ft.918KissDepositBonus') }}</li>
                    <li data-target="#demo" data-slide-to="4">{{ __('ft.WinnerOf2019_10Cars') }}</li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/web/images/oneone/banner/banner1_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.NewYearLuckyDraw') }}">
                        <a href="#" class="btn-playnow @if (Auth::guard('member')->guest()) register_modal_link @endif" style="position:absolute;width:20%;bottom:4.4%;left:38.8%;"><img src="{{ asset('/web/images/oneone/banner/btn_play_'.config('app.locale').'.png') }}" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/web/images/oneone/banner/banner2_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.4DDeposit200Free20') }}">
                        <a href="#" class="btn-playnow @if (Auth::guard('member')->guest()) register_modal_link @endif" style="position:absolute;width:20%;bottom:14.4%;left:34.5%;"><img src="{{ asset('/web/images/oneone/banner/btn_play_'.config('app.locale').'.png') }}" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/web/images/oneone/banner/banner3_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.NewMemberBonus') }}">
                        <a href="#" class="btn-playnow @if (Auth::guard('member')->guest()) register_modal_link @endif" style="position:absolute;width:20%;bottom:12.4%;left:4.8%;"><img src="{{ asset('/web/images/oneone/banner/btn_play_'.config('app.locale').'.png') }}" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/web/images/oneone/banner/banner4_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.918KissDepositBonus') }}">
                        <a href="#" class="btn-playnow @if (Auth::guard('member')->guest()) register_modal_link @endif" style="position:absolute;width:20%;bottom:25%;left:72%;"><img src="{{ asset('/web/images/oneone/banner/btn_play_'.config('app.locale').'.png') }}" alt=""></a>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/web/images/oneone/banner/banner5_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.WinnerOf2019_10Cars') }}">
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="banner-nav-holder" style="height: 50px;"></div>            
        </div>



        <div class="container">
            <div class="news">
                <div class="title">
                    Announcement ：
                </div>
                <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()" onmouseover="this.stop()" class="content">
                    @foreach($_system_notices as $v)
                        <div class="module" style="display: inline;word-break: keep-all;white-space: nowrap;">
                            <span>~{{ $v->title }}~</span>
                            <span>{{ $v->content }}</span>
                        </div>
                    @endforeach
                </marquee>
            </div>
        </div>


        <div id="banner"></div>
<div class="member-container">
    <div class="member-body">
        <div id="layout-top-area">
            <div class="sider-area"><span>{{ __('ft.Customer_Center') }}</span></div>
            <ul class="nav-area">
                <li @if(in_array($web_route, ['member.userCenter', 'member.login_psw'])) class="active" @endif>
                    <a href="{{ route('member.userCenter') }}" data-menu="member"><span>{{ __('ft.Member_Data') }}</span></a>
                </li>
                <li @if(in_array($web_route, ['member.finance_center', 'member.ali_pay', 'member.qq_pay', 'member.bank_pay'])) class="active" @endif>
                    <a href="{{ route('member.finance_center') }}" data-menu="recharge"><span>{{ __('ft.Online_Banking') }}</span></a></li>
                <li @if(in_array($web_route, ['member.member_drawing'])) class="active" @endif>
                    <a href="{{ route('member.member_drawing') }}" data-menu="draw"><span>{{ __('ft.Online_withdrawal') }}</span></a></li>
                <li @if(in_array($web_route, ['member.indoor_transfer'])) class="active" @endif>
                    <a href="{{ route('member.indoor_transfer') }}" data-menu="exchange"><span>{{ __('ft.Interface_balance') }}</span></a></li>
               <!--  <li @if(in_array($web_route, ['member.customer_report']) && request()->get('type') == 3) class="active" @endif>
                    <a href="{{ route('member.customer_report') }}?type=3" data-menu="bet"><span>{{ __('ft.Game_History') }}</span></a></li>
                <li @if(in_array($web_route, ['member.customer_report']) && request()->get('type') != 3) class="active" @endif>
                    <a href="{{ route('member.customer_report') }}" data-menu="money"><span>{{ __('ft.Rebate_History') }}</span></a></li> -->
                <li @if(in_array($web_route, ['member.service_center', 'member.complaint_proposal', 'member.message_list'])) class="active" @endif>
                    <a href="{{ route('member.service_center') }}" data-menu="message"><span>{{ __('ft.Service_Center') }}</span></a></li>
            </ul>
        </div>
        @yield('content')
    </div>
</div>

        
        @include('web.layouts.aside')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <p><img src="{{ asset('web/images/oneone/logo_footer.png') }}" style="margin-top: -10px;" /></p>
                        <p>019-8808462</p>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <span class="h3">Browsers</span>
                        <p>
                            <div style="display: flex;">
                                <img src="{{ asset('web/images/oneone/chrome_icon.png') }}" style="margin-right: 10px;" />
                                <img src="{{ asset('web/images/oneone/opera_icon.png') }}" style="margin-right: 10px;" />
                                <img src="{{ asset('web/images/oneone/firefox_icon.png') }}" />
                            </div>
                        </p>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <span class="h3">User Guide</span>
                        <ul>
                            <li><a href="#" target="_blank">Help Center</a></li>
                            <li><a href="#" target="_blank" rel="nofollow">Deposit Guideline</a></li>
                            <li><a href="#" target="_blank" rel="nofollow">Withdrawal Help</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <span class="h3">Information</span>
                        <ul>
                            <li><a href="#" target="_blank" rel="nofollow">About US</a></li>
                            <li><a href="#" target="_blank" class="termsConditions_modal" rel="nofollow">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <span class="h3">Bank Payments</span>
                        <p>
                            <form action="" method="post">
                                <div class="form-group row mb-2 mb-sm-0 no-gutters">
                                    <div class="col-8 col-md-4 col-lg-8">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" class="form-control" id="membermail" placeholder="Your email address"
                                            onkeydown="clearSubscribeErrorMsg();">
                                    </div>
                                    <div class="col-4 col-md-2 col-lg-4 pl-3">
                                        <button type="button" onclick="SubscribeNewsFeed_StaticPage();" class="btn btn-shadow btn-block btn-primary">SEND</button>
                                    </div>
                                    <span id="subscription_error" class="txt-remindOrange"></span>
                                </div>
                            </form>
                        </p>
                        <p>
                            Leave your details to receive
                        </p>
                        <ul class="bank-list">
                            <li><img src="{{ asset('web/images/oneone/HongLeong_bank.png')}}" alt="Hong Leong"></li>
                            <li><img src="{{ asset('web/images/oneone/CIMB_bank.png')}}" alt="CIMB"></li>
                            <li><img src="{{ asset('web/images/oneone/May_bank.png')}}" alt="Maybank"></li>
                            <li><img src="{{ asset('web/images/oneone/BSN_bank.png')}}" alt="BSN"></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">
                    <div class="row justify-content-between align-items-center flex-column">
                        <div class="col-lg-auto mb-2 mb-lg-0">
                            Copyright © 2019 TAG777. All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <div class="lay-loading">
        <div class="ui-loader">
            <div class="loader">
                <span class="dot dot_1"></span>
                <span class="dot dot_2"></span>
                <span class="dot dot_3"></span>
                <span class="dot dot_4"></span>
            </div>
        </div>
    </div>
    <div id="dailiModal" class="modal modal-login modal-daili">
        <div class="modal-content">
            <form method="POST" action="{{ route('member.post_agent_apply') }}">
                <a href="" class="close bg-icon"></a>
                <div class="modal-login_form">
                    <h2>{{ __('ft.Agent_application') }}</h2>
                    <div class="modal-login_line">
                        <input type="text" placeholder="ID" required name="qq">
                    </div>
                    <div class="modal-login_line">
                        <input type="text" placeholder="{{ __('ft.contact_number') }}" required name="phone">
                    </div>
                    <div class="modal-login_line" style="height: auto;margin-bottom: 15px">
                        <textarea name="about" placeholder="{{ __('ft.Fill_in_the_application') }}"></textarea>
                    </div>
                    <div class="modal-login_line">
                        <button class="modal-login_submit ajax-submit-btn" type="button">&nbsp;OK&nbsp;</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="{{ asset('/web/Scripts3_5/System/Common.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/UserDefine/VUC_MailModel.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/Common.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/SiteFloating.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/VUC_MailModel.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/UserDefine/SiteFloating_StaticPage.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Design/select.min.js') }}"></script>
<script src="{{ asset('/web/js/script.js') }}"></script>


<script src="{{ asset('/web/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('/web/js/yk_modal.js') }}"></script>
<script src="{{ asset('/web/js/index1.js') }}"></script>
<script src="{{ asset('/web/js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script src="{{ asset('/web/layer/layer.js') }}"></script>
<script src="{{ asset('/web/js/ajax-submit-form.js') }}"></script>
<script src="{{ asset('/web/js/jquery.lazyload.min.js') }}"></script>
<script src="{{ asset('/web/js/jquery.fly.min.js') }}"></script>
<script src="{{ asset('/web/js/common.js') }}"></script>
<script src="{{ asset('/web/js/rendezvous.js') }}"></script><!--日历-->
@yield('after.js')

<script>
    (function ($) {
        $(function () {

            //公告
            $('#mar0').on('click', function () {
                var notice_index = layer.open({
                    type: 1,
                    title: false,
                    closeBtn: 0,
                    area: ['680px'],
                    skin: 'layui-layer-nobg', //没有背景色
                    shadeClose: true,
                    content: $('.notice_layer')
                });

                $('.notice_layer').on('click', '.close', function () {
                    layer.close(notice_index)
                })
            })

        })
    })(jQuery)

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>

$('.banner-slider').not('.slick-initialized').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    pauseOnFocus: false,
    asNavFor: '.banner-nav',
    autoplay: false,
    autoplaySpeed: 7000,
    draggable: false,

    responsive: [{
        breakpoint: 991,
        settings: {
            dots: true,
            fade: false,
        }
    },],
});
$('.banner-nav').not('.slick-initialized').slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    asNavFor: '.banner-slider',
    dots: false,
    focusOnSelect: true,
    swipe: false,
    draggable: false,
});
</script>

<script>
    var m = "{{ $_member }}";
    var u = "{{ route('web.login') }}";
    $(function(){
        $('.daili_apply').on('click',function(){
            
            if (!m)
            {
                location.href=u
            }else{
                $('#dailiModal').modal();
            }
        })
    });
</script>



</body>

</html>