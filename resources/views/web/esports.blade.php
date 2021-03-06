@extends('web.layouts.main')
@section('content')

    <link rel="stylesheet" href="{{ asset('/web/css/sport.css') }}">
    <div id="banner"></div>
    <div class="notice-row" style="top: -110px;">
        <div class="noticeBox">
            <div class="w">
                <div class="title">
                   {{ __('ft.Latest_Announcement') }} ：
                </div>
                <div class="bd2">
                    <div id="memberLatestAnnouncement" style="cursor:pointer;color:#fff;">
                        <marquee id="mar0" scrollamount="4" direction="left" onmouseout="this.start()"
                                 onmouseover="this.stop()">
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
        <div class="wrapper">
            <section id="lobby" ng-controller="LobbiesCtrl" class="ng-scope">
                <ul class="game-list">
                    @if(in_array('GJ', $_api_list))
                        <li game-box="gj" class="no-margin"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=GJ&game_type=4','','width=1024,height=768')"
                            @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                        >
                            <p>{{ __('ft.Crown_sports') }}<span>CROWN SPORTS</span></p>
                        </li>
                    @endif
                    @if(in_array('SS', $_api_list))
                        <li game-box="ss"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=SS&game_type=4','','width=1024,height=768')"
                            @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                        >
                            <p>{{ __('ft.Sansheng_Sports') }}<span>SS SPORTS</span></p>
                        </li>
                    @endif
                    {{-- @if(in_array('IBC', $_api_list))
                    <li game-box="saba"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=IBC&game_type=4','','width=1024,height=768')"
                        @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                    >
                        <p>{{ __('ft.Sabah_Sports') }}<span>SABA SPORTS</span></p>
                    </li>
                    @endif --}}
                    @if(in_array('BBIN', $_api_list))
                    <li game-box="bb" class="no-margin"
                        @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=BBIN&game_type=4','','width=1024,height=768')"
                        @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                    >
                        <p>BBIN{{ __('ft.physical_education') }}<span>BBIN SPORTS</span></p>
                    </li>
                    @endif
                    @if(in_array('NEWBB', $_api_list))
                        <li game-box="newbb"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=NEWBB&game_type=4','','width=1024,height=768')"
                            @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                        >
                            <p>NEWBB{{ __('ft.physical_education') }}<span>NEWBB SPORTS</span></p>
                        </li>
                    @endif

                    @if(in_array('AG', $_api_list))
                        <li game-box="ag"
                            @if($_member) onclick="javascript:window.open('{{ route('ng.playGame') }}?plat_type=AG&game_type=4','','width=1024,height=768')"
                            @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                        >
                            <p>AG{{ __('ft.physical_education') }}<span>AG SPORTS</span></p>
                        </li>
                    @endif                    
                    @if(in_array('BC', $_api_list))
                    <li game-box="ss"
                            @if($_member) onclick="javascript:$('#sportsModal').modal()"
                            @else onclick="return layer.msg('{{__('ft.confirm_login')}}',{icon:6})" @endif
                        >
                            <p>BC SPORTS<span>BC Sports</span></p>
                        </li>
                    @endif
                    {{--<li game-box="more" class="no-margin"></li>--}}
                </ul>
            </section>
        </div>
    </div>

    <div class="modal" id="sportsModal" role="dialog">
        <div class="modal-content" style="width:50%;height:250px !important;padding:0;">
            <a href="" style="display: block;width:65%;position:absolute;top:0;left:0"
                @if($_member) onclick="javascript:window.open('{{ route('ballcrown.index', 'SP3') }}','','width=1200,height=720')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
            ><img src="{{ asset('/wap/images/sportevents/ibc.png') }}" height="250px" width="100%" alt=""></a>
            <a href="" style="display: block;width:65%;position: absolute;top:0;right:0"
                @if($_member) onclick="javascript:window.open('{{ route('ballcrown.index', 'SP2') }}','','width=1200,height=720')"
                @else onclick="location.href = '{{ route('wap.login') }}'" @endif
            ><img src="{{ asset('/wap/images/sportevents/sbo.png') }}" height="250px" width="100%" alt=""></a>        
        </div> 
    </div>

@endsection