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
        <input type="hidden" name="money" id="money" value="@isset($member) {{$member->money}} @endisset " />
        <input type="hidden" name="j_username" id="username" value="@isset($member) {{$member->lottery_id}} @endisset " />
        <input type="hidden" name="j_password" id="password" value="@isset($member) {{$member->lottery_pass}} @endisset " />
        <div class="col-md-4 mx-auto form-inline" style="margin-top:100px; display:none">
            <label for="balance">Balance : </label>
            <input type="text" name="balance" class="form-control" id="balance" value="@isset($member) {{$member->lottery_balance}} @endisset " readonly />
        </div>        
        <div class="button-group d-flex justify-content-around">
            <a href="javascript:betHistory();" class="btn-main" id="result">4D Result</a>
            <a href="#" class="btn-main" id="pageout">PageOut Table</a>
            <a href="javascript:playNow();" class="btn-main" id="playnow">Play Now</a>
        </div>
        <div class="button-group d-flex justify-content-around" style="margin-top: 80px">
            <a href="javascript:deposit();" class="btn-main" id="deposit">Deposit</a>
            <a href="javascript:withdraw();" class="btn-main" id="withdraw">Withdraw</a>
        </div>
    </div>
    <div id="ajax-loading" class="text-center" style="width: 100vw;height:100vh;position:fixed;top:0;display:none;opacity:0.3;background-color:black">
        <img class="mx-auto" src="{{asset('web/layer/skin/default/loading-2.gif')}}" alt="" style="margin:45vh auto;">
    </div>
    <script>
        $(document).ready(function(){

            var loggedin = "<?php echo $login_flag; ?>";
            var username = $("#username").val().trim();
            var password = $("#password").val().trim();
            var money = $("#money").val().trim();
            var balance = $("#balance").val().trim();


            playNow = function(){
                               
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
                    url: "https://vboss88.com/vboss/j_security_check",
                    type: "POST",
                    crossDomain: true,
                    xhrFields: {
                        withCredentials: true
                    },
                    data: {j_username: username, j_password: password, login: "Login"},
                    success: function (response) {
                        window.location.href="https://vboss88.com/vboss/bet/show";
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        window.location.href="https://vboss88.com/vboss/bet/show";
                    }
                });                               
            };

            betHistory = function(){

                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                $.ajax({
                    url: "https://vboss88.com/vboss/j_security_check",
                    type: "POST",
                    crossDomain: true,
                    xhrFields: {
                        withCredentials: true
                    },
                    data: {j_username: username, j_password: password, login: "Login"},
                    success: function (response) {
                        window.location.href="https://vboss88.com/vboss/history/placeoutHistory";
                    },
                    error: function (xhr, status) {
                        // alert(status);
                        window.location.href="https://vboss88.com/vboss/history/placeoutHistory";
                    }
                });                               
            };

            deposit = function(){
                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                alert("Money : " + money);
                let score = prompt('Do you want to Deposit? Please type the correct Score!', '0');
                
                if(parseInt(score) > parseInt(money)){
                    alert("You don\'t have enough money!");
                    return false;
                }

                setscore(7, score, 0);
            }

            withdraw = function(){
                if(loggedin){
                    alert("Please Log in!");
                    return false;
                }
                if(username == '' || password == '' || username == 'error'){
                    alert("Unfortunately, You have not lottery account.");
                    return false;
                }
                alert("Money : " + money);
                let score = prompt('Do you want to Withdraw? Please type the correct Score!', '0');
                
                
                setscore(7, score, 1);
            }

            function setscore(api_id,score,mode) {
                $("#ajax-loading").show();
                $.ajax({
                    type: "GET",
                    url: "{{route('web.setscore')}}",
                    data: {api_id:api_id,game_id: username,game_pass:password, score: score,mode:mode},
                    success: function (data) {
                        $("#ajax-loading").hide();
                        
                        if(data == "error"){
                            alert("Unfortunately failed!");

                        }else if(data.indexOf("@@") != -1){
                            data = data.replace("@@","");
                            alert(data);
                        }else{
                            // $("#game_balance"+api_id).val(data);
                            alert("Succesfully Set!");
                            location.reload(true);
                        }
                    },
                    error: function(err){
                        $("#ajax-loading").hide();
                        alert("Unfortunately failed!");
                    }
                });
            }
        });
    </script>
</body>
</html>