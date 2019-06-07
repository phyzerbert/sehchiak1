@extends('wap.layouts.main')
@section('content')
    @include('wap.layouts.header')
    <style>
        .m_register .birthday {
            height: 40px;
            background: #272727;
            border: 1px solid #7f7f7f;
            margin-bottom: 10px;
            padding: 0 10px;
            box-sizing: border-box;
            color: #fff;
            font-size: 14px;
            outline: 0;
        }
    </style>
    <div class="m_container">
        <div class="m_body">
            <div class="m_login m_register">
                <img src="{{ asset('/wap/images/bg_welcome_'.config('app.locale').'.png') }}" alt="">
                <div class="m_login-form">
                    <form id="form1"  action="{{ route('wap.register.post') }}" method="post" name="form1">
                        <input type="hidden" name="i_code" value="{{ $i_code }}">
                        <div class="m_login-field">
                            <label for="">{{ __('mb.introducer') }}</label>
                            <input id="t_name" name="t_name" type="text">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.User_Name') }}</label>
                            <input id="zcname" name="name" type="text" placeholder="{{ __('mb.Username_6_8_characters') }}" minlength="6" maxlength="8">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.password') }}</label>
                            <input id="passwd" name="password" type="password" placeholder="{{ __('mb.password') }}" minlength="6" maxlength="12">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.again_password') }}</label>
                            <input id="passwdse" name="password_confirmation" type="password" placeholder="{{ __('mb.Enter_your_password_again') }}" minlength="6" maxlength="12">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.actual_name') }}</label>
                            <input id="realname" name="real_name" type="text" placeholder="{{ __('mb.Real_name_same_as_bank') }}" maxlength="30">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">{{ __('ft.birthday') }}</label>
                            <input id="birthday" name="birthday" type="hidden" placeholder="{{ __('ft.birthday') }}" autocomplete="off">
                            <div class="">
                                <select id="birth_day" class="col-xs-4 birthday" name="day" required placeholder="Day">
                                    <option value="">Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                    @endfor
                                </select>
                                <select id="birth_year" class="col-xs-4 birthday" name="year" required placeholder="Year">
                                    <option value="">Year</option>
                                    @for ($i = 1960; $i <= 2030; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                <select id="birth_month" class="col-xs-4 birthday" name="month" required placeholder="Month">
                                    <option value="">Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{str_pad($i, 2, '0', STR_PAD_LEFT)}}">{{str_pad($i, 2, '0', STR_PAD_LEFT)}}</option>
                                    @endfor
                                </select>                                
                            </div>
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.phone_number') }}</label>
                            <input id="phone" name="phone" type="text" placeholder="{{ __('mb.phone_number_placeholder') }}" autocomplete="off">
                        </div>
                        <div class="m_login-field">
                            <label class="m_need" for="">*{{ __('mb.withdrawals_password') }}</label>
                            <input id="paypasswd" name="qk_pwd" type="password" placeholder="{{ __('mb.Withdrawal_password_6_digit') }}" maxlength="6">
                        </div>
                        <div class="m_login-field captcha">
                            <label class="m_need" for="">*{{ __('mb.verification_code') }}</label>
                            <input id="captcha" name="captcha" type="text" placeholder="">
                            <a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}" id="c2c98f0de5a04167a9e427d883690ff6"></a>
                            <script>
                                function re_captcha() {
                                    $url = "{{ URL('kit/captcha') }}";
                                    $url = $url + "/" + Math.random();
                                    document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
                                }
                            </script>
                        </div>
                        <div class="m_login-field textRight">
                            <a href="{{ route('wap.login') }}" class="m_forget-pwd">{{ __('mb.existing_account') }} ? {{ __('mb.log_in_immediately') }}</a>
                        </div>
                        <div class="m_login-field">
                            <button type="submit" class="m_login-submit ajax-submit-btn">{{ __('mb.sign_up_now') }}</button>
                        </div>
                        <!--<div class="m_addUs">-->
                        <!--<a href="javascript:;" class="m_btn-join">免费加入</a>-->
                        <!--</div>-->

                        <div class="m_register-tips">
                            <h2>{{ __('mb.remarks') }}：</h2>
                            <p>1.{{ __('mb.marked_with') }} * {{ __('mb.are_required_fields') }}</p>
                            <p>2.{{ __('mb.withdrawal_password_limit') }}</p>
                            <p>3.{{ __('mb.bank_match_name') }}，{{ __('mb.cannot_withdraw_money') }}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('before.js')
    <script>
        $(function(){            
            $(".birthday").change(function(){
                let day = $("#birth_day").val();
                let month = $("#birth_month").val();
                let year = $("#birth_year").val();
                let birthday = year+"-" + month + "-" + day;
                $("#birthday").val(birthday);
            });
        });
    </script>
@endsection
