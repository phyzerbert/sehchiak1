@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/hotgame.css') }}">
    <div class="m_container">
        <div class="m_body">
            <div class="container-fluid gm_main">
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                   {{ __('mb.'.$type) }} 
                </div>
                <div class="m_userCenter-line"></div>

                <div class="game_png_container">
                    <img src="{{ asset('/wap/images/hotgame_'.$type.'.png') }}" id="game_png" alt="" style="max-width: 100%;margin-top: 8px;">
                </div>
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control input_element_" id="_game_id1" value="" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="password" placeholder="Password :" class="form-control input_element_" id="game_pass1" value="" readonly>
                        </div>
                        <div class = "inputClass_3">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance1" class="form-control balance_" value="" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">

                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(1)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" style="margin-left:5px;" onclick="withdraw(1)">
                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <img src="{{asset('/web/images/poker/android_bt.png')}}">
                            <img src="{{asset('/web/images/poker/ios_bt.png')}}">
                        </div>                        
                    </form>
                </div>
                
                <div class="wrap">
                   
                   <!--  @if($_system_config->is_bankpay_on == 0)
                    <div align="center" class="pay-style">
                         银行卡转账
                        <a href="{{ route('wap.bank_pay') }}">
                            <img src="{{ asset('/wap/images/m_card.png') }}" class="pic"/>
                            <div class="text">银行卡转账</div>
                        </a>
                    </div>
                    @endif
                    @if($_system_config->is_wechat_on == 0)
                        <div align="center" class="pay-style">
                            微信转账
                            <a href="{{ route('wap.weixin_pay') }}">
                                <img src="{{ asset('/wap/images/m_weixinpay.png') }}" class="pic"/>
                                <div class="text">微信转账</div>
                            </a>
                        </div>
                    @endif -->
                   <!--  @if($_system_config->is_alipay_on == 0)
                        <div align="center" class="pay-style">
                             支付宝转账
                            <a href="{{ route('wap.ali_pay') }}">
                                <img src="{{ asset('/wap/images/m_alipay.png') }}" class="pic"/>
                                <div class="text">支付宝转账</div>
                            </a>
                        </div>
                    @endif -->
                       <!--  @if($_system_config->is_qq_on == 0)
                            <div align="center" class="pay-style">
                             支付宝转账
                                <a href="{{ route('wap.qq_pay') }}">
                                    <img src="{{ asset('/wap/images/m_scan.png') }}" class="pic"/>
                                    <div class="text">QQ扫码转账</div>
                                </a>
                            </div>
                        @endif -->
                </div>
            </div>
        </div>
    </div>
@endsection