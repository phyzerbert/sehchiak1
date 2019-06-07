@extends('web.layouts.api')

@section('style')
    <style>
        body{
            background-size: cover;
            background: url({{asset('web/images/sport/ballcrown-bg.jpg')}});            
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
        <div class="button-group d-flex justify-content-around" style="margin-top:250px;">
            <a href="#" class="btn btn-primary btn-lg" id="deposit">Deposit</a>
            <a href="#" class="btn btn-primary btn-lg" id="withdraw">Withdraw</a>
            <a href="#" id="playnow" class="btn btn-primary btn-lg" id="playnow">Play Now</a>
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
                        <a class="nav-link" id="btn-bcs" href="#" title="SBO"><img class="type-img" src="{{ asset('/web/images/sport/blue-ball.png') }}" alt="SBO"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="btn-sbo" href="#" title="IBC"><img class="type-img" src="{{ asset('/web/images/sport/green-ball.png') }}" alt="IBC"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <iframe src="" frameborder="0" id="gamepanel"></iframe>
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

            $("#playnow").on('click touchstart',function(){

                if(parseFloat(balance) == 0 || balance == ""){
                    alert("Unfortunately, You can't play game. Please deposit before play.");
                    return false;
                }
                playnow('SP1')
                                               
            });

            $("#btn-bcs").click(function(){
                playnow('SP2');
            });
            $("#btn-sbo").click(function(){
                playnow('SP3');
            });

            function playnow(style){
                $('#ajax-loading').show();
                $.ajax({
                    url: "/ballcrown/play",
                    type: "POST",
                    data: {style: style},
                    success: function (response) {                        
                        if(response == 'error'){
                            alert("Sorry, Unfortunately cannot play game.");
                            return false;
                        }
                        
                        $("#main-buttons").hide();
                        $("#gamesite").show();
                        $("#gamepanel").attr('src', response);
                        $('#ajax-loading').hide();
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        // window.location.href="https://vboss88.com/vboss/bet/show";
                    }
                });
            }

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
                $.ajax({
                    url: "/ballcrown/setbalance",
                    type: "POST",
                    data: {amount: amount, type: "deposit", _token: _token},
                    success: function (response) {
                        if(response == "success"){
                            alert("Deposit Successfully!");
                            window.location.reload(true);
                        }else{
                            alert("Unfortunately failed!");
                        }
                    },
                    error: function (xhr, status) {
                        alert("Unfortunately failed!");
                    }
                }); 
                
            });

            $("#withdraw").on('click touchstart', function(){
                var money = $("#money").val().trim();

                alert("Money : " + money);
                let amount = prompt('Do you want to Withdraw? Please type the correct Score!', '0');               
                if (amount === null) {
                    return false;
                }
                $.ajax({
                    url: "/ballcrown/setbalance",
                    type: "POST",
                    data: {amount: amount, type:"withdraw", _token: _token},
                    success: function (response) {
                        if(response == "success"){
                            alert("Withdraw Successfully!");
                            window.location.reload(true);
                        }else{
                            alert("Unfortunately failed!");
                        }                        
                    },
                    error: function (xhr, status) {
                        alert("Unfortunately failed!");
                    }
                }); 
            });
        });
    </script>
@endsection