@extends('wap.layouts.main')
@section('content')
    @extends('wap.layouts.header')
	<style>
	   .m_login .m_addUs, .m_register .m_addUs{
		   margin:0;
		   padding:0;
	   }
	   .m_login .m_addUs, .m_register .m_addUs{
		   text-align:right
	   }
	</style>
    <div class="m_container">
        <div class="m_body">
            <div class="m_login">
                <img src="{{ asset('/wap/images/bg_welcome_'.config('app.locale').'.jpg') }}" alt=""><br />
                <div class="m_login-form" style="margin-top:10px;">
                    <form id="loginForm"  action="{{ route('wap.login.post') }}" method="post">
					    <div class="m_addUs">                            
                            <a href="http://agent.tag777.com" class="m_btn-join" style="max-width: 150px">{{ __('mb.proxy_login') }}</a>
                            <a href="{{ route('wap.register') }}" class="m_btn-join" style="max-width: 150px">{{ __('mb.sign_up') }}</a>
                        </div>
                        <div class="m_login-field">
                            <input type="text" placeholder="{{ __('mb.account_number') }}"  id="username" name="name">
                        </div>
                        <div class="m_login-field">
                            <input type="password" placeholder="{{ __('mb.password') }}"  id="passwd" name="password">
                        </div>
                        <div class="m_login-field textRight">
                            <a href="javascript:;" class="m_forget-pwd">{{ __('mb.forget_password') }}</a>
                        </div>
                        <div class="m_login-field">
                            <input type="hidden" name="act" value="login">
                            <!-- <button type="button" class="m_login-submit ajax-submit-without-confirm-btn">{{ __('mb.sign_in') }}</button> -->
                            <button type="submit" class="m_login-submit ajax-submit-without-confirm-btn">{{ __('mb.sign_in') }}</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection