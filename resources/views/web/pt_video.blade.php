@extends('web.layouts.api')

@section('style')
    <style>
        body{
            background-size: cover;
            background: url({{asset('web/images/livecasino/pt_bg.jpg')}});            
        }        
    </style>
    {{-- <script type="text/javascript" src="http://cache.download.banner.winforfun88.com/integrationjs.php"></script> --}}
    <script type="text/javascript" src="https://login.luckydragon88.com/jswrapper/integration.js.php?casino=winforfun88"></script>
    {{-- <script src="{{asset('/integration/winforfun88.conf.js')}}"></script>
    <script src="{{asset('/integration/integration.js')}}"></script> --}}
@endsection

@section('content')
    <div class="container">
        {{ csrf_field() }}
        <input type="hidden" name="money" id="money" value="@isset($member) {{$member->money}} @endisset " />
        <input type="hidden" name="username" id="username" value="@isset($member_api) {{$member_api->username}} @endisset " />
        <input type="hidden" name="password" id="password" value="@isset($member_api) {{$member_api->password}} @endisset " />
        <div class="col-md-4 mx-auto form-inline" style="margin-top:100px; display:none">
            <label for="balance">Balance : </label>
            <input type="text" name="balance" class="form-control" id="balance" value="@isset($member_api) {{$member_api->money}} @endisset"  readonly />
        </div>       
        <div class="button-group d-flex justify-content-around" style="margin-top: 200px">
            {{-- <a href="#" class="btn btn-primary btn-lg" id="result">4D Result</a>
            <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">PageOut Table</a> --}}
            <a href="#" class="btn btn-success btn-lg" id="deposit">Deposit</a>
            <a href="#" class="btn btn-success btn-lg" id="withdraw">Withdraw</a>
            <a href="#" id="playnow" class="btn btn-primary btn-lg" onclick="login(1)">Play Now</a>
            {{-- <a href="#" id="logout" class="btn btn-primary btn-lg" onclick="logout(1, 1)">Logout</a> --}}
        </div>
        {{-- <div class="button-group d-flex justify-content-around" style="margin-top: 80px">
            <a href="#" class="btn btn-success btn-lg" id="deposit">Deposit</a>
            <a href="#" class="btn btn-success btn-lg" id="withdraw">Withdraw</a>
        </div> --}}
    </div>
@endsection

@section('afterjs')
    <script>
        var username = $('#username').val().trim();
        var password = $('#password').val().trim();

        iapiSetCallout('Login', calloutLogin);

        function login(realMode) {
            // iapiLogin($('#username').val().trim(), $('#password').val().trim(), realMode, "en");

            iapiSetClientPlatform("mobile&deliveryPlatform=HTML5");
            var realMode = 1;
            iapiLogin(username, password, realMode, "en");
        }

        // function calloutLogin(response) {
        //     if (response.errorCode) {
        //         alert("Login failed, " + response.errorText);
        //     } else {
        //         alert("Login OK, you will be redirected to the play console");
        //         // window.location = "https://cache.download.banner.winforfun88.com/casinoclient.html?language=en&game=gos&mode=offline";
        //         window.location = "https://cache.download.banner.winforfun88.com/casinoclient.html?language=en&game=7bal&mode=online";
        //         // window.location = "https://hub.ld176988.com/igaming/?gameId=gtscbl&real=1&username=" + username + "&lang=en&tempToken=Q0PJa69Tx_j5XYtaBO126utQwDCw0KCAYKDY&lobby=htcmd:close&support=htcmd:close&logout=htcmd:close&deposit=htcmd:close";
        //     }
        // }

        function calloutLogin(response) {
            if (response.errorCode) {
                alert("Login failed. " + response.playerMessage + " Error code: " + response.errorCode);
            } else {
                window.location = "/pt_video/games?username=" + username;
            }
        }

        function logout(allSessions, realMode) {
            iapiLogout(allSessions, realMode);
        }

        function calloutLogout(response) {
            if (response.errorCode) {
                alert("Logout failed, " + response.errorCode);
            }
            else {
                alert("Logout OK");
            }
        }


        $(document).ready(function(){
            var balance = $("#balance").val().trim();
            var _token = $("input[name='_token']").val().trim();
            
            $.ajax({
                type:'post',
                url : "{{route('member.api.wallet_balance')}}",
                dataType : 'json',
                success : function (data) {
                    console.log(data);
                    if(data.statusCode == '01'){
                        var all = Number($('#money').val()) + Number(data.data);
                        // var all = Number($('#money').val());
                        $('#money').val('');
                        $('#money').val(all.toFixed(2));
                    }
                }
            });          

            $("#deposit").on('click touchstart', function(){
                logout(1, 1);
                var money = $("#money").val().trim();                                
                alert("Money : " + money);
                let amount = prompt('Do you want to Deposit? Please type the correct Score!');
                if (amount === null) {
                    return false;
                }
                if(parseInt(amount) > parseInt(money)){
                    alert("You don\'t have enough money!");
                    return false;
                }
                $('#ajax-loading').show();
                $.ajax({
                    url: "{{route('pt_video.deposit')}}",
                    type: "POST",
                    data: {amount: amount, _token: _token},
                    success: function (response) {
                        if(response == "success"){
                            alert("Deposit Successfully!");
                            window.location.reload(true);
                        }else{
                            alert("Unfortunately failed!");
                        }
                        $('#ajax-loading').hide();
                    },
                    error: function (xhr, status) {
                        alert("Unfortunately failed!");
                        $('#ajax-loading').hide();
                    }
                }); 
                
            });

            $("#withdraw").on('click touchstart', function(){
                logout(1, 1);
                var money = $("#money").val().trim();

                alert("Money : " + money);
                let amount = prompt('Do you want to Withdraw? Please type the correct Score!');               
                if (amount === null) {
                    return false;
                }
                $('#ajax-loading').show();
                $.ajax({
                    url: "{{route('pt_video.withdraw')}}",
                    type: "POST",
                    data: {amount: amount, _token: _token},
                    success: function (response) {
                        if(response == "success"){
                            alert("Withdraw Successfully!");
                            window.location.reload(true);
                        }else{
                            alert("Unfortunately failed!");
                        }
                        $('#ajax-loading').hide();                
                    },
                    error: function (xhr, status) {
                        alert("Unfortunately failed!");
                        $('#ajax-loading').hide();
                    }
                }); 
            });
        });
    </script>
@endsection