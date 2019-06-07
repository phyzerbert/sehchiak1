<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $_system_config->site_title or 'motoo' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OneOne is the best Online Casino Malaysia, we provide live casino, sports betting, slots game, and online 4D lottery. Enjoy best online gaming in Malaysia.">
    <link rel="alternate" href="http://www.tag777.com/" hreflang="en" />
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $_system_config->keyword }}">
    <script type="text/javascript">
        var lbl_Ok = "{{ __('words.Ok') }}".trim();
        var lbl_Confirm = '{{ __("words.Confirm") }}';

        var tokenSaveURL = '{{ route('web.tokenSave')}}';
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
    <link rel="stylesheet" href="{{ asset('/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/index1.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/css/yk_modal.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/fonts/iconfont.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('/web/css/vendor.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('/web/css/member.css') }}">

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

    <link rel="stylesheet" href="{{ asset('/web/css/oneone/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/7.0.6/jquery.mmenu.all.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('/web/css/oneone/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/web/css/banner-slider.css') }}" />

    <!--  notification -->

    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-database.js"></script>

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
                                    alt="Tag777"></a>
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
                                                    <input class="form-control form-control-sm" type="text" placeholder="{{ __('ft.username') }}"
                                                        autocomplete="on" tabindex="1" maxlength="12" name="name" id="uname"
                                                        type="text">
                                                </div>
                                                <div class="form-group mr-3">
                                                    <label for="password1" class="sr-only">Password</label>
                                                    <div class="password-holder">
                                                        <input class="form-control form-control-sm" type="password" id="pwd" maxlength="12"
                                                            placeholder="{{ __('ft.password') }}" tabindex="2" name="password">
                                                        <button type="button" data-toggle="modal" data-target="#fpModal"
                                                            class="btn btn-light forgot-trigger">Forgot?</button>
                                                    </div>
                                                </div>
                                                <div class="form-group mr-3" id="TopLoginValidation">
                                                    <label for="topbar-verify" class="sr-only">Validation Code</label>
                                                    <div class="verify-holder">
                                                        <input class="form-control form-control-sm" placeholder="{{ __('ft.Captcha') }}"
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
                                                <button value="{{ __('ft.Login_Now') }}" type="button" class="btn btn-shadow btn-primary ajax-submit-btn btn-sm"
                                                    id="btnTopLogin">Sign In</button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="loginUser">
                                            {{ $_member->name }},&nbsp;&nbsp;{{ __('ft.Balance') }} :&nbsp;&nbsp;<span class="yellowCr money your_balance" style="color:red;">{{ $_member->money }}</span><br/>                                            
                                            <a href="{{ route('member.userCenter') }}">{{ __('ft.Customer_Center') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.finance_center') }}" class="onlinebank">{{ __('ft.Online_Banking') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.member_drawing') }}">{{ __('ft.Balance') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.indoor_transfer') }}">{{ __('ft.Game_Balance') }}</a><br/>
                                            <a href="{{ route('member.customer_report') }}">{{ __('ft.Transaction_History') }}</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.message_list') }}">{{ __('ft.Unread_Message') }}(<span class="redCr">{{ $_not_read_message_num }}</span>)</a>&nbsp;|&nbsp;
                                            <a href="{{ route('member.logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('ft.Log_out') }}</a>
                                            <form id="logout-form" action="{{ route('member.logout') }}" method="POST" style="display: none;">
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
                    <li class="nav-item i-home" style="height: 50px;background-color:#280200;">
                        <a href="{{ route('web.index') }}" class="nav-link nav-home">
                            <i class="fas fa-home"></i>
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
                        <a href="#" class="nav-link" @if($_member) onclick="javascript:window.open('/lottery_28','','width=1200,height=571')"  @else onclick="return layer.msg('请先登录!',{icon:6})" @endif>
                            {{ __('ft.lottery') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="javascript:window.open('{{ $_system_config->service_link }}','','width=1024,height=768')">{{ __('ft.Customer_Service') }}</a>
                    </li>
                    <li class="nav-item @if($web_route == 'web.activityList') on @endif">
                        <a href="{{ route('web.activityList') }}" class="nav-link">{{ __('ft.Promotion') }}</a>
                    </li>
                    <li class="nav-item nav-signup">
                        <!-- <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div> -->
                        @if (Auth::guard('member')->guest())
                            {{-- <a href="{{ route('web.register_one') }}" class="nav-link" style="color:#fed80b;">Sign Up</a> --}}
                            <a href="#" class="nav-link register_modal_link" style="color:#fed80b;">Sign Up</a>
                        @else
                            <a href="{{ route('member.logout') }}" class="nav-link" style="color:#fed80b;">Sign Out</a>
                            {{-- <a  class="nav-link" href="{{ route('logout') }}" style="color:#fed80b;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form> --}}
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

        <div class="index-banner1">
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



        <div class="container" style="margin-top:10px">
            <div class="news">
                <div class="title">
                    {{__('ft.Announcement')}} ：
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

        @yield('content')
        
        @include('web.layouts.aside')

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <p><img src="{{ asset('web/images/oneone/logo_footer.png') }}" style="margin-top: -37px;" /></p>
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
                            <li><a href="javacript:;" class="normalQues_modal">Help Center</a></li>
                            <li><a href="javacript:;" class="cunkuanHelp_modal" rel="nofollow">Deposit Guideline</a></li>
                            <li><a href="javacript:;" class="qukuanHelp_modal" rel="nofollow">Withdrawal Help</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <span class="h3">Information</span>
                        <ul>
                            <li><a href="javacript:;" class="aboutUs_modal" rel="nofollow">About US</a></li>
                            <li><a href="javacript:;" class="termsConditions_modal" rel="nofollow">Terms & Conditions</a></li>
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
                                        <!-- <button type="button" onclick="SubscribeNewsFeed_StaticPage();" class="btn btn-shadow btn-block btn-primary">SEND</button> -->
                                        <button type="button" class="btn btn-shadow btn-block btn-primary">SEND</button>
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
    @php
        $content_aboutus = $about1->content_en;
        if(config('app.locale') == 'zh_cn'){
            $content_aboutus = $about1->content_zh_cn;
        }else if(config('app.locale') == 'malaya'){
            $content_aboutus = $about1->content_malaya;
        }
    @endphp
    <script>
    (function($){
        $(function(){

            $('.aboutUs_modal').on('click',function(){
                $('#aboutUs').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'关于我们',
                    content: `{!! $content_aboutus !!}`
                });
            });
            $('.cunkuanHelp_modal').on('click',function(){
                $('#cunkuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'存款帮助',
                    content:'<p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; color: rgb(0, 0, 0);"></span></p><h1 style="box-sizing: border-box; margin: 0.67em 0px 0.67em 5px; color: rgb(40, 170, 225); font-weight: 400; font-family: Roboto, STHeiti, &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体, &quot;Microsoft JhengHei&quot;, 微軟正黑體, arial, helvetica, sans-serif; letter-spacing: 0.48px; white-space: normal;">Deposit Guideline</h1><ul class="article-list list-paddingleft-2" style="box-sizing: border-box; padding: 0px; font-size: 13px; color: rgb(85, 85, 85); font-family: Roboto, STHeiti, &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体, &quot;Microsoft JhengHei&quot;, 微軟正黑體, arial, helvetica, sans-serif; letter-spacing: 0.48px; white-space: normal;"><li><p>By using our safe and secure deposit system, funds can be quickly and easily credited to your dedicated MAYBET account.</p></li><ul style="list-style-type: square;" class=" list-paddingleft-2"><li><p>All funds are immediately credited into your dedicated MAYBET accounts with no additional charges (free of charge).</p></li><li><p>Registered customers can use any of our available domestic banks to perform deposits.</p></li></ul><li><p>Following are the stand in banks that support the deposit services</p></li><ol style="box-sizing: border-box; padding-left: 20px; list-style-position: outside;" class=" list-paddingleft-2"><li><p>Maybank</p></li><li><p>CIMB Bank</p></li><li><p>Public Bank</p></li><li><p>Hong Leong Bank</p></li><li><p>myBSN</p></li><li><p>RHB Banking Group</p></li><li><p>Ambank</p></li></ol><li><p>Deposit requirements</p></li><ul style="list-style-type: square;" class=" list-paddingleft-2"><li><p>Turn off the block pop-up function of your browser.</p></li><li><p>The minimum deposit amount is RM 50.</p></li><li><p>The bank account holder name and the registered MAYBET account name must be identical to ensure successful deposit of funds.</p></li><li><p>If you do not have access to the above mentioned payment options, please contact our Customer Service Executives to obtain other deposit methods.</p></li></ul><li><p>Steps for [Deposit]</p><p style="box-sizing: border-box;"><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span>For any further enquiries, Please Contact our Customer Service Executive via &#39;24 Hours Live Chat&#39;</p></li><ol style="box-sizing: border-box; padding-left: 20px; list-style-position: outside;" class=" list-paddingleft-2"><li><p>Login to MAYBET website and click on [Deposit]</p></li><li><p>In the ‘Deposit Credit’ page, click on [Make Deposit]</p></li><li><p>Select a preferred [MAYBET Bank Account] for deposit transfer</p></li><li><p>Login to your selected bank’s online banking website to perform the [Fund Transfer/Interbank Fun Transfer] fund transfer, or perform a cash deposit via ATM/Cash Deposit</p></li><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span><li><p>Note: Remember to take down the ‘Reference Code’ upon the completion of fund transfer/deposit transfer</p></li><li><p>Return to iBET website and click on [Next]</p></li><li><p>Fill in all the necessary details required (e.g.MAYBET Bank Account, Reference Code, Amount transferred, etc.), and click on [Submit]</p></li><li><p>Check the deposit transfer status under ‘Transaction Records’ in the ‘History’ page. The status will change from ‘Deposit Processing’ to ‘Transferred Successful’ after the moderator successful validate the deposit details provided<br style="box-sizing: border-box;"/><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span>Note: The confirmation of funds transfer will be completed within 3 – 5 minutes</p></li><li><p>Once the ‘Transaction Records’ is successfully validated, refresh the ‘In-site Credit Transfer’ page to look for the updated ‘Total Credit Amount’ in your account</p></li></ol></ul><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; color: rgb(0, 0, 0);"></span><br/></p><p><br/></p>'
                });
            });
            $('.qukuanHelp_modal').on('click',function(){
                $('#qukuanHelp').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'取款帮助',
                    content:'<p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; color: rgb(0, 0, 0);"><strong style="box-sizing: border-box;">取款方法</strong></span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; color: rgb(0, 0, 0);"></span></p><h1 style="box-sizing: border-box; margin: 0.67em 0px 0.67em 5px; color: rgb(40, 170, 225); font-weight: 400; font-family: Roboto, STHeiti, &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体, &quot;Microsoft JhengHei&quot;, 微軟正黑體, arial, helvetica, sans-serif; letter-spacing: 0.48px; white-space: normal;">Withdrawal Help</h1><ul class="article-list list-paddingleft-2" style="box-sizing: border-box; padding: 0px; font-size: 13px; color: rgb(85, 85, 85); font-family: Roboto, STHeiti, &quot;Microsoft YaHei&quot;, 微软雅黑, SimSun, 宋体, &quot;Microsoft JhengHei&quot;, 微軟正黑體, arial, helvetica, sans-serif; letter-spacing: 0.48px; white-space: normal;"><li><p>Withdrawal</p></li><ul style="list-style-type: square;" class=" list-paddingleft-2"><li><p>The bank account holder name and the registered MAYBET account name must be identical to ensure successful withdrawal of funds.</p></li><li><p>MAYBET reserves the rights to request for identity authentication documents, such as IC or passport.</p></li></ul><li><p>Withdrawals may be delayed under the following circumstances:</p></li><ul style="list-style-type: square;" class=" list-paddingleft-2"><li><p>Submission of incorrect account information.</p></li><li><p>The online banking system is under maintenance.</p></li></ul><li><p>Withdrawal Remarks:</p><p style="box-sizing: border-box;">Any incorrect bank details will result in delay or failure of the withdrawal.<br style="box-sizing: border-box;"/><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span>Note: Please ensure that all bank details provided are accurate.</p></li><li><p>Please avoid the following upon withdrawal submission:</p><p><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span>Note: Remember to turn off your browser’s block pop-up function</p></li><ul style="list-style-type: square;" class=" list-paddingleft-2"><li><p>Your registered bank account holder name not identical with your registered MAYBET account name.</p></li><li><p>Submission of invalid bank account number.</p></li><li><p>Submission of incorrect withdrawal amount.</p></li></ul><li><p>Steps for withdrawal:</p><p style="box-sizing: border-box;"><span class="star" style="box-sizing: border-box; color: red; padding: 0px 3px;">*</span>For any further enquiries, Please Contact our Customer Service Executive via &#39;24 Hours Live Chat&#39;</p></li><ol type="a" style="box-sizing: border-box; padding-left: 20px; list-style-position: outside;" class=" list-paddingleft-2"><li><p>Login to MAYBET website and click on [Profile].</p></li><li><p>Under ‘MY Profile’, click on [ Withdrawal].</p></li><li><p>Fill in your withdrawal amount and check that the payer’s account details are correct, then click on [Submit].</p></li><li><p>Check the withdrawal status under ‘Transaction Records’ in ‘History’ page. The status will change from ‘Withdrawal Processing’ to ‘Successful Withdrawal‘ after our Customer Service Executive successfully validates the withdrawal details provided.</p></li></ol></ul><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="display:none;" data-background="background-repeat:no-repeat; background-position:center center; background-color:#EEECE1;"><br/></p>'
                });
            });
            $('.normalQues_modal').on('click',function(){                
                $('#normalQues').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'常见问题',
                    content:'<p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; color: rgb(149, 55, 52);"><strong style="box-sizing: border-box;"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; font-size: 16px;">一般问题</span></strong></span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);">Q1: 如何加入<span style="color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);">Tag777.com</span>？</span><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;"><span style="box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);">&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A1: 您只要点<span style="color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);">Tag777.com</span>主页，选择“立即注册”，进入注册页面，按照页面表格，如实填写个人信息后，核对信息后，点击“确定”即可新增一个属于您自己的账号，成为我们公司的会员；您亦可立即存款并正式开始下注，享有各项丰厚的优惠，欢迎您的加入喔！&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q2: 我可以直接在网络上存款吗？</span><span style="box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);">&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A2: 可以，<span style="color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);">Tag777.com&nbsp;</span>提供多种线上存款选择，详情请参照 &quot;存款帮助 &quot;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q3: 我在那里可以找到游戏的规则？</span><span style="box-sizing: border-box; font-family: 微软雅黑; color: rgb(255, 0, 0);">&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A3: 在登入后，您可以在游戏的最外层看到&quot;规则说明&quot;选项，清楚告诉您游戏的玩法、规则及派彩方式。 在游戏视窗中,也有&quot;规则&quot;选项，让您在享受游戏乐趣的同时，可以弹跳视窗随时提醒您游戏规则。&nbsp;</span></span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);">Q4：你们的游戏会用多少副牌？</span><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;;"><span style="box-sizing: border-box; color: rgb(255, 0, 0);"></span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A4: 在百家乐我们会用8副牌，其他游戏则会根据其性质有所调整。&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q5: 你们何时会洗牌?</span><span style="box-sizing: border-box; color: rgb(255, 0, 0);">&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A5: 所有纸牌游戏，当红的洗牌记号出现或游戏因线路问题中断时便会进行重新洗牌。</span>&nbsp;<br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q6: 我的注码的限制是多少？</span><span style="box-sizing: border-box; color: rgb(255, 0, 0);">&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A6: 您的注码会根据您的存款有所不同，运动博弈单场单注最低是RM10至RM1000~30000，娱乐场单场单注最低是RM10至RM30000元。</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q7: 如果忘记密码怎么办？&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A7: 您只要点<span style="color: rgb(38, 38, 38); font-family: 宋体; font-size: 14px; background-color: rgb(255, 255, 255);">Tag777.com</span>主页，选择“忘记密码”，填写您的会员账号和取款密码，核对正确后,系统会自动发送邮件至会员资料内所设置之E-MAIL信箱！当您无法接收邮件时，请将您的姓名、游戏账号、经常登录地区、发送到公司的会员部邮件：123，我们工作人员将在24小时内处理好您的问题，并通过邮件回复通知您。谢谢！&nbsp;</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(149, 55, 52);">Q8: 当您注册时出现，姓名已注册。</span><br style="box-sizing: border-box; font-family: 微软雅黑;"/><span style="box-sizing: border-box; color: rgb(0, 0, 0);">A8: 您可通过24小时在线客服人员协助处理。</span></span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><br style="box-sizing: border-box;"/></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><strong style="box-sizing: border-box;"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">技术常见问题</span></strong></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(149, 55, 52);">Q: 最低的硬体系统要求是什么?</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">1. 任何可以接上互联网的电脑。</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">2. SVGA显示卡–最少要1204x768像素256色彩以上。</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">3. 区域宽频。</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">4. Windows , Mac OS X , Linux作业系统。</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">5. Internet Explorer浏览器v6.0 或以上 (版本7.0 或以上更好)，Mozilla Firefox (浏览器v3.0 或以上)，</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">Opera (浏览器v8.0 或以上)，Chrome(浏览器v6.0 或以上)，Safari (浏览器v4.0 或以上)</span></p><p style="box-sizing: border-box; font-family: 微软雅黑; margin-top: 0px; margin-bottom: 10px; color: rgb(236, 151, 31); font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="box-sizing: border-box; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);">6. 要浏览线上娱乐场，你可以在 Macromedia网站下载Macromedia Flash Player浏览器附加程式(8.0或以上版本)。</span></p><p><br/></p>'
                });
            });

            $('.termsConditions_modal').on('click',function(){
                $('#termsConditions').yk_modal({
                    animate:'slide',
                    width:'800px',
                    height:'500px',
                    title:'关于我们',
                    content: `{!! $about1->content_en !!}`
                });
            });
        });
    })(jQuery);
    </script>

<div id="aboutUs" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">determine</a>
        </div>
    </div>
</div>
<div id="cunkuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">determine</a>
        </div>
    </div>
</div>
<div id="qukuanHelp" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">determine</a>
        </div>
    </div>
</div>
<div id="normalQues" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">determine</a>
        </div>
    </div>
</div>
<div id="termsConditions" class="yk_modal">
    <div class="yk_modal-container">
        <a data-close="close" href="javascript:;" class="yk_modal-close"></a>
        <div class="yk_modal-hd"></div>
        <div class="yk_modal-content"></div>
        <div class="yk_modal-ft">
            <a href="javascript:;" class="yk_btn-sure">Determine</a>
        </div>
    </div>
</div>
<div class="yk_backdrop"></div>


<div class="notice_layer">
    <h3>公告详情 <span class="close"></span></h3>
    <div class="notice_con">
        @foreach($_system_notices as $v)
            <div class="module">
                <h4>{{ $v->title }}</h4>
                <p>✿{{ $v->content }}</p>
            </div>
        @endforeach
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

<div id="registerModal" class="modal modal-login modal-daili">
    <div class="modal-content" style="width:600px;height:750px !important;">
        <form method="POST" action="{{ route('web.post_register_one') }}">
            <a href="" class="close bg-icon"></a>
            <div class="container modal-login_form">
                <h2>{{ __('ft.Account_Information') }}</h2>  
                <p>{{ __('ft.Note_If_the_customer_is_found_to_have_multiple_accounts') }}</p>                       
                {{-- <input type="hidden" name="i_code" value="{{ $i_code }}"> --}}
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Reference_ID') }}</label>
                    <div class="col-md-8"><input class="form-control" name="t_name" value=""></div>                    
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Login_ID') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input class="form-control" name="name" value="" maxlength="8">
                        <span class="tips">{{ __('ft.Must_be_6to12_characters_only_letters_numbers') }}</span>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Login_Password') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" name="password" placeholder="" maxlength="12">
                        <span class="tips">{{ __('ft.Must_be-6to12_characters') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Confirm_Password') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" name="password_confirmation" maxlength="12">
                        <span class="tips">{{ __('ft.Must_match_the_login_password') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Name') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="real_name">
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.phone_number') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="phone">
                    </div>                    
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.birthday') }}</label>
                    <div class="col-md-8">
                        <input type="hidden" id="birthday" name="birthday" />
                        <div class="row">
                            <div class="col-sm-4">
                                <select id="birth_day" class="col-xs-4 form-control birthday" name="day" required placeholder="Day">
                                    <option value="">Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select id="birth_year" class="col-xs-4 form-control birthday" name="year" required placeholder="Year">
                                    <option value="">Year</option>
                                    @for ($i = 1960; $i <= 2030; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-sm-4">                                
                                <select id="birth_month" class="col-xs-4 form-control birthday" name="month" required placeholder="Month">
                                    <option value="">Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                    @endfor
                                </select> 
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Withdraw_Pin') }}<span class="themeCr">*</span></label>
                    <div class="col-md-8">
                        <input type="password" class="form-control" name="qk_pwd" maxlength="6">
                        <span class="tips">{{ __('ft.Required_6_Digits') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right">{{ __('ft.Verification_code') }}<span class="themeCr">*</span></label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="captcha" maxlength="4">
                    </div>
                    <div class="yzm-img float-right"><a onclick="javascript:re_captcha_re();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff67"></a></div>
                    
                    <script>
                        function re_captcha_re() {
                            $url = "{{ URL('kit/captcha') }}";
                            $url = $url + "/" + Math.random();
                            document.getElementById('c2c98f0de5a04167a9e427d883690ff67').src=$url;
                        }
                    </script>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right"></label>
                    <div class="col-md-8">
                        <input type="checkbox" class="checkbox" checked="checked" name="check1" value="1">
                        {{ __('ft.In_the_time_as_the_application_is_submitted') }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right"></label>
                    <div class="col-md-8">
                        <input type="checkbox" class="checkbox" checked="checked" name="check2" value="2">
                        {{ __('ft.I_also_accept_all_rules_and_regulations') }}
                    </div>
                </div>
                <div class="row mt-2">
                    <label class="col-md-4 text-right"></label>
                    <div class="col-md-8">
                        <a href="javascript:;" class="ajax-submit-without-confirm-btn account_save">{{ __('ft.Confirm') }}</a>
                        <a href="javascript:void(0)" class="account_save">{{ __('ft.fill_in_again') }}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- <script src="{{ asset('js/notification.js')}}"></script> --}}
<script src="{{ asset('js/notification_web.js')}}"></script>
<script src="{{ asset('/web/Scripts3_5/System/Common.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/UserDefine/VUC_MailModel.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/Common.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/SiteFloating.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Resource/en-us/VUC_MailModel.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/UserDefine/SiteFloating_StaticPage.js') }}"></script>
<script src="{{ asset('/web/Scripts3_5/Design/select.min.js') }}"></script>
<script src="{{ asset('/web/js/script.js') }}"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
        $(".birthday").change(function(){
            let day = $("#birth_day").val();
            let month = $("#birth_month").val();
            let year = $("#birth_year").val();
            let birthday = year+"-" + month + "-" + day;
            $("#birthday").val(birthday);
        });
        $('.daili_apply').on('click',function(){
            if (!m)
            {
                location.href=u
            }else{
                $('#dailiModal').modal();
            }
        })
        $(".register_modal_link").click(function(){
            $("#registerModal").modal();
        })
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5cd2da822846b90c57ad8186/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>