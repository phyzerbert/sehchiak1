@extends('web.layouts.api')

@section('style')
    <style>
        #main-buttons{
            background: url({{asset('web/images/poker/918kiss3.jpg')}}) no-repeat;  
            background-size: cover;
            height:100vh; 
            padding-top:120px;         
        }
        .type-img{
            width: 25px;
        }
        .my-label{
            text-align: right;
            color: whitesmoke;
            padding-right:10px;
            width: 50%;
            font-size: 16px;
        }
        .my-account{
            margin: 0 40px;
            padding-top: 30px;
            padding-bottom: 30px;
            border: 1px solid #333;
            background: rgba(0,0,0,0.4);
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="" id="main-buttons">
        {{ csrf_field() }}
        <input type="hidden" name="money" id="money" value="@isset($member) {{$member->money}} @endisset " />
        <div class="row p4-3 my-account">
            <div class="col-md-4">
                <label class="my-label">Username :</label>
                <span class="text-white w-50">@isset($member_api) {{$member_api->username}} @endisset</span>
            </div>
            <div class="col-md-4">
                <label class="my-label">Password :</label>
                <span class="text-white w-50">@isset($member_api) {{$member_api->password}} @endisset</span>
            </div>
            <div class="col-md-4">
                <label class="my-label">Balance :</label>
                <span class="text-white w-50" id="balance">@isset($member_api) {{$member_api->money}} @endisset</span>
            </div>
        </div>        
        <div class="button-group d-flex justify-content-around mt-5" style="">
            <a href="#" class="btn btn-primary btn-lg" id="deposit">Deposit</a>
            <a href="#" class="btn btn-info btn-lg" id="withdraw">Withdraw</a>
        </div>
    </div>    
@endsection

@section('afterjs')
    <script>
        $(document).ready(function(){          
            var balance = $("#balance").text().trim();
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
                    url: "/web918/setbalance",
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
                    url: "/web918/setbalance",
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