<div class="m_header">
    <div class="m_container">
        <div class="pullLeft">
            <!-- <img class="logo" src="{{ $_system_config->m_site_logo }}" alt=""> -->            
            <a href="{{ route('web.index') }}">
                <img src="{{ asset('/web/images/oneone/logo_all.png') }}" style="height: 58px;margin-left: 10px;" alt="TAG777">
            </a>
        </div>
        <div class="pullRight m_header-info" style="color:#74000d;" >
            
            <!-- <a class="flag" href="{{URL('m/lang/zh_cn')}}" title="Chinese">
                <img src="{{ asset('/web/images/china.gif') }}" style="display: inline; width: 28px; height: 28px;">
            </a>
            <span>&nbsp;</span>
            <a class="flag" href="{{URL('m/lang/en')}}" title="English">
                <img src="{{ asset('/web/images/usa.gif') }}" style="display: inline; width: 28px; height: 28px;">
            </a>
            <span>&nbsp;</span>
            <a class="flag" href="{{URL('m/lang/malaya')}}" title="Malaya">
                <img src="{{ asset('/web/images/malay.png') }}" style="display: inlin; width: 28px; height: 28px;;">
            </a> -->
            @if (Auth::guard('member')->guest())
            @else
                <div>{{ $_member->name }}
                <strong>RM&nbsp;</strong><strong class="money">{{ $_member->money }}</strong></div>
            @endif
        </div>
    </div>
</div>
<div class="lang-picker">
    <select class="langpick selectpicker  fit-width">
        <option data-content="<img src='{{ asset('/web/images/usa.gif') }}'/> English"
        @if(config('app.locale') == 'en')
            selected
        @endif
        >{{ URL('lang/en') }}</option>
    
        <option data-content="<img src='{{ asset('/web/images/malay.png') }}'/> Malay"
        @if(config('app.locale') == 'malaya')
            selected
        @endif
        >{{ URL('lang/malaya') }}</option>
        <option data-content="<img src='{{ asset('/web/images/china.gif') }}'/> 简体中文"
        @if(config('app.locale') == 'zh_cn')
            selected
        @endif
        >{{URL('lang/zh_cn') }}</option>
    </select>
</div>
<script>
    @if (!Auth::guard('member')->guest())
    $(function () {
        $.ajax({
            type:'post',
            url : "{{route('member.api.wallet_balance')}}",
            dataType : 'json',
            success : function (data) {
                //console.log(data);
                if(data.statusCode == '01'){
                    var all = Number($('.money').text()) + Number(data.data);
                    // var all = Number($('.money').text());
                    $('.money').text('');
                    $('.money').text(all.toFixed(2));
                }
            }
        })
    })
    @endif
</script>