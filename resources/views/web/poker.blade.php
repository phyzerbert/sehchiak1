@extends('web.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('/web/css/pocker.css') }}">
    <link rel="stylesheet" href="{{ asset('/web/js/jquery.sweet-modal.min.css') }}" />
    <script src="{{ asset('/web/js/jquery.sweet-modal.min.js') }}"></script>
    <div class="notice-row" style="top: 49px;">
        <div class="noticeBox">
            <div class="w">
                <div class="title">
                    {{ __('ft.Latest_Announcement') }}：
                </div>
                <div class="bd2">
                    <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                        <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()" onmouseover="this.stop()">
                            @foreach($_system_notices as $v)
                                <div class="module" style="display: inline-block;">
                                    <span>~{{ $v->title }}~</span>
                                    <span>{{ $v->content }}</span>
                                </div>
                            @endforeach
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container" id="background">
            <div class="row gamerow">
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/kiss.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id1" value="{{$member->game_id1}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass1" value="{{$member->game_pass1}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" id="game_balance1" class="balance" value="{{$member->game_balance1}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(1)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(1)">
                            </div>
                            
                            <div class="download-container">
                                <a href="http://www.918kiss.com.my/"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="http://www.918kiss.com.my/"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/newtown.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id2" value="{{$member->game_id2}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass2" value="{{$member->game_pass2}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance2" value="{{$member->game_balance2}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(2)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(2)">
                            </div>
                            <div class="download-container">
                                <a href="http://cdn.npro11.com/m.html"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="http://cdn.npro11.com/m.html"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/joker.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id3" value="{{$member->game_id3}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass3" value="{{$member->game_pass3}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance3" value="{{$member->game_balance3}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(3)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(3)">
                            </div>
                            <div class="download-container">
                                <a href="www.joker6688.com"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="www.joker6688.com"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/mega.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id4" value="{{$member->game_id4}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass4" value="{{$member->game_pass4}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance4" value="{{$member->game_balance4}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(4)" >
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(4)">
                            </div>
                            <div class="download-container">
                                <a href="http://m.megaplay88.com/"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="http://m.megaplay88.com/"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/rollex.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id5" value="{{$member->game_id5}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass5" value="{{$member->game_pass5}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance5" value="{{$member->game_balance5}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(5)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(5)">
                            </div>
                            <div class="download-container">
                                <a href="http://cdn.rpro11.com/m.html"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="http://cdn.rpro11.com/m.html"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/ace333.png')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                                <input type="text" placeholder="Login :" class="input_element" id="game_id6" value="{{$member->game_id6}}" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass6" value="{{$member->game_pass6}}" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance6" value="{{$member->game_balance6}}" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(6)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(6)">
                            </div>
                            <div class="download-container">
                                <a href="#"><img src="{{asset('/web/images/poker/android_bt.png')}}" class="float-left"></a>
                                <a href="#"><img src="{{asset('/web/images/poker/ios_bt.png')}}" class="float-right"></a>
                            </div>
                        </div>
                    </div>
                </div> 
                {{-- @php
                    $member_api = $member->apis()->where('api_id', '304')->first();
                @endphp
                <div class="col-4  col-md-4 col-lg-3">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{asset('/web/images/poker/918kiss.jpg')}}">
                        </div>
                        <div class="col-12 input_set">
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/login.png')}}">
                            <input type="text" placeholder="Login :" class="input_element" id="game_id7" value="@isset($member_api->username){{$member_api->username}}@endisset" readonly>
                            </div>
                            <div class="input-group input_custom">
                                <img class="place_img" src="{{asset('/web/images/poker/pass.png')}}">
                                <input type="text" placeholder="Password :" class="input_element" id="game_pass7" value="@isset($member_api->username){{$member_api->password}}@endisset" readonly>
                            </div>
                            <div class="funds-container">
                                <div class="input_balance">
                                    <img class="place_img" src="{{asset('/web/images/poker/balance.png')}}">
                                    <input type="text" placeholder="Balance :" class="balance" id="game_balance7" value="@isset($member_api->username){{$member_api->money}}@endisset" readonly>
                                </div>
                                <img src="{{asset('/web/images/poker/deposite_bt.png')}}" onclick="deposit(7)">
                                <img src="{{asset('/web/images/poker/withdrawl_bt.png')}}" onclick="withdraw(7)">
                            </div>
                            <div class="download-container">
                                <img src="{{asset('/web/images/poker/android_bt.png')}}">
                                <img src="{{asset('/web/images/poker/ios_bt.png')}}">
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
            </section>
        </div>

    </div>
    <script>
        $(function () {
            $('.en-gamelist li').click(function () {
                $(this).addClass('active');
                $(this).siblings('li').removeClass('active');
            });

            $(document).keydown(function (e) {  
                if((e.which || e.keyCode) == 116){
                    // alert("This website updates its content automatically. There is no need to refresh the page.");
                    return false;
                }  
            }); 
        })
        function getGameList(plat_type) {
            var url = "{{route('ng.playGame')}}?plat_type=" + plat_type + "&game_type=7";
            $("#gameFrame").attr("src", url);//
        }

        function deposit(api_id) {
            var balance = $("#game_balance"+api_id).val();
            var money = $(".money").text();
            alert('Money: ' + money);


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
                        content: 'The score should be big than 0 !',
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
                alert('Money: '+money + " :: " + score);
                if(parseInt(money) < parseInt(score)){
                    $.sweetModal({
                        content: 'You don\'t have enough money!',
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

                if (api_id == 7) {
                    web918_setscore(score, "deposit");
                } else {
                    setscore(api_id,score,0);
                }
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
                        content: 'The score should be big than 0 !',
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
                //         content: 'You don\'t have enough balance !',
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
                if (api_id == 7) {
                    web918_setscore(score, "withdraw");
                } else {
                    setscore(api_id,score,0);
                }
            });

        }

        function setscore(api_id,score,mode) {
            var game_id = $("#game_id"+api_id).val();
            var game_pass = $("#game_pass"+api_id).val();
            if(game_id == ""){
                alert("Sorry, You have not Hotgame Account.");
                return false;
            }
            var detailLoad = layer.load(2, {
                shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
                //shade:false
            });
            
            $.ajax({
                type: "GET",
                url: "{{route('web.setscore')}}",
                data: {api_id:api_id,game_id: game_id,game_pass:game_pass, score: score,mode:mode},
                success: function (data) {
                    layer.close(detailLoad);
                    if(data == "error"){
                        $.sweetModal({
                            content: 'Unfortunately failed !',
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
                        $("#game_balance"+api_id).val(data);
                        alert("Successfully set!");
                        location.reload(true);
                    }
                }
            });
        }

        
        // function web918_setscore(amount, type){

        //     var game_id = $("#game_id7").val();
        //     var game_pass = $("#game_pass7").val();
        //     if(game_id == ""){
        //         alert("Sorry, You have not Hotgame Account.");
        //         return false;
        //     }
        //     var detailLoad = layer.load(2, {
        //         shade: [0.2, '#ccc'], //遮罩层背景色、透明度,
        //         //shade:false
        //     });
        //     $.ajax({
        //         url: "/web918/setbalance",
        //         type: "POST",
        //         data: {amount: amount, type: type},
        //         success: function (data) {
        //             layer.close(detailLoad);
        //             if(data == "error"){
        //                 $.sweetModal({
        //                     content: 'Unfortunately failed !',
        //                     title: 'Oh noes…',
        //                     icon: $.sweetModal.ICON_ERROR,

        //                     buttons: [
        //                         {
        //                             label: 'Close',
        //                             classes: 'redB'
        //                         }
        //                     ]
        //                 });

        //             }else if(data.indexOf("@@") != -1){
        //                 data = data.replace("@@","");
        //                 $.sweetModal({
        //                     content: data,
        //                     title: 'Oh noes…',
        //                     icon: $.sweetModal.ICON_ERROR,

        //                     buttons: [
        //                         {
        //                             label: 'Close',
        //                             classes: 'redB'
        //                         }
        //                     ]
        //                 });
        //             }else{
        //                 alert("Successfully set!");
        //                 location.reload(true);
        //             }
        //         },
        //         error: function (xhr, status) {
        //             $.sweetModal({
        //                 content: 'Unfortunately failed !',
        //                 title: 'Oh noes…',
        //                 icon: $.sweetModal.ICON_ERROR,

        //                 buttons: [
        //                     {
        //                         label: 'Close',
        //                         classes: 'redB'
        //                     }
        //                 ]
        //             });
        //         }
        //     });
        // };
    </script>

@endsection