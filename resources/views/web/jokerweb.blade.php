@extends('web.layouts.api')

@section('style')
    <style>
        body{
            background: url({{asset('web/images/poker/jokerweb_bg.jpg')}});  
            background-size: cover;          
        }
        #gamesite{
            width: 100%;
            height: 100vh;
            display: none;
        }
        #gamepanel{
            width: 100%;
            height: 100%;
        }
        .type-img{
            width: 25px;
        }
    </style>
@endsection

@section('content')
    <div class="container" id="main-buttons">
        {{ csrf_field() }}
        <input type="hidden" name="money" id="money" value="@isset($member) {{$member->money}} @endisset " />
        <div class="col-md-4 mx-auto form-inline" style="margin-top:100px; display:none">
            <label for="balance">Balance : </label>
            <input type="text" name="balance" class="form-control" id="balance" value="@isset($member_api) {{$member_api->money}} @endisset"  readonly />
        </div>        
        <div class="button-group d-flex justify-content-around" style="margin-top:185px;">
            <a href="#" class="btn btn-success btn-lg" id="deposit">Deposit</a>
            <a href="#" class="btn btn-warning btn-lg" id="withdraw">Withdraw</a>
            <a href="{{route('jokerweb.gamelist')}}" id="playnow" class="btn btn-primary btn-lg">Play Now</a>
        </div>
    </div>
    <div class="" id="gamesite">
        <nav class="navbar navbar-expand bg-success navbar-success">
            <a class="navbar-brand" href="#" style="margin-left:50px">
                <img src="{{ asset('/web/images/oneone/logo_all.png') }}" alt="logo" style="width:200px;">
            </a>
            <div style="width:85%">
                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link" id="btn-signout" href="#" title="Sign Out"><img class="type-img" src="{{ asset('/web/images/sport/blue-ball.png') }}" alt="Logout"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <iframe id="iFrameGame" style="width:100%;height:100vh;position:relative;border:0px;outline:none;overflow:hidden" onload="ResizeIFrame()" src=""></iframe>
    </div>
    
@endsection

@section('afterjs')
    <script>
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

            $("#playnow1").on('click touchstart',function(){

                if(parseFloat(balance) == 0 || balance == ""){
                    alert("Unfortunately, You can't play game. Please deposit before play.");
                    return false;
                }

                $('#ajax-loading').show();
                $.ajax({
                    url: "/jokerweb/play",
                    type: "GET",
                    success: function (response) {                        
                        if(response == 'error'){
                            alert("Sorry, Unfortunately cannot play game.");
                            return false;
                        }
                        $('#ajax-loading').hide();
                        $("#main-buttons").hide();
                        $("#gamesite").show();
                        $("#iFrameGame").attr('src', response);
                    },
                    error: function (xhr, status) {
                        // alert(status);
                    }
                });                
            });

            $("#deposit").on('click touchstart', function(){
                var money = $("#money").val().trim();
                                
                alert("Money : " + money);
                let amount = prompt('Do you want to Deposit? Please type the correct Score!', '0');
                if (amount === null) {
                    return false;
                }
                if(parseInt(amount) > parseInt(money)){
                    alert("You don\'t have enough money!");
                    return false;
                }
                $('#ajax-loading').show();
                $.ajax({
                    url: "/jokerweb/setbalance",
                    type: "POST",
                    data: {amount: amount, type: "deposit", _token: _token},
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
                var money = $("#money").val().trim();

                alert("Money : " + money);
                let amount = prompt('Do you want to Withdraw? Please type the correct Score!', '0');               
                if (amount === null) {
                    return false;
                }$('#ajax-loading').show();
                $.ajax({
                    url: "/jokerweb/setbalance",
                    type: "POST",
                    data: {amount: amount, type:"withdraw", _token: _token},
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