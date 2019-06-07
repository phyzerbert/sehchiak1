@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
<style>
    .act li {
        margin-left: 10px;
        float: left;
        margin-top: 5px;
    }
    .act a span {
        background: #2b2122 none repeat scroll 0 0;
        border-bottom: 3px solid #36304a;
        border-radius: 5px;
        border-right: 3px solid #36304a;
        color: #8e6d31;
        display: block;
        font-size: 13px;
        line-height: 30px;
        text-align:center;
        margin-top: 4px;
        cursor: pointer;
    }
    .act li span.ok, .act li span:hover {
        color: #f6d768;
        font-weight: bold;
    }
    .promotion-body{
        padding:66px 15px 55px;
        height: 100vh;
        background-color: #74000d;
    }
    .promotion-image{
        margin-top: 5px;;
    }
</style>
    <div class="promotion-body">
        <div class="row">
            <div class="col-xs-6 act">
                <a href="{{route('wap.activity_list')}}">
                    <span @if ( !request()->get('type') )class="ok" @endif>{{ __('ft.All_activities') }}</span>
                </a>
            </div>
            @foreach(config('platform.activity_type') as $k => $v)
                <div class="col-xs-6 act">
                    <a href="{{route('wap.activity_list',['type'=>$k])}}">
                        <span @if (request() -> get('type') == $k)class="ok" @endif>{{ __($v) }}</span>
                    </a>
                </div>
            @endforeach
        </div>   
        <div class="row">
            @foreach($data as $k => $item)
                @php
                    $img_path = $item->title_img_en;
                    if(config('app.locale') == 'malaya' && $item->title_img_malaya != ''){
                        $img_path = $item->title_img_malaya;
                    }else if (config('app.locale') == 'zh_cn' && $item->title_img_zh_cn != ''){
                        $img_path = $item->title_img_zh_cn;
                    }
                @endphp
                <div class="col-xs-12 promotion-image">
                    <a href="{{ route('wap.activity_detail', ['id' => $item->id]) }}">
                        <img src="{{ $img_path }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection