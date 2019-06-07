<!DOCTYPE HTML>

<html lang="en">

<head>

<meta charset="utf-8">

<title>HTML5 Lobby</title>

<link rel="stylesheet" type="text/css" media="screen" href="{{asset('web/pt_sports/css/css1.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('web/pt_sports/css/css2.css')}}" />


<script type="text/javascript" src="https://login.luckydragon88.com/jswrapper/integration.js.php?casino=winforfun88"></script>

<script type="text/javascript">

var mobiledomain = "ld176988.com";
var systemidvar = "424";

</script>



<script type="text/javascript">

function getUrlVars() {

var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;

}

iapiSetCallout('GetTemporaryAuthenticationToken', calloutGetTemporaryAuthenticationToken);

function askTempandLaunchGame(game) {

currentgame = game;
var realMode = 1;

iapiRequestTemporaryToken(realMode, systemidvar, 'GamePlay');	

}

function launchMobileClient(temptoken) {
// var clientUrl = 'http://hub.' + mobiledomain + '/igaming/' + '?gameId=' + currentgame + '&real=1' + '&username=' + getUrlVars()["username"] + '&lang=' + document.getElementById("languageselect").gamelanguage.value + '&tempToken=' + temptoken + '&lobby=' + location.href.substring(0,location.href.lastIndexOf('/')+1) + 'lobby.html' + '&support=' + location.href.substring(0,location.href.lastIndexOf('/')+1) + 'support.html' + '&logout=' + location.href.substring(0,location.href.lastIndexOf('/')+1) + 'logout.html' + '&deposit=' + location.href.substring(0,location.href.lastIndexOf('/')+1) + 'deposit.html';
var clientUrl = 'http://hub.' + mobiledomain + '/igaming/' + '?gameId=' + currentgame + '&real=1' + '&username=' + getUrlVars()["username"] + '&lang=' + document.getElementById("languageselect").gamelanguage.value + '&tempToken=' + temptoken + '&lobby=htcmd:close&support=htcmd:close&logout=htcmd:close&deposit=htcmd:close';
document.location = clientUrl;
}

function calloutGetTemporaryAuthenticationToken(response) {

if (response.errorCode) {
alert("Token failed. " + response.playerMessage + " Error code: " + response.errorCode);
}

else {
launchMobileClient(response.sessionToken.sessionToken);
}

}


</script>

</head>

<body>

<center>
    <form id="languageselect">
        <select name="gamelanguage" id="gamelanguage">

        <option value="zh-cn">Simplified Chinese (zh-cn)</option>
        <option value="ch">Traditional Chinese (ch)</option>
        <option value="en">English (en)</option>
        <option value="es">Spanish (es)</option>
        <option value="ja">Japanese (ja)</option>
        <option value="ko">Korean (ko)</option>
        <option value="ru">Russian (ru)</option>
        <option value="it">Italian (it)</option>
        <option value="fr">French (fr)</option>

        </select>
    </form>
</center>

    <h2 style="margin-left:35px">Live Casino</h2>
    <div class="als-container" id="new2">
        <span class="als-prev"></span>
        <div class="als-viewport">
            <ul class="als-wrapper">
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ba')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ba.png')}}"><br>Baccarat</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bal')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ba.png')}}"><br>Baccarat Live</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('7bal')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ba.png')}}"><br>7 Seat Baccarat Live</li></a>
            </ul>
        </div>
        <span class="als-next"></span>
    </div>

    <h2 style="margin-left:35px">Roulette Games</h2>
    <div class="als-container" id="new2">
        <span class="als-prev"></span>
        <div class="als-viewport">
            <ul class="als-wrapper">
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('rodz_g')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/rodz_g.png')}}"><br>P. American</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ro_g')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ro_g.png')}}"><br>P. European</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mobro')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mobro.png')}}"><br>European Roulette</li></a>

            </ul>
        </div>
        <span class="als-next"></span>
    </div>
    
    <h2 style="margin-left:35px">All Slot</h2>
    <div class="als-container" id="new2">
        <span class="als-prev"></span>
        <div class="als-viewport">
            <ul class="als-wrapper">
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bs')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bs.png')}}"><br>Bai Shi</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('chao')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/chao.png')}}"><br>Chaoji 888</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fkmj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fkmj.png')}}"><br>Feng Kuang</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ftg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ftg.png')}}"><br>Five Tiger</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gemq')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gemq.png')}}"><br>Gem Queen</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('jqw')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/jqw.png')}}"><br>Jin Qian Wa</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('kfp')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/kfp.png')}}"><br>Liu Fu Shou</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('longlong')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/longlong.png')}}"><br>Long Long Long</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('qnw')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/qnw.png')}}"><br>Queen Of Wands</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ririjc')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ririjc.png')}}"><br>Ri Ri Jin Cai</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('sx')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/sx.png')}}"><br>Si Xiang</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('trpmnk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/trpmnk.png')}}"><br>Triple Monkey</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('wlcsh')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/wlcsh.png')}}"><br>Wu Lu Cai Shen</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('zctz')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/zctz.png')}}"><br>Zhao Cai Tong Zi</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hb.png')}}"><br>A Night Out</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashadv')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashadv.png')}}"><br>Adventures</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('aogs')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/aogs.png')}}"><br>Age of the Gods</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ftsis')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ftsis.png')}}"><br>AOG Fate Sisters</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('furf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/furf.png')}}"><br>AOG Furious 4</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('athn')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/athn.png')}}"><br>AOG Goddess</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('kolymp')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/kolymp.png')}}"><br>AOG King</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hrcls')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hrcls.png')}}"><br>AOG Prince</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashamw')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashamw.png')}}"><br>Amazon Wild</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('arc')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/arc.png')}}"><br>Archer</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('art')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/art.png')}}"><br>Arctic Treasure</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsatq')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsatq.png')}}"><br>Atlantis Queen</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('avng')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/avng.png')}}"><br>Avengers</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bl')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bl.png')}}"><br>Beach Life</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bt.png')}}"><br>Bermuda Triangle</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mobbj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mobbj.png')}}"><br>Blackjack</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bob')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bob.png')}}"><br>Bonus Bears</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashbob')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashbob.png')}}"><br>Bounty Beanstalk</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bfb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bfb.png')}}"><br>Buffalo Blitz</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('cam')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/cam.png')}}"><br>Captain America</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ct')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ct.png')}}"><br>Captains Treasure</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('cheaa')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/cheaa.png')}}"><br>Casino Hold 'Em</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ctiv')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ctiv.png')}}"><br>Cat In Vegas</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('catqc')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/catqc.png')}}"><br>Cat Queen</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('chl')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/chl.png')}}"><br>Cherry Love</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashcpl')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashcpl.png')}}"><br>Chests of Plenty</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('cm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/cm.png')}}"><br>Chinese Kitchen</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtscnb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtscnb.png')}}"><br>Cops N' Bandits</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtscbl')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtscbl.png')}}"><br>Cowboys Aliens</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('c7')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/c7.png')}}"><br>Crazy 7</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsdrdv')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsdrdv.png')}}"><br>Daring Dave</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mobdt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mobdt.png')}}"><br>Desert Treasure</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('dnr')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/dnr.png')}}"><br>Dolphin Reef</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('donq')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/donq.png')}}"><br>Don Quixote</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('dlm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/dlm.png')}}"><br>Dr Love More</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsdgk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsdgk.png')}}"><br>Dragon Kingdom</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('eas')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/eas.png')}}"><br>Easter Surprise</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('esm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/esm.png')}}"><br>Esmeralda</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('evj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/evj.png')}}"><br>Everybody's JP</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashfta')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashfta.png')}}"><br>Fairest</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fsf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fsf.png')}}"><br>Fantastic Four</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fcgz')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fcgz.png')}}"><br>Fei Cui Gong Zhu</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsflzt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsflzt.png')}}"><br>Fei Long Zai Tian</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsfc')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsfc.png')}}"><br>Football Carnival</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fbr')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fbr.png')}}"><br>Football Rules</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fow')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fow.png')}}"><br>Forest of Wonders</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('frtf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/frtf.png')}}"><br>Fortunate Five</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('foy')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/foy.png')}}"><br>Fountain of Youth</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fxf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fxf.png')}}"><br>Foxy Fortunes</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fdt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fdt.png')}}"><br>Frankie Dettori's</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fdtjg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fdtjg.png')}}"><br>Frankie Jackpot</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fmn')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fmn.png')}}"><br>Fruit Mania</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashfmf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashfmf.png')}}"><br>Full Moon</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fnfrj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fnfrj.png')}}"><br>Funky Fruits</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fff')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fff.png')}}"><br>Funky Fruits Farm</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('fm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/fm.png')}}"><br>Funky Monkey</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ges')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ges.png')}}"><br>Geisha Story</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('glrj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/glrj.png')}}"><br>Gladiator Jackpot</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashglss')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashglss.png')}}"><br>Glass Slipper</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('grel')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/grel.png')}}"><br>Gold Rally</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('glg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/glg.png')}}"><br>Golden Games</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gos')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gos.png')}}"><br>Golden Tour</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bib')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bib.png')}}"><br>Great Blue</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gro')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gro.png')}}"><br>Greatest Odyssey</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hlf')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hlf.png')}}"><br>Halloween F.</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hlf2')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hlf2.png')}}"><br>Halloween F. II</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hh')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hh.png')}}"><br>Haunted House</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashhotj')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashhotj.png')}}"><br>Heart of Jungle</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hk.png')}}"><br>Highway Kings</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gts50')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gts50.png')}}"><br>Hot Gems</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('hlk2')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/hlk2.png')}}"><br>Hulk</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ir')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ir.png')}}"><br>Ice Run</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('irl')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/irl.png')}}"><br>Irish Luck</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ir2')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ir2.png')}}"><br>Iron Man 2</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('irmn3')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/irmn3.png')}}"><br>Iron Man 3</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('jpgt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/jpgt.png')}}"><br>Jackpot Giant</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsjxb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsjxb.png')}}"><br>Ji Xiang 8</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsjhw')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsjhw.png')}}"><br>John Wayne</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('kkg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/kkg.png')}}"><br>Kong</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('lndg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/lndg.png')}}"><br>Land of Gold</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ght_a')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ght_a.png')}}"><br>Lie Yan Zuan Shi</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashlob')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashlob.png')}}"><br>Life of Brian</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('lm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/lm.png')}}"><br>Lotto Madness</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mgstk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mgstk.png')}}"><br>Magical Stacks</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtsmrln')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtsmrln.png')}}"><br>Marilyn Monroe</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mfrt')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mfrt.png')}}"><br>Miss Fortune</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('mrcb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/mrcb.png')}}"><br>Mr. Cashback</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('nk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/nk.png')}}"><br>Neptunes</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('nian')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/nian.png')}}"><br>Nian Nian You Yu</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('pmn')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/pmn.png')}}"><br>Panther Moon</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('pgv')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/pgv.png')}}"><br>Penguin Vacation</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('bjp')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/bjp.png')}}"><br>Perfect Blackjack</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('pst')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/pst.png')}}"><br>Pharaoh's Secrets</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('paw')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/paw.png')}}"><br>Piggies</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('pnp')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/pnp.png')}}"><br>Pink Panther</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtspor')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtspor.png')}}"><br>Plenty O'Fortune</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('phot')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/phot.png')}}"><br>Purple Hot</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('rky')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/rky.png')}}"><br>Rocky</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('rng2')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/rng2.png')}}"><br>Rome and Glory</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtssmbr')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtssmbr.png')}}"><br>Samba Brazil</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ssp')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ssp.png')}}"><br>Santa Surprise</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('samz')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/samz.png')}}"><br>Secrets of Amazon</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('shmst')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/shmst.png')}}"><br>Sherlock Mystery</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('sis')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/sis.png')}}"><br>Silent Samurai</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('sib')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/sib.png')}}"><br>Silver Bullet</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashsbd')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashsbd.png')}}"><br>Sinbad's</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('spidc')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/spidc.png')}}"><br>Spider Man</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('srcg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/srcg.png')}}"><br>Spud OReilly's</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('sol')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/sol.png')}}"><br>Streak of Luck</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('cnpr')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/cnpr.png')}}"><br>Sweet Party</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('tpd2')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/tpd2.png')}}"><br>Thai Paradise</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('tht')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/tht.png')}}"><br>Thai Temple</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('dcv')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/dcv.png')}}"><br>The Discovery</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('lvb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/lvb.png')}}"><br>The Love Boat</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('trm')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/trm.png')}}"><br>Thor</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ash3brg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ash3brg.png')}}"><br>Three Card Brag</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('tmqd')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/tmqd.png')}}"><br>Three Musketeers</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashtmd')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashtmd.png')}}"><br>Time for a Deal</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('topg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/topg.png')}}"><br>Top Gun</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('er')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/er.png')}}"><br>Vacation Station</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('vcstd')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/vcstd.png')}}"><br>Vacation Station D.</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gts52')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gts52.png')}}"><br>Vikingmania</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('whk')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/whk.png')}}"><br>White King</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtswg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtswg.png')}}"><br>Wild Gambler</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('ashwgaa')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/ashwgaa.png')}}"><br>Wild Gambler 2</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('wis')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/wis.png')}}"><br>Wild Spirit</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('gtswng')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/gtswng.png')}}"><br>Wings Of Gold</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('wlg')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/wlg.png')}}"><br>Wu Long</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('xmn50')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/xmn50.png')}}"><br>X-Men 50 Lines</li></a>
                <a href="javascript:void(0)" onClick="askTempandLaunchGame('zcjb')"><li class="als-item"><img src="{{asset('web/pt_sports/images/games/zcjb.png')}}"><br>Zhao Cai Jin Bao</li></a>

                    
            
            
            </ul>
        </div>
        <span class="als-next"></span>
    </div>

</body>
</html>
