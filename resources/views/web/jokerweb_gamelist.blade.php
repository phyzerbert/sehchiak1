@extends('web.layouts.api')

@section('style')
    <style>
        body{
            background-size: cover;
            background-color: lightgrey;         
        }
        #game-lists ul{
            list-style: none;
        }
        #game-lists ul li{
           float: left;
        }
        .game-name{
            text-align: center;
            color: black;            
        }
        
    </style>
@endsection

@section('content')
    <h3 class="text-center py-5">Joker Web Game List</h3>
    <form action="{{$client_url}}" method="POST" id="loginform" data-id="{{$token}}"></form>
    <div class="container-fluid" id="game-lists">
        <ul>
            @foreach ($games as $item)            
                <li>
                    <a href="#" class="game" data-id="{{$item['GameCode']}}">
                        <img width="160" src="{{$item['Image1']}}" alt="">
                        <p class="game-name">{{$item['Code']}}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    
@endsection
@section('afterjs')
    <script>
        $(function(){
            $(".game").click(function(){
                let game_code = $(this).data('id');
                let domain = $("#loginform").attr('action');
                let token = $("#loginform").data('id');
                let url = domain + "?token=" + token + "&game=" + game_code + "&url=https://www.tag777.com";
                $("#loginform").attr('action', url);
                $("#loginform").submit();
            });
        })
    </script>
@endsection