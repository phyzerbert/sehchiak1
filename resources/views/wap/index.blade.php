@extends('wap.layouts.main')
@section('after.css')

<link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/main.css') }}">
@endsection
@section('content')

@include('wap.layouts.header')
<style>
.m_header{
    z-index:100;
}
.m_wrapper{
    padding-left: 5px;
    padding-right: 5px;
    border-bottom: solid 3px #ffffff;
}
.m_wrapper .m_box.m_box-half{
    float: left;
    width: 25%;
    background-color:unset;
    margin-bottom: 18px;
    padding: 5px;
}
.m_wrapper .m_box .m_box-link{
    position: relative;
    display: block;
    color:white;
    font-size: 13px;
    text-align: center;
    text-decoration: none;
    background-color: unset !important;
    border:solid 2px #d1d1d1;
    border-radius: 5px;
}
.m_wrapper .m_box img{
    display: block;
    margin: 0 auto;
    width:100px;
    /* height:112px; */
}
.m_wrapper .m_box .m_box-name_new{
    margin-top: 5px;
    display:block; 
}
.m_notice{
    margin-top:0
}
.category-wrap-placeholder_3S0wB {
    height: 38px;
}
.category-wrap_d3wny {
    position: relative;
    height: 38px;
    background-color: #fceeb0;
    box-sizing: border-box;
    /* border-top: solid 1px #dedede; */
    /* border-bottom: solid 1px #dedede; */
    /*padding-right: 36px;*/
}
.category-wrap-placeholder_3S0wB.fixed_24GUJ .category-wrap_d3wny {
    position: fixed;
    top: 60px;
    left: 0;
    z-index: 1000;
    width: 100%;
}
.category-wrap_d3wny .category-outer-inner_17KJ5 {
    width: 100%;
    height: 36px;
    overflow-x: auto;
    overflow-y: hidden;
    /* white-space: nowrap; */
    -webkit-overflow-scrolling: touch;
}
.category-wrap_d3wny .category-name_2VWaa {
    position: relative;
    color: #FFF;
    float: left;
    width: 20%;
    /*height: 36px;*/
    line-height: 36px;
    font-size: 12px;
    text-align: center;
    user-select: none;
    -webkit-user-select: none;
    box-sizing: border-box;
    /*padding: 0 10px;*/
}
.category-wrap_d3wny .category-name_2VWaa.current_2-Ch8 {
    color: #C72620;
}
.category-wrap_d3wny .category-toggle-icon_2RR3B {
    position: absolute;
    top: 0;
    right: 0;
    width: 16px;
    height: 16px;
    background-color: #1B1D1B;
    padding: 10px;
}
.fixed_24GUJ .category-wrap_d3wny .category-name_2VWaa{
    line-height:36px;
}
.category-wrap_d3wny .category-name_2VWaa a{
    color: #000000;
}
.category-wrap_d3wny .category-name_2VWaa a.active{
    color:#C72620;
}
.m_wrapper .m_box{
    padding:0;
}
.m_category{
    margin-bottom:18px;
}
</style>
<div class="m_container">
    <div class="m_body">
        <div class="container m_banner">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    <li data-target="#demo" data-slide-to="4"></li>
                </ol>
                    
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="item active">
                    <img src="{{ asset('/web/images/oneone/banner/banner1_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.NewYearLuckyDraw') }}">
                    </div>
                    <div class="item">
                    <img src="{{ asset('/web/images/oneone/banner/banner2_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.4DDeposit200Free20') }}">
                    </div>
                    <div class="item">
                    <img src="{{ asset('/web/images/oneone/banner/banner3_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.NewMemberBonus') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/web/images/oneone/banner/banner4_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.918KissDepositBonus') }}">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/web/images/oneone/banner/banner5_'.config('app.locale').'.jpg') }}" alt="{{ __('ft.WinnerOf2019_10Cars') }}">
                    </div>
                </div>
                    
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#demo" data-slide="prev">
                    <span class="control-left"></span>
                </a>
                <a class="right carousel-control" href="#demo" data-slide="next">
                    <span class="control-right"></span>
                </a>
            </div>
        </div>
        @if (Auth::guard('member')->guest())
        <div class="row login-btn-group text-center">
            <a class="col-xs-6 link-btn link-btn-reg" href="{{ route('wap.register') }}"><span class="multi-lang" data-lang="HOMEPAGE.Register"><i class="fas fa-user-plus"></i>&nbsp;{{ __('mb.register') }}</span></a>
            <a class="col-xs-6 link-btn link-btn-login" href="{{ route('wap.login') }}" id="login-link"><span class="multi-lang" data-lang="HOMEPAGE.Login"><i class="fas fa-sign-in-alt"></i>&nbsp;{{ __('mb.login') }}</span></a>
        </div>
        @endif
        <div class="m_notice">
			<span class="pull-left" style="color:white;"><i class="fas fa-volume-up"></i>&nbsp;</span>

            <div class="pull-left notice_content" style="width:90%;color:white">
                <marquee id="mar0" behavior="alternative" direction="left" scrollamount="2">
                    @foreach($_system_notices as $v)
                    <div class="module" style="display: inline;word-break: keep-all;white-space: nowrap;">
                        <span>~{{ $v->title }}~</span>
                        <span>{{ $v->content }}</span>
                    </div>
                    @endforeach
                </marquee>
            </div>
        </div>
        <!-- <div style="padding: 10px;">
            <a target="_blank" href="{{route('wap.red')}}">
                <img style="border-radius: 8px" src="{{asset('wap/images/hongbao/qiang.jpg')}}">
            </a>
        </div> -->

        <div class="container login__product-category">
            <div class="row product-catergory__ctn clearfix">
                <div class="col-xs-4 product-category__product" product="cockfight">
                    <a href="#kycard">
                        <img class="product-category__product-img" src="{{asset('wap/images/category/cockfight-icon.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="MENU.Cockfight">{{ __('mb.hot_game') }}</span>
                    </a>
                </div>
                
                <div class="col-xs-4 product-category__product" product="casino">
                    <a href="#live">
                        <img class="product-category__product-img" src="{{asset('wap/images/category/casino.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="MENU.LiveCasino">{{ __('mb.live_casino') }}</span>
                    </a>
                </div>
                <div class="col-xs-4 product-category__product" product="egame">
                    <a href="#casino">
                        <img class="product-category__product-img" src="{{asset('wap/images/category/egame.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="MENU.Games">{{ __('mb.slot_game') }}</span>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top:10px;">
                <div class="col-xs-4 product-category__product" product="lottery">
                    <a href="#lotter">
                        <img class="product-category__product-img" src="{{asset('wap/images/category/esport.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="MENU.Lottery">{{ __('mb.e_sport') }}</span>
                    </a>
                </div>
                <div class="col-xs-4 product-category__product" product="sport">
                    <a href="#ball">
                        <img class="product-category__product-img" src="{{asset('wap/images/category/sport.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="MENU.Sports">{{ __('mb.sport') }}</span>
                    </a>
                </div>
                <div class="col-xs-4 product-category__product">
                    {{-- <a href="javascript:window.open('/lottery_new','')"> --}}
                    <a href="#"
                        @if($_member) onclick="javascript:window.open('/lottery_28','','width=1024,height=768')"
                        @else onclick="location.href = '{{ route('wap.login') }}'" @endif                    
                    >
                        <img class="product-category__product-img" src="{{asset('wap/images/category/lottery.png')}}">
                        <span class="product-category__product-title multi-lang" data-lang="COMMON.Promotion">{{ __('mb.lottery') }}</span>
                    </a>
                </div>

            </div>
        </div>        


        {{--棋牌--}}
        <div class="m_wrapper clear">
            <div class="m_category_title" id="kycard">
                {{ __('mb.Hot_Game') }}
            </div>

            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'beautiful_chess'])}}">
                    <img src="{{ asset('/wap/images/hotgames/918kiss23.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.beautiful_chess') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'Joker'])}}">
                    <img src="{{ asset('/wap/images/hotgames/joker23.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.Joker') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'Mega888'])}}">
                    <img src="{{ asset('/wap/images/hotgames/mega888.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.Mega888') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'Newtown'])}}">
                    <img src="{{ asset('/wap/images/hotgames/newtown.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.Newtown') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'Rollex'])}}">
                    <img src="{{ asset('/wap/images/hotgames/rollex.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.Rollex') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="{{route('wap.hotgame',['type'=>'ace333'])}}">
                    <img src="{{ asset('/wap/images/hotgames/ace333.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.ace333') }}
                    </span>
                </a>
            </div>
            @if(in_array('FG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=7&devices=1','','width=1024,height=768')">
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/100percent/btn_icon_fgcard_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        FG {{ __('mb.Hot_Game') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('AP', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ap&game_type=7&devices=1','','width=1024,height=768')">
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/100percent/ap.png') }}" alt="">
                    <span class="m_box-name_new">
                        AP {{ __('mb.Hot_Game') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('VG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" href="http://www.gentingclub88.asia/m/recharge">
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/100percent/btn_icon_vgcard_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        VG {{ __('mb.Hot_Game') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('LEG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEG&game_type=7&devices=1','','width=1024,height=768')">
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/100percent/btn_icon_legcard_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.le_tour') }} {{ __('mb.Hot_Game') }}
                    </span>
                </a>
            </div>
            @endif
            
            {{-- @if(in_array('KY', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=KY&game_type=7&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/100percent/btn_icon_kycard_n.png') }}" alt="">
                    <span class="m_box-name_new">
                    {{ __('mb.kaiyuan') }} {{ __('mb.Hot_Game') }}
                </span>
            </a>
            </div>
            @endif --}}

            {{--@if(in_array('LEG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEG&game_type=7&devices=1','','width=1024,height=768')">
                    --}}{{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}{{--
                    <img src="{{ asset('/wap/images/100percent/btn_icon_legcard_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        LEG {{ __('mb.Hot_Game') }}
                    </span>
                </a>
            </div>
            @endif--}}

        </div>

        {{--视讯--}}
        <div class="m_wrapper clear">
            <div class="m_category_title" id="live">
                {{ __('mb.video_live') }}
            </div>
            @if(in_array('AG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/ag.png') }}" alt="">
                    <span class="m_box-name_new">
                        AG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BBIN', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/bb.png') }}" alt="">
                    <span class="m_box-name_new">
                        BB
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/bg.png') }}" alt="">
                    <span class="m_box-name_new">
                        BG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SUNBET', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SUNBET&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/sb.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.shenbo') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('ALLBET', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ALLBET&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/ab.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.obo') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('LEBO', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEBO&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/lebo.png') }}" alt="">
                    <span class="m_box-name_new">
                        LEBO
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SA', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/sa.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        SA
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('GD', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GD&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/gd.png') }}" alt="">
                    <span class="m_box-name_new">
                        GD
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('OG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=OG&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/og.png') }}" alt="">
                    <span class="m_box-name_new">
                        OG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('DG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=DG&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/dg.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        DG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('MG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=MG&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/mg.png') }}" alt="">
                    <span class="m_box-name_new">
                        MG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('PT', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member)  onclick="javascript:window.open('{{ route('pt_video.index') }}','','width=858,height=445')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/pt.png') }}" alt="">
                    <span class="m_box-name_new">
                        PT
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('GPI', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=LEBO&game_type=1&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/casino/gpi.png') }}" alt="">
                    <span class="m_box-name_new">
                        GPI
                    </span>
                </a>
            </div>
            @endif
        </div>

        {{-- SLOT GAME --}}
        <div class="m_wrapper clear">
            <div class="m_category_title" id="casino">
                {{ __('mb.electronic_entertainment') }}
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link" href="{{route('wap.index_py')}}">
                    <img src="{{ asset('/wap/images/slotgames/fish.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.electronic') }}
                    </span>
                </a>
            </div>
            @if(in_array('PP', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PP&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_ppcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        PP 
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_sgcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        SG
                    </span>
                </a>
            </div>
            @endif

            @if(in_array('MW', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=MW&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_mwcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        MW
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('CQ9', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=CQ9&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/cq9.png') }}" alt="">
                    <span class="m_box-name_new">
                        CQ9
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SA', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SA&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/sa.png') }}" alt="">
                    <span class="m_box-name_new">
                        SA
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('JDB', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=JDB&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_jdbcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        JDB
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('FG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=FG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_fgcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        FG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SW', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=SW&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_swcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        SW
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BNG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=BNG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_bngcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        BNG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('MG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=MG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_mgcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        MG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('PT', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PT&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/pt.png') }}" alt="">
                    <span class="m_box-name_new">
                        PT
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('AG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/ag.png') }}" alt="">
                    <span class="m_box-name_new">
                        AG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('GPI', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=GPI&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_gpicasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        GPI
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BBIN', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=2&devices=1','','width=1024,height=768')">
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/slotgames/bb.png') }}" alt="">
                    <span class="m_box-name_new">
                        BB
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('QT', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=QT&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/btn_icon_qtcasino_n.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        QT
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('DT', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=DT&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/dt.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        DT
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('PG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/pg.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        PG
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('GTI', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=GTI&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/gti.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        GTI
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('PNG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" onclick="window.open('{{ route('ng.playGame') }}?plat_type=PNG&game_type=2&devices=1','','width=1024,height=768')">
                    <img src="{{ asset('/wap/images/slotgames/png.jpg') }}" alt="">
                    <span class="m_box-name_new">
                        PNG
                    </span>
                </a>
            </div>
            @endif
            
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="#"
                    @if($_member)  onclick="javascript:window.open('{{ route('jokerweb.index') }}','','width=858,height=445')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/hotgames/joker23.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.Joker') }}
                    </span>
                </a>
            </div>
            <div class="m_box m_box-half">
                <a class="m_box-link"  href="#"
                    @if($_member)  onclick="javascript:window.open('{{ route('web918.index') }}','','width=858,height=445')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/hotgames/918kiss23.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.beautiful_chess') }}
                    </span>
                </a>
            </div>
        </div>

        {{-- Esports --}}
        <div class="m_wrapper clear">
            <div class="m_category_title" id="lotter">
                {{ __('mb.lottery_game') }}
            </div>
            @if(in_array('NG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3&devices=1&lott_type=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_nglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        NG {{ __('mb.traditional_color') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('NG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NG&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_nglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        NG {{ __('mb.credit_color') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('BBIN', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/100percent/btn_icon_lottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        BB {{ __('mb.lottery_ticket') }}
                    </span>
                </a>
            </div>
            @endif
            {{-- @if(in_array('BG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BG&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_bglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        BG {{ __('mb.lottery_ticket') }}
                    </span>
                </a>
            </div>
            @endif --}}
            @if(in_array('VR', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=VR&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_vrlottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        VR {{ __('mb.credit_color') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('EG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=EG&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_eglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        EG {{ __('mb.credit_color') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('IG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_iglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        IG {{ __('mb.credit_color') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('IG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IG&game_type=3&devices=1&game_code=imlotto10059','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/wap/images/100percent/btn_icon_iglottery_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        IG {{ __('mb.mark_six') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('ESB', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=ESB&game_type=5&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/web/images/sport/role_esb.png') }}" alt="">
                    <span class="m_box-name_new">
                        ESB {{ __('mb.gaming') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('HC', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=HC&game_type=5&devices=1','','width=1024,height=768')"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    <img src="{{ asset('/web/images/sport/role_hc.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.dynasty_esports') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('AVIA', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AVIA&game_type=5&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/web/images/sport/role_avia.png') }}" alt="">
                <span class="m_box-name_new">
                    {{ __('mb.pan_asian_esports') }}
                </span>
            </a>
            </div>
            @endif
        </div>

        {{-- Sports --}}
        <div class="m_wrapper clear">
            <div class="m_category_title" id="ball">
                {{ __('mb.sports_event') }}
            </div>
            @if(in_array('GJ', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GJ&game_type=4&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                    {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                    <img src="{{ asset('/wap/images/sportevents/sports1.png') }}" alt="">
                    <span class="m_box-name_new">
                        {{ __('mb.crown_sports') }}
                    </span>
                </a>
            </div>
            @endif
            @if(in_array('SS', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SS&game_type=4&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/wap/images/sportevents/sports1.png') }}" alt="">
                <span class="m_box-name_new">
                    {{ __('mb.sansheng_sports') }}
                </span>
            </a>
            </div>
            @endif
            @if(in_array('BBIN', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=4&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                {{--<img class="m_isComing" src="{{ asset('/wap/images/m_isComing.png') }}" alt="">--}}
                <img src="{{ asset('/wap/images/sportevents/sports2.png') }}" alt="">
                <span class="m_box-name_new">
                    BB {{ __('mb.physical_education') }}
                </span>
            </a>
            </div>
            @endif
            {{-- @if(in_array('IBC', $_api_list))
            <div class="m_box m_box-half">
            <a class="m_box-link"
            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IBC&game_type=4&devices=1','','width=1024,height=768')"
            @else onclick="location.href = '{{ route('wap.login') }}'" @endif
            >
                <img src="{{ asset('/wap/images/sportevents/sports1.png') }}" alt="">
                <span class="m_box-name_new">
                    {{ __('mb.sabah_sports') }}
                </span>
            </a>
            </div>
            @endif --}}
            @if(in_array('AG', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=4&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/wap/images/sportevents/sports3.png') }}" alt="">
                <span class="m_box-name_new">
                    AG {{ __('mb.physical_education') }}
                </span>
            </a>
            </div>
            @endif
            @if(in_array('NEWBB', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NEWBB&game_type=4&devices=1','','width=1024,height=768')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/wap/images/sportevents/sports1.png') }}" alt="">
                <span class="m_box-name_new">
                    NEWBB {{ __('mb.physical_education') }}
                </span>
            </a>
            </div>
            @endif            
            @if(in_array('BC', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link"
                    @if($_member) onclick="javascript:$('#sportsModal').modal()"
                    @else onclick="location.href = '{{ route('wap.login') }}'" @endif
                >
                <img src="{{ asset('/wap/images/sportevents/ballcrown.png') }}" alt="">
                <span class="m_box-name_new">
                    SPORTS
                </span>
            </a>
            </div>
            @endif
            {{--@if(in_array('NEWBB', $_api_list))
            <div class="m_box m_box-half">
                <a class="m_box-link" href="{{ route('ng.playGame') }}?plat_type=NEWBB&game_type=5&devices=1">
                    <img src="{{ asset('/wap/images/100percent/btn_icon_bcsport_n.png') }}" alt="">
                    <span class="m_box-name_new">
                        NEWBB {{ __('mb.gaming') }}
                    </span>
                </a>
            </div>
            @endif--}}
        </div>

        {{--优惠--}}
        <div class="m_wrapper clear" style="padding-bottom:5px;">
            <div class="m_category_title">
                {{ __('mb.angpow') }}
            </div>
            <div class="m_box m_box-full">
                {{-- <a class="m_box-link" href="{{ route('wap.activity_list') }}"> --}}
                <a class="m_box-link" href="{{ route('wap.red') }}">
                    <img src="{{ asset('/wap/images/angpao_m.png') }}" alt="" style="width:100%">
                    <span class="m_box-name_new">
                        {{ __('mb.angpow') }}
                    </span>
                </a>
            </div>
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
        </div>
    </div>
</div>
<div class="modal modal-login modal-daili fade" id="sportsModal" role="dialog">
    <div class="modal-content" style="width:85%;height:140px !important;padding:0;margin-top:150px;">
        <a href="" style="display: block;width:65%;position:absolute;top:0;left:0"
            @if($_member) onclick="javascript:window.open('{{ route('ballcrown.index', 'SP3') }}','','width=1200,height=700')"
            @else onclick="location.href = '{{ route('wap.login') }}'" @endif
        ><img src="{{ asset('/wap/images/sportevents/ibc.png') }}" height="140px" width="100%" alt=""></a>
        <a href="" style="display: block;width:65%;position: absolute;top:0;right:0"
            @if($_member) onclick="javascript:window.open('{{ route('ballcrown.index', 'SP2') }}','','width=1200,height=700')"
            @else onclick="location.href = '{{ route('wap.login') }}'" @endif
        ><img src="{{ asset('/wap/images/sportevents/sbo.png') }}" height="140px" width="100%" alt=""></a>        
    </div> 
</div>
<script>
    var Marquee3k;
</script>
<script type="text/javascript" src="{{ asset('/wap/js/Marquee3000/marquee3k.js') }}"></script>
<script>
    (function ($) {
        
        if(Marquee3k) Marquee3k.init();
        $(function () {
            $('.disabled').on('click', function () {
                alert('暂未开放，敬请期待！');
            });
        })
        $(window).scroll(
           function() {
               var scrollTop = $(this).scrollTop();
               var scrollHeight = $(document).height();
               var windowHeight = $(this).height();
               if(scrollTop>=170){
                 $(".category-wrap-placeholder_3S0wB").addClass("fixed_24GUJ")
             }else{
                 $(".category-wrap-placeholder_3S0wB").removeClass("fixed_24GUJ")
             }
             var kycardTop=$("#kycard").offset().top;
             var liveTop=$("#live").offset().top;
             var casinoTop=$("#casino").offset().top;
             var lotterTop=$("#lotter").offset().top;
             var ballTop=$("#ball").offset().top;

             scrollTop=scrollTop+180;
            //  console.log(kycardTop);
            //  console.log(scrollTop);

             if(scrollTop>=kycardTop&&scrollTop<liveTop){
                 $('.category-name_2VWaa').eq(0).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=liveTop&&scrollTop<casinoTop){
                 $('.category-name_2VWaa').eq(1).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=casinoTop&&scrollTop<lotterTop){
                 $('.category-name_2VWaa').eq(2).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=lotterTop&&scrollTop<ballTop){
                 $('.category-name_2VWaa').eq(3).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }else if(scrollTop>=ballTop){
                 $('.category-name_2VWaa').eq(4).find('a').addClass("active").parent().siblings().find('a').removeClass('active') 
             }
         }
         );
        $(".category-name_2VWaa a").click(function(){
            var scrollTop=$(window).scrollTop()
            var index=$(this).parent().index();
            // console.log(index);
            switch(index){
              case 0:
              scrollTop=$("#kycard").offset().top;
              break;
              case 1:
              scrollTop=$("#live").offset().top;
              break;
              case 2:
              scrollTop=$("#casino").offset().top;
              break;
              case 3:
              scrollTop=$("#lotter").offset().top;
              break;
              case 4:
              scrollTop=$("#ball").offset().top;
              break;
              
          }
        //   console.log(scrollTop)
          document.body.scrollTop =scrollTop-80;
          $(this).addClass("active").parent().siblings().find('a').removeClass('active')
      })
    })(jQuery)
    
</script>

@endsection