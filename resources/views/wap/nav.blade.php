@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <div class="m_container">
        <div class="m_body">
            <div class="m_userCenter">
                <div class="m_userCenter-title">{{ __('mb.Member_Centre') }}</div>
                <div class="m_userCenter-line"></div>
                <ul class="m_userCenter-list">
                    {{--<li>
                        <a href="{{ route('wap.transfer') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon1.png') }}" alt="">
                            额度转换
                        </a>
                    </li>--}}
                    <li>
                        <a href="{{ route('wap.recharge') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon2.png') }}" alt="">
                            {{ __('mb.Online_Deposit') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon3.png') }}" alt="">
                            {{ __('mb.Online_Withdraw') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.recharge_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon4.png') }}" alt="">
                            {{ __('mb.Deposit_History') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.drawing_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon5.png') }}" alt="">
                            {{ __('mb.Withdraw_History') }}
                        </a>
                    </li>
                   <!--  <li>
                        <a href="{{ route('wap.transfer_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon6.png') }}" alt="">
                           额度转换记录
                        </a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ route('wap.game_record') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon7.png') }}" alt="">
                            投注记录
                        </a>
                    </li> -->
					<!--
                    <li>
                        <a href="{{ route('wap.userinfo') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon8.png') }}" alt="">
                           {{ __('mb.Member_Profile') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.agent') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon9.png') }}" alt="">
                            {{ __('mb.Agent_Centre') }} 
                        </a>
                    </li>
					//-->
                    <li>
                        <a href="{{ route('wap.reset_password') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                           {{ __('mb.Change_Password') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('wap.msg') }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon10.png') }}" alt="">
                           {{ __('mb.Message') }} 
                        </a>
                    </li>
                    <li>
                        <a href="{{ $_system_config->service_link }}">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon11.png') }}" alt="">
                          {{ __('mb.Customer_Service') }}  
                        </a>
                    </li>
                    <li>
                        <a href="#" id="btn-proxy-register">
                            <img class="trade-icon" src="{{ asset('/wap/images/m_userCenter-icon11.png') }}" alt="">
                            {{ __('mb.proxy_register') }}  
                        </a>
                    </li>
                </ul>

                <a href="javascript:;" class="m_logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('mb.Log_Out') }}</a>
                <form id="logout-form" action="{{ route('wap.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <div class="modal modal-login modal-daili fade" id="proxyModal" role="dialog">
        <!-- Modal content-->
        <div class="modal-content" style="width:85%">
            <form method="POST" action="{{ route('member.post_agent_apply') }}">
                <a href="" class="close bg-icon"></a>
                <div class="modal-login_form">
                    <h2>{{ __('ft.Agent_application') }}</h2>
                    <div class="modal-login_line">
                        <input type="text" placeholder="ID" required name="qq">
                    </div>
                    <div class="modal-login_line">
                        <input type="text" placeholder="{{ __('ft.contact_number') }}" required name="phone">
                    </div>
                    <div class="modal-login_line" style="height: auto;margin-bottom: 15px">
                        <textarea name="about" placeholder="{{ __('ft.Fill_in_the_application') }}"></textarea>
                    </div>
                    <div class="modal-login_line">
                        <button class="modal-login_submit ajax-submit-btn" type="button">&nbsp;OK&nbsp;</button>
                    </div>
                </div>
            </form>
        </div> 
    </div>
@endsection

@section('after.js')
    <script>
        $(function(){
            $("#btn-proxy-register").click(function(){
                $("#proxyModal").modal();
            });
        });
    </script>
@endsection