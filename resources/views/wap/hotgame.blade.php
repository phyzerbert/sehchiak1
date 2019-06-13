@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <link type="text/css" rel="stylesheet" href="{{ asset('/wap/css/hotgame.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/js/jquery.sweet-modal.min.css') }}" />
    <script src="{{ asset('/web/js/jquery.sweet-modal.min.js') }}"></script>
    <img src="{{asset('/wap/images/page-loader.gif')}}" style="display: none" id="loading_icon"></img>
    <input type="hidden" id="credit" value="{{$member->money}}">
    <div class="m_container" style="height:110vh">
        <div class="m_body">
            <div class="container-fluid gm_main">
                <div class="m_member-title clear textCenter">
                    <a class="pull-left" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                   {{ __('mb.'.$type) }} 
                </div>
                <div class="m_userCenter-line"></div>

                <div class="game_png_container">
                    <img src="{{ asset('/wap/images/hotgame_'.$type.'.jpg') }}" id="game_png" alt="" style="max-width: 100%;margin-top: 8px;">
                </div>
                @if($type=='beautiful_chess')
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control" id="game_id1" value="{{$member->game_id1}}" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="text" placeholder="Password :" class="form-control" id="game_pass1" value="{{$member->game_pass1}}" readonly>
                        </div>
                        <div class = "inputClass_3" style="display: flex; align-items: center;">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance1" class="form-control" value="{{$member->game_balance1}}" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">
                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(1)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(1)">                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <a href="http://www.918kiss.com.my/"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                            <a href="http://www.918kiss.com.my/"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                        </div>
                        
                    </form>
                </div>
                @elseif($type == 'Newtown')
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control" id="game_id2" value="{{$member->game_id2}}" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="text" placeholder="Password :" class="form-control" id="game_pass2" value="{{$member->game_pass2}}" readonly>
                        </div>
                        <div class = "inputClass_3" style="display: flex; align-items: center;">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance2" class="form-control" value="{{$member->game_balance2}}" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">
                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(2)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(2)">                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <a href="http://cdn.npro11.com/m.html"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                            <a href="http://cdn.npro11.com/m.html"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                        </div>
                        
                    </form>
                </div>
                @elseif($type == 'Joker')
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control" id="game_id3" value="{{$member->game_id3}}" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="text" placeholder="Password :" class="form-control" id="game_pass3" value="{{$member->game_pass3}}" readonly>
                        </div>
                        <div class = "inputClass_3" style="display: flex; align-items: center;">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance3" class="form-control" value="{{$member->game_balance3}}" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">
                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(3)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(3)">                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <a href="http://www.joker6688.com"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                            <a href="http://www.joker6688.com"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                        </div>
                        
                    </form>
                </div>
                @elseif($type == 'Mega888')
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control" id="game_id4" value="{{$member->game_id4}}" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="text" placeholder="Password :" class="form-control" id="game_pass4" value="{{$member->game_pass4}}" readonly>
                        </div>
                        <div class = "inputClass_3" style="display: flex; align-items: center;">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance4" class="form-control" value="{{$member->game_balance4}}" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">
                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(4)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(4)">                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <a href="http://m.megaplay88.com/"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                            <a href="http://m.megaplay88.com/"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                        </div>
                        
                    </form>
                </div>
                @elseif($type == 'Rollex')
                    
                <div class = "col-12">
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><img style="max-width: 9999px;" src="{{asset('/web/images/poker/login.png')}}"></span>
                            <input type="text" placeholder="Login :" class="form-control" id="game_id5" value="{{$member->game_id5}}" readonly>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/pass.png')}}"></span>
                            <input type="text" placeholder="Password :" class="form-control" id="game_pass5" value="{{$member->game_pass5}}" readonly>
                        </div>
                        <div class = "inputClass_3" style="display: flex; align-items: center;">
                            <div class="BalanceContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><img  style="max-width: 9999px;" src="{{asset('/web/images/poker/balance.png')}}"></span>
                                    <input type="text" placeholder="Balance :" id="balance5" class="form-control" value="{{$member->game_balance5}}" readonly>
                                </div>
                            </div>
                            <div class="btnContainer">
                                <div class="input-group">
                                    <img src="{{asset('/web/images/poker/deposite_bt.png')}}"  onclick="deposit(5)">
                                    <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(5)">                            
                                </div>
                            </div>
                        </div>
                        <div class = "inputClass_4">
                            <a href="http://cdn.rpro11.com/m.html"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                            <a href="http://cdn.rpro11.com/m.html"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                        </div>                        
                    </form>
                </div>

                @elseif($type == 'ace333')
                <br />
                <h1 style="color:white;text-align:center">Coming Soon</h1>
                @endif

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
    <script>
        function deposit(api_id) {
            var balance = $("#game_balance"+api_id).val();
            var money = $(".money").text();


            $.sweetModal.prompt('Do you want to deposit ?', null, null, function(score) {
                if(isNaN(score) || score == ""){
                    $.sweetModal({
                        content: 'Type Correct Score!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(score) <= 0){
                    $.sweetModal({
                        content: 'the score should be big than 0 !',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(money) < parseInt(score)){
                    $.sweetModal({
                        content: 'you don\'t have enough money!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }

                setscore(api_id,score,0);
            });

        }

        function withdraw(api_id) {
            var balance = $("#game_balance"+api_id).val();

            $.sweetModal.prompt('Do you want to withdraw ?', null, null, function(score) {
                if(isNaN(score) || score == ""){
                    $.sweetModal({
                        content: 'Type Correct Score!',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                if(parseInt(score) <= 0){
                    $.sweetModal({
                        content: 'the score should be big than 0 !',
                        title: 'Oh noes…',
                        icon: $.sweetModal.ICON_ERROR,

                        buttons: [
                            {
                                label: 'Close',
                                classes: 'redB'
                            }
                        ]
                    });
                    return;
                }
                var bal = parseFloat(balance);

                // if( balance == "" || parseInt(bal) < parseInt(score)){
                //     $.sweetModal({
                //         content: 'you don\'t have enough balance !',
                //         title: 'Oh noes…',
                //         icon: $.sweetModal.ICON_ERROR,

                //         buttons: [
                //             {
                //                 label: 'Close',
                //                 classes: 'redB'
                //             }
                //         ]
                //     });
                //     return;
                // }
                setscore(api_id,score,1);
            });

        }

        function setscore(api_id,score,mode) {
            var game_id = $("#game_id"+api_id).val();
            var game_pass = $("#game_pass"+api_id).val();
            if(game_id == ""){
                alert("Sorry, You have not Hotgame Account.");
                return false;
            }
            disableScreen();
            $.ajax({
                type: "GET",
                url: "{{route('web.setscore')}}",
                data: {api_id:api_id,game_id: game_id,game_pass:game_pass, score: score,mode:mode},
                success: function (data) {
                    enableScreen();
                    if(data == "error"){
                        $.sweetModal({
                            content: 'unfortunately failed !',
                            title: 'Oh noes…',
                            icon: $.sweetModal.ICON_ERROR,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });

                    }else if(data.indexOf("@@") != -1){
                        data = data.replace("@@","");
                        $.sweetModal({
                            content: data,
                            title: 'Oh noes…',
                            icon: $.sweetModal.ICON_ERROR,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });
                    }else{
                        $("#balance"+api_id).val(data);
                        $.sweetModal({
                            content: 'Successfully set!',
                            title: 'success',
                            icon: $.sweetModal.ICON_SUCCESS,

                            buttons: [
                                {
                                    label: 'Close',
                                    classes: 'redB'
                                }
                            ]
                        });
                        location.reload(true);
                    }

                }
            });
        }
        function disableScreen() {
            // creates <div class="overlay"></div> and
            // adds it to the DOM
            var div= document.createElement("div");
            div.className += "overlay";
            document.body.appendChild(div);
            $("#loading_icon").show();
        }
        function enableScreen() {
            // creates <div class="overlay"></div> and
            // adds it to the DOM
            $("#loading_icon").hide();
            $(".overlay").remove();
        }

    </script>

@endsection