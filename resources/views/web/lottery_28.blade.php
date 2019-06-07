<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <title>Lottery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        body{
            background: url({{asset('web/images/lottery/lottery_bg.jpg')}});
            background-size: cover;
        }
        .button-group{
            margin-top: 150px;
        }
        .btn-main{
            width: 166px;
            height: 38px;
            display: block;
            font-size: 16px;
            font-weight: 700;
            text-align: center;
            text-decoration: none !important;
            color: #000000;
            padding-top: 4px;
            text-shadow: -1px -1px 0 #fbda8a, 1px -1px 0 #fbda8a, -1px 1px 0 #fbda8a, 1px 1px 0 #fbda8a;
            background: rgb(251,234,178);
            background: -moz-linear-gradient(top, rgba(251,234,178,1) 0%, rgba(252,226,167,1) 6%, rgba(253,219,148,1) 13%, rgba(252,217,136,1) 19%, rgba(251,216,134,1) 23%, rgba(250,214,120,1) 26%, rgba(248,212,116,1) 29%, rgba(243,199,94,1) 39%, rgba(238,187,78,1) 45%, rgba(235,185,74,1) 48%, rgba(233,177,64,1) 52%, rgba(219,163,52,1) 61%, rgba(208,152,43,1) 71%, rgba(204,150,44,1) 77%, rgba(209,155,49,1) 84%, rgba(214,161,55,1) 87%, rgba(215,162,56,1) 90%, rgba(220,167,61,1) 94%, rgba(212,159,53,1) 97%, rgba(220,167,61,1) 100%);
            background: -webkit-linear-gradient(top, rgba(251,234,178,1) 0%,rgba(252,226,167,1) 6%,rgba(253,219,148,1) 13%,rgba(252,217,136,1) 19%,rgba(251,216,134,1) 23%,rgba(250,214,120,1) 26%,rgba(248,212,116,1) 29%,rgba(243,199,94,1) 39%,rgba(238,187,78,1) 45%,rgba(235,185,74,1) 48%,rgba(233,177,64,1) 52%,rgba(219,163,52,1) 61%,rgba(208,152,43,1) 71%,rgba(204,150,44,1) 77%,rgba(209,155,49,1) 84%,rgba(214,161,55,1) 87%,rgba(215,162,56,1) 90%,rgba(220,167,61,1) 94%,rgba(212,159,53,1) 97%,rgba(220,167,61,1) 100%);
            background: linear-gradient(to bottom, rgba(251,234,178,1) 0%,rgba(252,226,167,1) 6%,rgba(253,219,148,1) 13%,rgba(252,217,136,1) 19%,rgba(251,216,134,1) 23%,rgba(250,214,120,1) 26%,rgba(248,212,116,1) 29%,rgba(243,199,94,1) 39%,rgba(238,187,78,1) 45%,rgba(235,185,74,1) 48%,rgba(233,177,64,1) 52%,rgba(219,163,52,1) 61%,rgba(208,152,43,1) 71%,rgba(204,150,44,1) 77%,rgba(209,155,49,1) 84%,rgba(214,161,55,1) 87%,rgba(215,162,56,1) 90%,rgba(220,167,61,1) 94%,rgba(212,159,53,1) 97%,rgba(220,167,61,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbeab2', endColorstr='#dca73d',GradientType=0 );
        }
    </style>
</head>
<body>
    @php
        $login_flag = Auth::guard('member')->guest();
        // dump($member);
    @endphp
    <div class="container">
            {{ csrf_field() }}
        <input type="hidden" name="money" id="money" value="@isset($member) {{$member->money}} @endisset " />
        <input type="hidden" name="j_username" id="username" value="@isset($member) {{$member->lottery28_id}} @endisset " />
        <input type="hidden" name="j_password" id="password" value="@isset($member) {{$member->lottery28_pass}} @endisset " />
        <input type="hidden" name="apiUser" id="apiUser" value="tw4d" />
        <input type="hidden" name="apiPass" id="apiPass" value="tw4d@win2017" />
        <div class="col-md-4 mx-auto form-inline" style="margin-top:100px; display:none">
            <label for="balance">Balance : </label>
            <input type="text" name="balance" class="form-control" id="balance" value="@isset($member) {{$member->lottery28_balance}} @endisset " readonly />
        </div>        
        <div class="button-group d-flex justify-content-around">
            <a href="#" class="btn-main" id="result">4D Result</a>
            <a data-toggle="modal" href="#myModal" class="btn-main">PageOut Table</a>
            <a href="#" id="playnow" class="btn-main" id="playnow">Play Now</a>
        </div>
        <div class="button-group d-flex justify-content-around" style="margin-top: 80px">
            <a href="#" class="btn-main" id="deposit">Deposit</a>
            <a href="#" class="btn-main" id="withdraw">Withdraw</a>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog" style="max-width:1100px">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{asset('web/images/lottery/pageout.jpg')}}" alt="">
                </div>           
            </div>
        </div>
    </div>
    <div id="ajax-loading" class="text-center" style="width: 100vw;height:100vh;position:fixed;top:0;display:none;opacity:0.3;background-color:black">
        <img class="mx-auto" src="{{asset('web/layer/skin/default/loading-2.gif')}}" alt="" style="margin:45vh auto;">
    </div>
    <script>
        $(document).ready(function(){

            var loggedin = "<?php echo $login_flag; ?>";
            var apiUser = $("#apiUser").val().trim();
            var apiPass = $("#apiPass").val().trim();
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();            
            var balance = $("#balance").val().trim();
            var _token = $("input[name='_token']").val().trim();
            if(loggedin != "1"){
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
                })
            }

            $("#playnow").on('click touchstart', function(){
                               
                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                if(parseFloat(balance) == 0 || balance == ""){
                    alert("Unfortunately, You can't bet lottery. Please deposit before bet.");
                    return false;
                }
                $.ajax({
                    url: "/lottery_28/play",
                    type: "GET",
                    success: function (response) {
                        window.location.href = response;
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        // window.location.href="https://vboss88.com/vboss/bet/show";
                    }
                });                               
            });

            $("#result").on('click touchstart', function(){

                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                $.ajax({
                    url: "/lottery_28/result",
                    type: "GET",
                    success: function (data) {
                        console.log(data);

                        window.location.href="https://api.28win.com/drawResult.aspx";
                        // window.location.href="https://vboss88.com/vboss/history/placeoutHistory";
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        window.location.href="https://vboss88.com/vboss/history/placeoutHistory";
                    }
                });                               
            });
            $("#pageout").on('click touchstart', function(){

                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                $.ajax({
                    url: "/lottery_28/result",
                    type: "GET",
                    success: function (data) {
                        console.log(data);

                        window.location.href="http://api.28win.com/module/Package/Package.aspx";
                        // window.location.href="https://vboss88.com/vboss/history/placeoutHistory";
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        window.location.href="http://api.28win.com/module/Package/Package.aspx";
                    }
                });                               
            });

            $("#deposit").on('click touchstart', function(){
                var money = $("#money").val().trim();
                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
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
                    url: "/lottery_28/setbalance",
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
                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                alert("Money : " + money);
                let amount = prompt('Do you want to Withdraw? Please type the correct Score!', '0');               
                
                $.ajax({
                    url: "/lottery_28/setbalance",
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
</body>
</html>