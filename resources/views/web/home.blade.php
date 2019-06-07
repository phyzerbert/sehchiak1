@extends('web.layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="centerhomebg">
                <div class="stepcenter">
                    <img src="{{ asset('web/images/oneone/centerhomebg/steppng.png')}}" alt="online website casino play">
                </div>
                <div class="centerredupdate">
                    <ul>
                        <li><a href="{{ route('web.liveCasino') }}"><img src="{{ asset('web/images/oneone/centerhomebg/casino-online.jpg')}}" alt="play live casino"></a></li>
                        <li><a href="{{ route('web.lottory') }}"><img src="{{ asset('web/images/oneone/centerhomebg/casino-malaysia.jpg')}}" alt="best slot games online"></a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ route('web.esports') }}"><img src="{{ asset('web/images/oneone/centerhomebg/online-betting.jpg')}}" alt="sports book malaysia &amp; singapore"></a></li>
                        <li><a href="{{ route('web.eGame') }}"><img src="{{ asset('web/images/oneone/centerhomebg/online-gambling.jpg')}}" alt="play hunt fish"></a></li>
                    </ul>		
                </div>
	            <div id="jp">
                    <img src="{{ asset('web/images/oneone/centerhomebg/jackpotbgupdate.png')}}" alt="best online-casino">
                <div id="jackpot">
                    <div id="subcontent">
                        <script type="text/javascript">// <![CDATA[
                            $(document).ready(function() {

                                            var min = 1235475.00 ;
                                            var max = 2035698.00 ;
                                            var random = Math.floor(Math.random() * (max - min + 1)) + min;
                                            var increment = random/2.3;
                                            var tmpStart = random;
                                            var tmpEnd = random + 10000;
                            $('#foo').counter({start: tmpStart,	end: tmpEnd});
                            });
                            
                            ;(function($) {        
                                    $.fn.counter = function(options) {

                                            var defaults = {
                                                    start: 10000,
                                                    end: 20000,
                                                    time: 8,
                                                    step: 100,
                                                    callback: function() { 
                                                        var start2 = options.end;
                                                        var end2 = options.end + options.end;
                                                        $('#foo').counter({start: start2,	end: end2,time: options.time,step: options.step});
                                                    }
                                            }
                                            var options   = $.extend(defaults, options);
                                            
                                            var counterFunc = function(el, increment, end, step) {
                                                    var min = increment;
                                                    var max = min+1;
                                                    var increment = Math.random() * (max - min + 1) + min / 2.1;
                                                    var value = parseInt(el.html(), 10) + increment;
                                                    if(value >= end) {
                                                            //el.html(Math.round(end));
                                                            el.html(parseFloat(end).toFixed(2));
                                                            options.callback();
                                                    } else {
                                                            //el.html(Math.round(value));
                                                            el.html(parseFloat(value).toFixed(2));
                                                            setTimeout(counterFunc, step, el, increment, end, step);
                                                    }
                                            }
                                            
                                            $(this).html(Math.round(options.start));
                                            //var increment = (options.end - options.start) / ((1000 / options.step) * options.time);
                                            
                                            var min = 321;
                                            var max = 999;
                                            var random = Math.floor(Math.random() * (max - min + 1)) + min;
                                            var increment = random/2.3;
                                            
                                            (function(e, i, o, s) {
                                                    setTimeout(counterFunc, s, e, i, o, s);
                                            })($(this), increment, options.end, options.step);
                                    }
                            })(jQuery);
                        </script>
                    </div>
                    <div class="count">$<span id="foo">1470164.08</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row role3">
        <div class="col-md-4">
            <div class="box">
                <div class="role-card">
                    <div class="card-title">Contact</div>
                    <div class="card-body content-3role">
                        <div class="sub-title">we chat</div>
                        <div class="content-black">0198808462</div>
                        <div class="spacer borderbottom"></div>
                        <div class="sub-title">e-mail</div>
                        <div class="content-black">Please contact wechat/whatsap.</div>
                        <div class="spacer borderbottom"></div>
                        <div class="sub-title">whatsapp</div>
                        <div class="content-black">
                        0198808462
                        </div>
                        <div class="spacer borderbottom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="role-card">
                    <div class="card-title">Service</div>
                    <div class="card-body content-3role">
                        <div class="serviceagens">
                            <dl>
                                <dt class="sub-title">DEPOSIT</dt>
                                <dd>Average Time</dd>
                            </dl>
                            <div class="depositime">
                                <div class="run_number">
                                    <span class="zero" id="deposittn">numberLeft</span>
                                    <span class="three" id="depositdg">numberRight</span>
                                </div>
                                <p>mins</p>
                            </div>
                            <div class="progressbar ui-progressbar ui-widget ui-widget-content ui-corner-all" id="progressbar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40">
                                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="display: block; width: 30%;">
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <div class="serviceagens">
                            <dl>
                                <dt class="sub-title">WITHDRAWAL</dt>
                                <dd>Average Time</dd>
                            </dl>
                            <div class="depositime">
                                <div class="run_number">
                                    <span class="zero" id="deposittn">numberLift</span>
                                    <span class="eight" id="depositdg">numberRight</span>
                                </div>
                                <p>mins</p>
                            </div>
                            <div class="progressbar ui-progressbar ui-widget ui-widget-content ui-corner-all" id="progressbar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40">
                                <div class="ui-progressbar-value ui-widget-header ui-corner-left" style="display: block; width: 80%;">
                                </div>
                            </div>
                        </div>
                        <div class="spacer"></div>
                        <div class="sub-title">ONLINE USER</div>
                        <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/useronline1.png" alt="online users casino" style="float:left;">
                        <div style="float:right;">
                            <div class="sub-title"><b><span id="hitcounter">9,750</span></b></div>
                            <p>Person / Per Hour</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="role-card">
                    <div class="card-title">Bank</div>
                    <div class="card-body content-3role">
                        <p>
                            <span class="sub-title">Deposit</span><br>
                            <span class="content-black">
                                Cdm, Online Transfer, Meps Transfer<br>
                                <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking11.png" alt="casino find online">min:30
                                <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking22.png" alt="find best casino">max:50k
                                <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking33.png" alt="gambling online">5mins
                            </span>
                        </p><br>
                        <p>
                            <span class="sub-title">Withdrawal</span><br>
                            <span class="content-black">
                            Online Transfer<br>
                            <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking11.png" alt="online gambling malaysia">min:50
                            <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking22.png" alt="online gambling singapore">max:20k
                            <img src="https://d1162hg18jp9kn.cloudfront.net/firstwinn/banking33.png" alt="best online betting website">15mins
                        </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row mb-3 promo-list center-slide">
        <div class="col-lg-4">
            <div class="h5">{{ __('ft.Lottery_game') }} </div>
            <a>
                <button class="btn btn-primary upper new-member" onclick="window.location = '{{ route('web.lottory') }}'">{{__('ft.Join_Now')}}</button>
                <img src="{{ asset('web/images/oneone/center_slide_0.jpg')}}" alt="New member only no deposit required FREE RM18">
            </a>
        </div>
        <div class="col-lg-4">
            <div class="h5">{{ __('ft.Live_Casino') }} </div>
            <a class="ad-promos-en">
                <button class="btn btn-primary upper new-member" onclick="window.location = '{{ route('web.liveCasino') }}'">{{__('ft.Join_Now')}}</button>
                <img src="{{ asset('web/images/oneone/center_slide_1.jpg')}}" alt="New member only no deposit required FREE RM18">
            </a>
        </div>
        <div class=" col-lg-4">
            <div class="h5">{{ __('ft.SportBook') }} </div>
            <a>
                <button class="btn btn-primary upper new-member" onclick="window.location = '{{ route('web.esports') }}'">{{__('ft.Join_Now')}}</button>
                <img src="{{ asset('web/images/oneone/center_slide_2.jpg')}}" alt="New member only no deposit required FREE RM18">
            </a>
        </div>
    </div> -->
    <div class="featured-game mb-3">
        <span class="h2 thin mb-3">{{__('ft.GamesWeLove')}}</span>
        <div class="d-block">
            <div class="featured-slider">
                <div class="">
                    <div class="featured-box">
                        <div class="tag">
                            <img src="{{ asset('web/images/oneone/black_new.png') }}" />
                        </div>
                        <div class="featured-content">
                            <div class="game-logo">
                                <img src="{{ asset('web/images/oneone/918kiss.png') }}" alt="918Kiss" />
                            </div>
                            <div class="cta-btn">
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.poker') }}'">{{__('ft.Play_Now')}}</button>
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.activityList') }}'">{{__('ft.Promotion')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="featured-box">
                        <div class="tag">
                            <img src="{{ asset('web/images/oneone/black_new.png') }}" />
                        </div>
                        <div class="featured-content">
                            <div class="game-logo">
                                <img src="{{ asset('web/images/oneone/asia_gaming.png') }}" alt="Playtech" />
                            </div>
                            <div class="cta-btn">
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.liveCasino') }}'">{{__('ft.Play_Now')}}</button>
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.activityList') }}'">{{__('ft.Promotion')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="featured-box">
                        <div class="tag">
                            <img src="{{ asset('web/images/oneone/black_new.png') }}" />
                        </div>
                        <div class="featured-content">
                            <div class="game-logo">
                                <img src="{{ asset('web/images/oneone/mega888.png') }}" alt="Asia Gaming" />
                            </div>
                            <div class="cta-btn">
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.poker') }}'">{{__('ft.Play_Now')}}</button>
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.activityList') }}'">{{__('ft.Promotion')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="featured-box">
                        <div class="tag">
                            <img src="{{ asset('web/images/oneone/black_new.png') }}" />
                        </div>
                        <div class="featured-content">
                            <div class="game-logo">
                                <img src="{{ asset('web/images/oneone/Rollex.png') }}" alt="" />
                            </div>
                            <div class="cta-btn">
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.poker') }}'">{{__('ft.Play_Now')}}</button>
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.activityList') }}'">{{__('ft.Promotion')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="featured-box">
                        <div class="tag">
                            <img src="{{ asset('web/images/oneone/black_new.png') }}" />
                        </div>
                        <div class="featured-content">
                            <div class="game-logo">
                                <img src="{{ asset('web/images/oneone/e-sports.png') }}" alt="e-sports" />
                            </div>
                            <div class="cta-btn">
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.lottory') }}'">{{__('ft.Play_Now')}}</button>
                                <button type="button" class="btn btn-primary btn-block btn-shadow"  onclick="window.location = '{{ route('web.activityList') }}'">{{__('ft.Promotion')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="guide-blog d-none d-lg-block mb-5">
        <span class="h2 text-highlight thin mb-3">{{__('ft.OneoneGaming')}}</span>
        <div class="row">
            <div class="col-12 col-lg-6">
                <img src="{{ asset('web/images/oneone/oneone_gaming_1.jpg') }}" />
            </div>
            <div class="col-12 col-lg-6" style="display: flex; flex-direction: column;">
                <img src="{{ asset('web/images/oneone/oneone_gaming_2.jpg') }}" />
                <div style="flex: auto;">&nbsp;</div>
                <img src="{{ asset('web/images/oneone/oneone_gaming_3.jpg') }}" />
            </div>
        </div>
    </div> -->
</div>

<div class="container">
    <div class="accordion" id="home-accordion">
        <div class="card">
            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="false" aria-controls="collapseOne">
                <button class="btn btn-link p-0 d-block" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                    <span class="h5">{{__('ft.OurPartners')}}
                    </span>
                    <i class="fas fa-plus"></i>
                </button>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="{{ route('web.poker') }}" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/918kiss.png') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="{{ route('web.poker') }}" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/asia_gaming.png') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="{{ route('web.poker') }}" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/BFAT.png') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="http://www.playtech.com/" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/MEGA888.png') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="{{ route('web.poker') }}" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/Rollex.png') }}" /></a>
                        </div>
                        <div class="col-sm-4 col-md-2 partner-logo">
                            <a href="{{ route('web.poker') }}" rel="nofollow" target="_blank">
                                <img src="{{ asset('web/images/oneone/ourpartners/SA.png') }}" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
                <h1>The leading online gambling website in Malaysia</h1>
                <i class="fas fa-plus"></i>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p>{{__('ft.leadingText_1')}}</p>
                    <p>{{__('ft.leadingText_2')}}</p>
                    <!-- <div class="row mt-4">
                        <div class="col-12 col-lg-3">
                            <div class="about-card">
                                <h2><a href="https://t.co/sXB60thgcC#Live-Casino">{{__('ft.4Rect_label1')}}</a></h2>
                                <p>{{__('ft.4Rect_text1')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="about-card">
                                <h2><a href="https://t.co/IL5XjVDCKr#Sports-Betting">{{__('ft.4Rect_label2')}}</a></h2>
                                <p>{{__('ft.4Rect_text2')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="about-card">
                                <h2><a href="https://t.co/IDKvAGiX3A#Online-Slots">{{__('ft.4Rect_label3')}}</a></h2>
                                <p>{{__('ft.4Rect_text3')}}</p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="about-card">
                                <h2><a href="https://t.co/75WkUKonsZ#4D-Lottery">{{__('ft.4Rect_label4')}}</a></h2>
                                <p>{{__('ft.4Rect_text4')}}</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('after.js')

@endsection