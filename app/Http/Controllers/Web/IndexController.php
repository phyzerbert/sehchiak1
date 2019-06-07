<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Banners;
use App\Models\BlackListIp;
use App\Models\GameList;
use App\Models\MemberLoginLog;
use App\Models\Red;
use App\Models\TcgGameList;
use App\Models\Member;
use App\Models\MemberAPi;
use App\Models\SystemConfig;
use App\Models\SystemNotice;
use App\Models\NotificationToken;
use App\Models\TransactionHistory;
use App\Models\LotteryTransaction;
use App\Models\BallcrownTransaction;
use App\Models\PtvideoTransaction;
use App\Models\HotgameAccount;
use Illuminate\Http\Request;
use App\Traits\ValidationTrait;
use Auth;
use Session;
use App\Models\Api;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Api\SelfController;
use App\Http\Controllers\Api\ApiClientController;
use function GuzzleHttp\json_encode;
use Illuminate\Notifications\Notification;
use App\Services\SelfService;
use App\Services\CurlService;

class IndexController extends Controller
{
    public function __construct() {
        ini_set('max_execution_time', 3000000);
    }
    
    use ValidationTrait;
    public function index()
    {
        $do_main = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $do_main);
        if (count($arr) == 3 && $arr[0] == 'pc') {
            $con = SystemConfig::find(1);
            return redirect()->to($con->pic_link);
        }
        if (count($arr) == 2) {
            return redirect()->to('http://www.' . $do_main);
        }
        if (is_Mobile()) {
            return redirect()->to(route('wap.index'));
        }
        $system_notices = SystemNotice::where('on_line', 1)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        $banners = Banners::where('type', 1)->get();

        return view('web.index', compact('banners', 'system_notices'));
    }


    public function home(Request $request)
    {

        $do_main = $_SERVER['HTTP_HOST'];
        $arr = explode('.', $do_main);
        if (count($arr) == 3 && $arr[0] == 'pc') {
            $con = SystemConfig::find(1);
            return redirect()->to($con->pic_link);
        }
        if (count($arr) == 2) {
            return redirect()->to('http://www.' . $do_main);
        }
        if (is_Mobile()) {
            return redirect()->to(route('wap.index'));
        }

        $banners = Banners::where('type', 1)->get();
        $system_notices = SystemNotice::where('on_line', 1)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.home', compact('banners', 'system_notices'));
    }


    public function activityList(Request $request)
    {

        $mod = new Activity();
        $type = $request->get('type');
        if ($type) {
            $mod = $mod->where('type', $type);
        }
        $data = $mod->where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();

        return view('web.activityList', compact('data'));
    }

    public function register_player(Request $request)
    {
        $command = "adduserall.exe";


        // $fp = fopen('alyosha_test.txt', 'a+');
        // fwrite($fp, "shell_exec result: $answer\r\n");
        // if(isset($id) )     fwrite($fp, "DB::select result: $id\r\n");
        // fwrite($fp, "=============================================\r\n");
        $answer = shell_exec($command);
        $array = explode("|", $answer);

        $id = DB::select('SELECT MAX(id) AS max_id FROM members');


        if ($array[0] != "error") {
            $data['game_id1'] = $array[0];
            $data['game_pass1'] = $array[1];
        }
        // else{
        //     $hotgame_account = HotgameAccount::where('game_id', 1)->first();
        //     if($hotgame_account != NULL){
        //         $data['game_id1'] = $hotgame_account->username;
        //         $data['game_pass1'] = $hotgame_account->password;
        //         $hotgame_account->delete();
        //     }
        // }

        if ($array[2] != "error") {
            $data['game_id2'] = $array[2];
            $data['game_pass2'] = $array[3];
        }
        // else{
        //     $hotgame_account = HotgameAccount::where('game_id', 2)->first();
        //     if($hotgame_account != NULL){
        //         $data['game_id2'] = $hotgame_account->username;
        //         $data['game_pass2'] = $hotgame_account->password;
        //         $hotgame_account->delete();
        //     }
        // }

        if ($array[4] != "error") {
            $data['game_id3'] = $array[4];
            $data['game_pass3'] = $array[5];
        }
        // else{
        //     $hotgame_account = HotgameAccount::where('game_id', 3)->first();
        //     if($hotgame_account != NULL){
        //         $data['game_id3'] = $hotgame_account->username;
        //         $data['game_pass3'] = $hotgame_account->password;
        //         $hotgame_account->delete();
        //     }
        // }

        if ($array[6] != "error") {
            $data['game_id4'] = $array[6];
            $data['game_pass4'] = $array[7];
        }
        // else{
        //     $hotgame_account = HotgameAccount::where('game_id', 4)->first();
        //     if($hotgame_account != NULL){
        //         $data['game_id4'] = $hotgame_account->username;
        //         $data['game_pass4'] = $hotgame_account->password;
        //         $hotgame_account->delete();
        //     }
        // }

        if ($array[8] != "error") {
            $data['game_id5'] = $array[8];
            $data['game_pass5'] = $array[9];
        }
        // else{
        //     $hotgame_account = HotgameAccount::where('game_id', 5)->first();
        //     if($hotgame_account != NULL){
        //         $data['game_id5'] = $hotgame_account->username;
        //         $data['game_pass5'] = $hotgame_account->password;
        //         $hotgame_account->delete();
        //     }
        // }

        DB::table('members')->where('id', $request->id)->update($data);
        echo json_encode(array($answer, $id));
    }

    public function setscore(Request $request)
    {
        $api_id = $request->input('api_id');
        $game_id = $request->input('game_id');
        $game_pass = $request->input('game_pass');
        $score = $request->input('score');
        $mode = $request->input('mode');

        //  echo "Sorry, You can not play hotgames."."@@";
        //  exit;

        $member = auth('member')->user();
        if($member->money_lock == 1){
            echo "Now you can not set score. Please try again later.@@";
            exit;
        }

        $game_balance = array();
        $game_balance[1] = $member->game_balance1;
        $game_balance[2] = $member->game_balance2;
        $game_balance[3] = $member->game_balance3;
        $game_balance[4] = $member->game_balance4;
        $game_balance[5] = $member->game_balance5;
        $game_balance[6] = $member->game_balance6;


        if($mode == 0 && floatval($member->money) < floatval($score)) {// if deposit
            // validate between $score and your balance.
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $score) {
                $diff = floatval($score) - floatval($balance);
                if($main_wallet < $score) {
                    echo "@@".__('ft.notEnoughBalance');
                    exit;
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }
        
        $credit1 = floatval($member->money);
        if ($mode == 0) {
            $money1 = $credit1 - floatval($score);
        } else {
            $money1 = $credit1 + floatval($score);
        }
        $member->money = $money1;
        $member->money_lock = 1;
        $member->save();
        
        //$api_site = DB::table('ap_site')->where('id',$api_id)->get();
        
        $command = "setscore" . $api_id . ".exe " . $game_id . " " . $game_pass . " " . $score . " " . $mode;
        $answer = shell_exec($command);

        $member1 = Member::find($member->id);           
        if (strpos($answer, 'error') !== false) {
            
            $credit2 = floatval($member1->money);
            if ($mode == 0) {
                $money2 = $credit2 + floatval($score);
            } else {
                $money2 = $credit2 - floatval($score);
            }
            $member1->money = $money2;
            $member1->money_lock = 0;
            $member1->save();
            echo "error";
            exit;
        } else if (strpos($answer, '@@') !== false) { 
            $credit2 = floatval($member1->money);
            if ($mode == 0) {
                $money2 = $credit2 + floatval($score);
            } else {
                $money2 = $credit2 - floatval($score);
            }
            $member1->money = $money2;
            $member1->money_lock = 0;
            $member1->save();
            echo $answer;
            exit;
        } else {  
            $gb = $answer;
            if(strpos($answer, 'deposited_error') !== false){
                $answer = $game_balance[$api_id] + $score;
            }
            $deposit_amount = $withdraw_amount = 0;
            if ($mode == 0) {
                $type = "deposit";
                $amount = "+" . $score;
                $deposit_amount = $score;
            } else {
                $type = "withdraw";
                $amount = "-" . $score;
                $withdraw_amount = $score;
            }
            $data['game_balance' . $api_id] = $answer;
            $data['money_lock'] = 0;
            DB::table('members')->where('id', $member1->id)->update($data);
            TransactionHistory::create([
                'member_id' => $member1->id,
                'api_id' => $api_id,
                'game_id' => $game_id,
                'request' => $amount,                                
                'deposit_amount' => $deposit_amount,
                'withdraw_amount' => $withdraw_amount,
                // 'status' => $gb,
                'type' => $type
            ]);
            
            echo $answer;
            exit;
        }
        echo $answer;
    }

    public function activityDetail($id)
    {
        $data = Activity::where('on_line', 0)->where('id', $id)->first();

        return view('web.activityDetail', compact('data'));
    }

    public function liveCasino()
    {
        return view('web.liveCasino');
    }
    public function poker()
    {
        $member = auth('member')->user();
        if ($member == null) {
            return view('web.poker_nosign');
        } else {
            return view('web.poker', ['member' => $member]);
        }
    }
    public function pic()
    {
        return view('web.pic');
    }
    public function esports()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.esports', compact('system_notices'));
    }
    public function lottory()
    {
        $system_notices = SystemNotice::where('on_line', 0)->orderBy('sort', 'asc')->orderBy('created_at', 'desc')->get();
        return view('web.lottory', compact('system_notices'));
    }

    public function eGame(Request $request)
    {

        $api_name = $request->get('api_name') ? strtoupper($request->get('api_name')) : 'PT';

        if (in_array($api_name, [
            'CQ9',
            'DG',
            'IBC',
            'PNG',
            'TTG',
            'PT',
            'AB',
            'GG',
        ])) {
            $mod = new TcgGameList();

            //$api_mod = Api::where('api_name', $api_name)->first();

            $mod = $mod->where('productCode', $api_name);

            $gameName = '';

            if ($request->has('name')) {
                $gameName = $request->get('name');
                $mod = $mod->where('gameName', 'LIKE', "%$gameName%");
            }

            $game_list = $mod->where('on_line', 0)->where('platform', 'LIKE', "%flash%")->orderBy('sort', 'asc')->get();

            return view('web.eGame3', compact('game_list', 'gameName', 'api_name'));
        }

        $mod = new GameList();

        //$api_mod = Api::where('api_name', $api_name)->first();

        $mod = $mod->where('api_name', $api_name);

        $gameName = '';

        if ($request->has('name')) {
            $gameName = $request->get('name');
            $mod = $mod->where('name', 'LIKE', "%$gameName%");
        }

        $game_list = $mod->where('on_line', 0)->orderBy('sort', 'asc')->get();

        return view('web.eGame', compact('game_list', 'gameName', 'api_name'));
    }
    // ******************** Lottery_start *********************
    public function lottery_new(Request $request){
        $member = auth('member')->user();
        return view('web.lottery_new', compact('member'));
    }

    public function lottery_28(Request $request){
        $member = auth('member')->user();
        if (! isset($member->lottery28_id)) {
            $lottery28_user = $this->lottery28_create($member->name);
            // dd($lottery28_user);
            $member->lottery28_id = $lottery28_user["loginID"];
            $member->lottery28_pass = $lottery28_user["loginPass"];
            $member->save();
        }
        return view('web.lottery_28', compact('member'));
    }
    public function lottery28_create($username){

        $random_number = mt_rand(1000, 9999);
        $lottery28_id = $username.$random_number;
        $data = array(
            'apiUser' => 'tw4d',
            'apiPass' => 'tw4d@win2017',
            'user' => "tag777",
            'pass' => "123888",
            'loginID' => $lottery28_id,
            'loginPass' => "12345678",
            'fullName' => $username
        );        
        $url = "https://api.28win.com/createPlayer.aspx";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        if($xml->errorCode != "0"){
            return "error";
        }else{
            return $data;
        }
    }

    public function lottery28_play(Request $request){
        $member = auth('member')->user();
        $data = array(
            'apiUser' => 'tw4d',
            'apiPass' => 'tw4d@win2017',
            'user' => $member->lottery28_id,
            'pass' => $member->lottery28_pass
        );        
        $url = "https://api.28win.com/betLogin.aspx";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        if($xml->errorCode != "0"){
            echo "error";
        }else{
            $sessionID = $xml->sessionID;
            $tokenCode = $xml->tokenCode;
            echo 'https://api.28win.com/bet.aspx?user='.$member->lottery28_id."&sessionID=".$sessionID."&tokenCode=".$tokenCode;
        }
    }

    public function lottery28_result(Request $request){
        $member = auth('member')->user();
        $data = array(
            'apiUser' => 'tw4d',
            'apiPass' => 'tw4d@win2017',
            'user' => $member->lottery28_id,
            'pass' => $member->lottery28_pass
        );        
        $url = "https://api.28win.com/betLogin.aspx";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        if($xml->errorCode != "0"){
            echo "error";
        }else{
            $sessionID = $xml->sessionID;
            $tokenCode = $xml->tokenCode;
            echo 'https://api.28win.com/bet.aspx?user='.$member->lottery28_id."&sessionID=".$sessionID."&tokenCode=".$tokenCode;
            $data = array(
                'sessionID' => $sessionID,
                'tokenCode' => $tokenCode,
                'url' => $url,
            );
            echo json_encode($data);
        }
    }

    public function lottery28_setbalance(Request $request){
        $member = auth('member')->user();
        $type = $request->get('type');
        $amount = $request->get('amount');

        if($member->money_lock == 1){
            echo "Sorry, You can not play.Please try again later.";
            exit;
        }        

        if($type == "deposit") {// if deposit
            // validate between $score and your balance.
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit;
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                // dump($withdraw_casino_result);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }

        $data = array(
            'apiUser' => 'tw4d',
            'apiPass' => 'tw4d@win2017',
            'user' => "tag777",
            'pass' => "123888",
            'loginID' => $member->lottery28_id,
            'amount' => $request->get('amount')
        );        
        $url = "https://api.28win.com/".$type.".aspx";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        // dd($xml);
        if($xml->errorCode != "0"){
            echo "error";
        }else{
            $lottery_transaction = new LotteryTransaction();
            $lottery_transaction->member_id = $member->id;
            $lottery_transaction->api_id = 8;
            $lottery_transaction->game_id = $member->lottery28_id;
            $lottery_transaction->type = $type;
            $profile = $this->lottery28_getprofile();
            // echo json_encode($profile); die;
            $money = $member->money;
            if ($type=="deposit") {               
                $member->money = floatval($money) - floatval($amount);
                $lottery_transaction->request = "+".$amount;
                $lottery_transaction->deposit_amount = $amount;
            }else{
                $member->money = floatval($money) + floatval($amount);
                $lottery_transaction->request = "-".$amount;                
                $lottery_transaction->withdraw_amount = $amount;
            }
            if($profile->errorCode != "0"){
                $balance_28 = $member->lottery28_balance;
                $member->lottery28_balance = floatval($balance_28) + floatval($amount);
            }else{
                $member->lottery28_balance = $profile->balance;
            }
            $lottery_transaction->save();
            $member->money_lock = 0;
            $member->save();
            echo "success";
        }
    }
    
    public function lottery28_getprofile(){
        $member = auth('member')->user();
        $data = array(
            'apiUser' => 'tw4d',
            'apiPass' => 'tw4d@win2017',
            'user' => $member->lottery28_id,
            'pass' => $member->lottery28_pass
        );        
        $url = "https://api.28win.com/getProfile.aspx";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        if($xml->errorCode != "0"){
            return "error";
        }else{
            return $xml;
        }
    }



    // ************************* End Lottery28 *************************

    
    // ************************* Start BallCrown ***********************
    public function ballcrown($style = 'SP2'){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '301')->first();
        //dd($member_api);
        if (!$member_api)
        {
            $random_number = mt_rand(1000, 9999);
            $api_username = $member->name.$random_number;
            $data = $this->ballcrown_register($api_username);                
            if($data != 'error'){
                $member_api = MemberAPi::create([
                    'member_id' => $member->id,
                    'api_id' => 301,
                    'username' => $api_username,
                    'password' => $member->original_password
                ]);
                
            }                
        }
        return view('wap.ballcrown', compact('member', 'member_api', 'style'));             
    }

    public function ballcrown_register($username){
        $api_password = Api::where('api_name', 'BC')->first()->api_key;
        $data = array(
            'APIPassword' => $api_password,
            'MemberAccount' => $username,
            'NickName' => $username,
            'Currency' => "MYR"
        );        
        $url = "http://transferapi.bsodata.com/ThirdApi.asmx/Register";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        // dump($xml);die;
        if($xml->errcode != "000000"){
            return "error";
        }else{
            return $data;
        }
    }

    public function ballcrown_setbalance(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '301')->first();
        $type = $request->get('type');
        $amount = $request->get('amount');
        if(!$member_api){
            echo "error";
            exit;
        }

        if($member->money_lock == 1){
            echo "Sorry, You can not play.Please try again later.";
            exit;
        }
        
        if($type == "deposit" &&  floatval($member->money) < floatval($amount)) {// if deposit
            // validate between $score and your balance.
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit();
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }
        $random_number = mt_rand(100000, 999999);

        $api_password = Api::where('api_name', 'BC')->first()->api_key;
        $username = $member_api->username;
        $serial_number = $username.$random_number;
        if($type == "deposit"){$transfer_type = 0;}else if($type == "withdraw"){$transfer_type = 1;}
        $amount = number_format(floatval($amount), 4);
        $key = substr(md5($api_password.$username.$amount),-6);
        $data = array(
            'APIPassword' => $api_password,
            'MemberAccount' => $username,
            'SerialNumber' => $serial_number,
            'Amount' => $amount,
            'TransferType' => $transfer_type,
            'Key' => $key
        );
        
        $url = "http://transferapi.bsodata.com/ThirdApi.asmx/Transfer";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        // dump($xml);
        if($xml->errcode != "000000"){
            echo "error";
        }else{
            $ballcrown_transaction = new BallcrownTransaction();
            $ballcrown_transaction->member_id = $member->id;
            $ballcrown_transaction->game_id = $member_api->username;
            $ballcrown_transaction->serial_number = $serial_number;
            $ballcrown_transaction->type= $type;
            
            $money = $member->money;
            if ($type=="deposit") {               
                $member->money = floatval($money) - floatval($amount);
                $ballcrown_transaction->request = "+".$amount;
                $ballcrown_transaction->deposit_amount = $amount;
            }else{
                $member->money = floatval($money) + floatval($amount);
                $ballcrown_transaction->request = "-".$amount;
                $ballcrown_transaction->withdraw_amount = $amount;
            }
            $member_api->money = $xml->result->Balance;
            $member_api->save();
            $ballcrown_transaction->save();
            $member->save();
            echo "success";
        }
    }

    public function ballcrown_play(Request $request){
        $style = $request->get('style');
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '301')->first();
        $api_password = Api::where('api_name', 'BC')->first()->api_key;
        $username = $member_api->username;
        $webtype = is_Mobile() ? 'Smart' : 'PC';
        $data = array(
            'APIPassword' => $api_password,
            'MemberAccount' => $username,
            'GameID' => 1,
            'WebType' => $webtype,
            'LoginIP' => $request->ip(),
            'Language' => "EN",
            'PageStyle' => $style
        );    
        
        $url = "http://transferapi.bsodata.com/ThirdApi.asmx/Login";
        $curl = new CurlService();
        $result = $curl->get($url, $data);
        $xml=simplexml_load_string($result);
        // dump($xml);die;
        if($xml->errcode != "000000"){
            return "error";
        }else{
            return $xml->result;
        }
    }

    // ************************* End BallCrown ***********************

    // ************************ Start Joker Web **********************
    public function jokerweb(){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '302')->first();
            //dd($member_api);
            if (!$member_api)
            {
                $random_number = mt_rand(1000, 9999);
                $api_username = $member->name.$random_number;
                $data = $this->jokerweb_register($api_username);                
                if($data != 'error' || $data != 'exist'){
                    $member_api = MemberAPi::create([
                        'member_id' => $member->id,
                        'api_id' => 302,
                        'username' => $api_username
                    ]);
                    
                }                
            }
        return view('web.jokerweb', compact('member', 'member_api'));
    }

    public function jokerweb_register($username){
        $jokerweb_api = Api::where('api_name', 'JokerWeb')->first();
        $secret_key = $jokerweb_api->api_key;
        $app_id = Api::where('api_name', 'JokerWeb')->first()->api_id;
        $cdt = time();
        $method = "CU";
        $username = $username;
        $secret_key = "khtf1we5r3jqo";
        $signature = base64_encode(hash_hmac("sha1", "Method=".$method."&Timestamp=".$cdt."&Username=".$username, $secret_key, true));
        $signature = urlencode($signature);

        $data = array(
            'Method' => 'CU',
            'Timestamp' => $cdt,
            'Username' => $username
        );
        $url = $jokerweb_api->api_domain."?AppID=".$app_id."&Signature=".$signature;
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true);
        // dump($result);die;
        if($result['Status'] == "Created"){
            return $data;
        }else if ($result['Status'] == "OK"){
            return "exist";
        }else{
            return "error";
        }
    }

    public function jokerweb_setbalance(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '302')->first();
        $type = $request->get('type');
        $amount = $request->get('amount');
        if(!$member_api){
            echo "error";
            exit;
        }

        if($member->money_lock == 1){
            echo "Sorry, You can not play.Please try again later.";
            exit;
        }
        
        if($type == "deposit" &&  floatval($member->money) < floatval($amount)) {            
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit();
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }
        $random_number = mt_rand(100000, 999999);
        $score = $amount;
        if($type == "withdraw"){$amount = "-".$amount;}

        $jokerweb_api = Api::where('api_name', 'JokerWeb')->first();
        $secret_key = $jokerweb_api->api_key;
        $app_id = Api::where('api_name', 'JokerWeb')->first()->api_id;
        $username = $member_api->username;
        $cdt = time();
        $method = "TC";
        $requestID = $username.$random_number;
        $signature = base64_encode(hash_hmac("sha1", "Amount=".$amount."&Method=".$method."&RequestID=".$requestID."&Timestamp=".$cdt."&Username=".$username, $secret_key, true));
        $signature = urlencode($signature);
        $data = array(
            'Amount' => $amount,
            'Method' => $method,
            'RequestID' => $requestID,
            'Timestamp' => $cdt,
            'Username' => $username
        );
        $url = $jokerweb_api->api_domain."?AppID=".$app_id."&Signature=".$signature;
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true);
        // dump($result); die;
        if(isset($result['RequestID']) && $result['RequestID'] != $requestID){
            echo "error";
        }else{
            $money = $member->money;
            $deposit_amount = $withdraw_amount = 0;
            if ($type=="deposit") {               
                $member->money = floatval($money) - floatval($amount);
                $deposit_amount = $score;
                $amount = "+".$amount;
            }else{
                $member->money = floatval($money) + abs(floatval($amount));
                $withdraw_amount = $score;
            }
            TransactionHistory::create([
                'member_id' => $member->id,
                'api_id' => 6,
                'game_id' => $username,
                'request' => $amount,                                
                'deposit_amount' => $deposit_amount,
                'withdraw_amount' => $withdraw_amount,
                'type' => $type
            ]);
            $member_api->money = $result['Credit'];
            $member_api->save();
            $member->save();
            echo "success";
        }
    }

    public function jokerweb_gamelist(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '302')->first();
        $jokerweb_api = Api::where('api_name', 'JokerWeb')->first();
        $secret_key = $jokerweb_api->api_key;
        $app_id = Api::where('api_name', 'JokerWeb')->first()->api_id;
        $game_url = $jokerweb_api->api_domain;
        $username = $member_api->username;
        $cdt = time();
        // *** get GameList ***
        $method = "ListGames";
        $signature = base64_encode(hash_hmac("sha1", "Method=".$method."&Timestamp=".$cdt, $secret_key, true));
        $signature = urlencode($signature);
        $data = array(
            'Method' => $method,
            'Timestamp' => $cdt
        );
        $url = $game_url."?AppID=".$app_id."&Signature=".$signature;
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true);        
        $games = $result['ListGames'];
        // *** Request Token ***
        $method = "RT";
        $signature = base64_encode(hash_hmac("sha1", "Method=".$method."&Timestamp=".$cdt."&Username=".$username, $secret_key, true));
        $signature = urlencode($signature);
        $data = array(
            'Method' => $method,
            'Timestamp' => $cdt,
            'Username' => $username
        );
        $url = $game_url."?AppID=".$app_id."&Signature=".$signature;
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true); 
        $client_url = "http://www.gwc688.net/";
        $token = $result['Token'];
        return view('web.jokerweb_gamelist', compact('games', 'token', 'client_url'));
    }

    public function jokerweb_play($gamecode){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '302')->first();
        $jokerweb_api = Api::where('api_name', 'JokerWeb')->first();
        $secret_key = $jokerweb_api->api_key;
        $app_id = Api::where('api_name', 'JokerWeb')->first()->api_id;
        $username = $member_api->username;
        $cdt = time();
        // *** Request Token ***
        $method = "RT";
        $signature = base64_encode(hash_hmac("sha1", "Method=".$method."&Timestamp=".$cdt."&Username=".$username, $secret_key, true));
        $signature = urlencode($signature);
        $data = array(
            'Method' => $method,
            'Timestamp' => $cdt,
            'Username' => $username
        );
        $url = $jokerweb_api->api_domain."?AppID=".$app_id."&Signature=".$signature;
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true); 
        dump($result);
        $token = $result['Token'];
        $method = "";

    }



    // ************************ End Joker Web **********************


    // ************************ Start PT Video **********************
    public function pt_video(){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '303')->first();
            //dd($member_api);
            if (!$member_api)
            {
                $random_number = mt_rand(1000, 9999);
                $brandcode = Api::where('api_name', 'PT')->first()->prefix;
                $api_id = Api::where('api_name', 'PT')->first()->id;
                $username = $brandcode.$member->name.$random_number;
                $data = $this->pt_video_register(strtoupper($username));
                if($data != 'error'){
                    $member_api = MemberAPi::create([
                        'member_id' => $member->id,
                        'api_id' => $api_id,
                        'username' => $data['result']['playername'],
                        'password' => $data['result']['password'],
                    ]);                    
                }else{
                    echo "<script>alert('Error')</script>";
                }
            }
        return view('web.pt_video', compact('member', 'member_api'));
    }

    public function pt_video_register($username){
        $pt_video_api = Api::where('api_name', 'PT')->first();
        $entity_key = $pt_video_api->api_key;
        $api_username = $pt_video_api->api_username;
        $api_url = $pt_video_api->api_domain;
        $request_url = $api_url.'player/create/playername/'.$username.'/adminname/'.$api_username.'/kioskname/'.$api_username.'/countrycode/MY/viplevel/1/languagecode/EN/password/qwerty';
        // dump($request_url);die;
        $curl = new CurlService();
        $result = $curl->pt_video_request($request_url, $entity_key);        
        $response=json_decode($result, true);
        
        if($response['result']['playername']){
            return $response;
        }else{
            return "error";
        }
    }

    public function pt_video_deposit(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '303')->first();
        $username = $member_api->username;
        $amount = $request->get('amount');
        if(!$member_api || $member->money_lock == 1){
            echo "Sorry, You can not deposit.Please try again later.";
            exit;
        }
        
        if(floatval($member->money) < floatval($amount)) {
            // validate between $score and your balance.
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit();
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }

        $pt_video_api = Api::where('api_name', 'PT')->first();
        $entity_key = $pt_video_api->api_key;
        $api_username = $pt_video_api->api_username;
        $api_url = $pt_video_api->api_domain;
        $request_url = $api_url.'player/deposit/playername/'.$username.'/amount/'.$amount.'/adminname/'.$api_username;
        // dump($request_url);die;
        $curl = new CurlService();
        $result = $curl->pt_video_request($request_url, $entity_key);        
        $response=json_decode($result, true);
        // dump($response);die;
        if($response['result']['result'] == 'Deposit OK'){
            $pt_video_transaction = new PtvideoTransaction();
            $pt_video_transaction->member_id = $member->id;
            $pt_video_transaction->game_id = $member_api->username;
            $pt_video_transaction->type= 'deposit';
            $pt_video_transaction->request = "+".$amount;
            $pt_video_transaction->deposit_amount = $amount;
            
            $money = $member->money;             
            $member->money = floatval($money) - floatval($amount);
            
            
            $member_api->money = $response['result']['currentplayerbalance'];
            $member_api->save();
            $pt_video_transaction->save();
            $member->save();
            echo "success";
        }else{
            return "error";
        }
    }

    public function pt_video_withdraw(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '303')->first();
        $username = $member_api->username;
        $amount = $request->get('amount');
        if(!$member_api || $member->money_lock == 1){
            echo "Sorry, You can not deposit.Please try again later.";
            exit;
        }

        $pt_video_api = Api::where('api_name', 'PT')->first();
        $entity_key = $pt_video_api->api_key;
        $api_username = $pt_video_api->api_username;
        $api_url = $pt_video_api->api_domain;
        $request_url = $api_url.'player/withdraw/playername/'.$username.'/amount/'.$amount.'/adminname/'.$api_username;
        // dump($request_url);die;
        $curl = new CurlService();
        $result = $curl->pt_video_request($request_url, $entity_key);        
        $response=json_decode($result, true);
        // dump($response);die;
        if($response['result']['result'] == 'Withdraw OK'){
            $pt_video_transaction = new PtvideoTransaction();
            $pt_video_transaction->member_id = $member->id;
            $pt_video_transaction->game_id = $member_api->username;
            $pt_video_transaction->type= 'withdraw';
            $pt_video_transaction->request = "-".$amount;
            $pt_video_transaction->withdraw_amount = $amount;
            
            $money = $member->money;             
            $member->money = floatval($money) + floatval($amount);
            
            $member_api->money = $response['result']['currentplayerbalance'];
            $member_api->save();
            $pt_video_transaction->save();
            $member->save();
            echo "success";
        }else{
            return "error";
        }
    }
    // ************************ End PT Video **********************

    // ************************ Start 918Web **********************

    public function web918(){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '304')->first();
        //dd($member_api);
        if (!$member_api)
        {
            $data = $this->web918_register();                
            if($data != 'error' || $data != 'exist'){
                // dump($data);die;
                $member_api = MemberAPi::create([
                    'member_id' => $member->id,
                    'api_id' => 304,
                    'username' => $data['userName'],
                    'password' => $data['PassWd'],
                ]);                    
            }                
        }
        return view('web.web918', compact('member', 'member_api'));
    }

    public function web918_register(){
        $member = auth('member')->user();
        $web918_api = Api::where('api_name', 'Web918')->first();
        $secret_key = $web918_api->api_key;
        $username = $web918_api->api_username;
        // $cdt = intval(round(microtime(true)*1000));
        $cdt =time()."000";
        $authcode = $web918_api->api_token;
        $lower = strtolower($username.$authcode.$username.$cdt.$secret_key);
        $sign = strtoupper(md5($lower));

        $data = array(
            'loginUser' => $username,
            'action' => 'RandomUserName',
            'userName' => $username,
            'time' => $cdt,
            'authcode' => $authcode,
            'sign' => $sign,
        );
        $url = $web918_api->api_domain."/ashx/account/account.ashx";
        $curl = new CurlService();
        $response = $curl->get($url, $data);        
        $result=json_decode($response, true);
        if($result['success'] != true){
            return "error";
        }else{            
            $playername = $result['account'];
            $sign = strtoupper(md5(strtolower($authcode.$playername.$cdt.$secret_key)));
            $data = array(
                'action' => 'AddPlayer',
                'agent' => $username,
                'PassWd' => "Ab113344",
                'pwdtype' => 1,
                'userName' => $playername,
                'Name' => $member->name,
                'Tel' => "123456789017",
                'Memo' => 'Tag777Player',
                'UserType' => 1,
                'time' => $cdt,
                'authcode' => $authcode,
                'sign' => $sign,
            );
            $curl = new CurlService();
            $response = $curl->get($url, $data);        
            $result = json_decode($response, true);
            if($result['success'] != true){
                return "error";
            }else{ 
                return $data;
            }
        }
    }

    public function web918_agent_setbalance(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '304')->first();
        $web918_api = Api::where('api_name', 'Web918')->first();
        $type = $request->get('type');
        $amount = $request->get('amount');
        if(!$member_api){
            echo "error";
            exit;
        }

        if($member->money_lock == 1){
            echo "Sorry, You can not play.Please try again later.";
            exit;
        }
        
        if($type == "deposit" &&  floatval($member->money) < floatval($amount)) {            
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit();
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }

        $random_number = mt_rand(100000, 999999);
        $score = $amount;
        if($type == "withdraw"){$amount = "-".$amount;}

        $secret_key = $web918_api->api_key;
        $agent = $web918_api->api_username;
        $username = $member_api->username;
        $cdt =time()."000";
        $authcode = $web918_api->api_token;
        $url = $web918_api->api_domain."/ashx/account/account.ashx";
        $sign = strtoupper(md5(strtolower($authcode.$username.$cdt.$secret_key)));
        
        $data = array(
            'action' => 'setServerScore',
            'orderid' => microtime(),
            'scoreNum' => $amount,
            'userName' => $username,
            'ActionUser' => $agent,
            'ActionIp' => $_SERVER['REMOTE_ADDR'],
            'time' => $cdt,
            'authcode' => $authcode,
            'sign' => $sign,
        );
        $url = $web918_api->api_domain."/ashx/account/setScore.ashx";
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true);
        dump($result); die;
        if(isset($result['RequestID']) && $result['RequestID'] != $requestID){
            echo "error";
        }else{
            $money = $member->money;
            $deposit_amount = $withdraw_amount = 0;
            if ($type=="deposit") {               
                $member->money = floatval($money) - floatval($amount);
                $deposit_amount = $score;
                $amount = "+".$amount;
            }else{
                echo floatval($money) + floatval($amount);
                $member->money = floatval($money) + floatval($amount);
                $withdraw_amount = $score;
            }
            TransactionHistory::create([
                'member_id' => $member->id,
                'api_id' => 6,
                'game_id' => $username,
                'request' => $amount,                                
                'deposit_amount' => $deposit_amount,
                'withdraw_amount' => $withdraw_amount,
                'type' => $type
            ]);
            $member_api->money = $result['Credit'];
            $member_api->save();
            $member->save();
            echo "success";
        }
    }


    public function web918_setbalance(Request $request){
        $member = auth('member')->user();
        $member_api = $member->apis()->where('api_id', '304')->first();
        $web918_api = Api::where('api_name', 'Web918')->first();
        $type = $request->get('type');
        $amount = $request->get('amount');
        if(!$member_api){
            echo "error";
            exit;
        }

        if($member->money_lock == 1){
            echo "Sorry, You can not play.Please try again later.";
            exit;
        }
        
        if($type == "deposit" &&  floatval($member->money) < floatval($amount)) {            
            $casino_wallet = (new SelfService())->wallet_balance($member->name);
            $res = json_decode($casino_wallet, true);
            if (!is_array($res)) {
                echo "error";
                exit;
            }
            $casino_balance = $res['data'];
            $balance =$member->money;
            $main_wallet = floatval($balance) + floatval($casino_balance);
            if ($balance < $amount) {
                $diff = floatval($amount) - floatval($balance);
                if($main_wallet < $amount) {
                    echo "error";
                    exit();
                }
                $withdraw_casino_result = (new ApiClientController())->withdraw($diff);
                if (!is_array($withdraw_casino_result)) {
                    echo "error";
                    exit;
                }
            }
        }

        $random_number = mt_rand(100000, 999999);
        $score = $amount;
        if($type == "withdraw"){$amount = "-".$amount;}

        $secret_key = $web918_api->api_key;
        $agent = $web918_api->api_username;
        $username = $member_api->username;
        $cdt =time()."000";
        $authcode = $web918_api->api_token;
        $url = $web918_api->api_domain."/ashx/account/account.ashx";
        $sign = strtoupper(md5(strtolower($authcode.$username.$cdt.$secret_key)));
        
        $data = array(
            'action' => 'setServerScore',
            'orderid' => time().$member->name,
            'scoreNum' => $amount,
            'userName' => $username,
            'ActionUser' => $agent,
            'ActionIp' => $_SERVER['REMOTE_ADDR'],
            'time' => $cdt,
            'authcode' => $authcode,
            'sign' => $sign,
        );
        // dump($data);
        $url = $web918_api->api_domain."/ashx/account/setScore.ashx";
        $curl = new CurlService();
        $response = $curl->post($url, $data);        
        $result=json_decode($response, true);
        // dump($result); die;
        if(!$result['success']){
            echo "error";
        }else{
            $money = $member->money;
            $deposit_amount = $withdraw_amount = 0;
            if ($type=="deposit") {               
                $member->money = floatval($money) - floatval($amount);
                $deposit_amount = $score;
                $amount = "+".$amount;
            }else{
                $member->money = floatval($money) + abs(floatval($amount));
                $withdraw_amount = $score;
            }
            TransactionHistory::create([
                'member_id' => $member->id,
                'api_id' => 7,
                'game_id' => $username,
                'request' => $amount,                                
                'deposit_amount' => $deposit_amount,
                'withdraw_amount' => $withdraw_amount,
                'type' => $type
            ]);
            $member_api->money = $result['money'];
            $member_api->save();
            $member->save();
            echo "success";
        }
    }

    public function web918_agentlist(){
        $member = auth('member')->user();
        $web918_api = Api::where('api_name', 'Web918')->first();
        $secret_key = $web918_api->api_key;
        $username = $web918_api->api_username;
        // $cdt = intval(round(microtime(true)*1000));
        $cdt =time()."000";
        $authcode = $web918_api->api_token;
        $sign = strtoupper(md5(strtolower($authcode."01080539017".$cdt.$secret_key)));

        $data = array(
            'action' => 'getSearchUserInfo',
            'userName' => "01080539017",
            // 'Flag' => 0,
            // 'PassWd' => '',
            // 'pwdtype' => 1,
            // 'Name' => 'baby114',
            // 'MoneyNum' => '1000',
            // 'Memo' => 'Tag777Player',
            // 'maxsetmoney' => 1000,
            'time' => $cdt,
            'authcode' => $authcode,
            'sign' => $sign,
        );
        $url = $web918_api->api_domain."/ashx/account/account.ashx";
        $curl = new CurlService();
        $response = $curl->get($url, $data);        
        $result=json_decode($response, true);
        dump($result);die;
        if($result['success'] != true){
            return "error";
        }else{            
            $playername = $result['account'];
            $sign = strtoupper(md5(strtolower($authcode.$playername.$cdt.$secret_key)));
            $data = array(
                'action' => 'AddPlayer',
                'agent' => $username,
                'PassWd' => "Ab113344",
                'pwdtype' => 1,
                'userName' => $playername,
                'Name' => $member->name,
                'Tel' => "123456789017",
                'Memo' => 'Tag777Player',
                'UserType' => 1,
                'time' => $cdt,
                'authcode' => $authcode,
                'sign' => $sign,
            );
            $curl = new CurlService();
            $response = $curl->get($url, $data);        
            $result = json_decode($response, true);
            if($result['success'] != true){
                return "error";
            }else{ 
                return $data;
            }
        }
    }






    public function catchFish()
    {
        return view('web.catchFish');
    }
    public function hongbao()
    {
        return view('web.hongbao');
    }

    public function novice_guidance()
    {
        return view('web.novice_guidance');
    }

    public function maintain()
    {
        $mod = SystemConfig::findOrFail(1);
        if ($mod->is_maintain == 0)
            return redirect()->to(route('web.index'));

        $str = $mod->maintain_desc;
        return view('web.maintain', compact('str'));
    }

    public function register_one(Request $request)
    {
        $i_code = $request->get('i');
        if (is_Mobile()) {
            return redirect()->to(route('wap.register') . '?i=' . $i_code);
        }

        $register_name = $request->has('register_name') ? $request->get('register_name') : '';

        return view('web.register_one', compact('i_code', 'register_name'));
    }
    public function login(Request $request)
    {
        return view('web.login');
    }

    public function post_register_one(Request $request)
    {

        $data = $request->all();
        $phone = trim($data['phone']);
        if(!preg_match('/^\+*[0-9]{8,14}$/', $phone)) {
            return responseWrong(__('ft.phone_number_error'));
        }

        if (!session('milkcaptcha') || session('milkcaptcha') != $request->get('captcha'))
            return responseWrong(__('ft.Verification_code_error'));

        $validator = $this->verify($request, 'member.register_one');

        if ($validator->fails())
            return responseWrong($validator->messages()->toArray());

        //验证ip
        if (in_array($request->getClientIp(), BlackListIp::pluck('ip')->toArray()))
            return responseWrong('该ip限制，请联系客服');

        //必须以字母开头
        if (!preg_match('/^[a-z]+$/', substr((string)$request->get('name'), 0, 1)) || !preg_match('/^[0-9a-z]+$/', $request->get('name')))
            return responseWrong('用户名只能以小写字母开头且字母数字组合');
            

        if (strlen((string)$request->get('qk_pwd')) != 6) {
            return responseWrong('取款密码为6位纯数字');
        }

        $name = trim($data['name'], ' ');
        $pwd = trim($data['password'], ' ');
        $i_code = isset($data['i_code']) ? trim($data['i_code'], ' ') : '';

        $dali_mod = '';
        //判断域名
        $do_main = $_SERVER['HTTP_HOST'];
        $m = Member::where('is_daili', 1)->where('agent_uri', $do_main)->first();
        if ($m) {
            $dali_mod = $m;
        } elseif ($request->has('i_code')) {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('i_code'))->first();
        } elseif ($request->has('t_name')) {
            // $dali_mod = Member::where('is_daili', 1)->where('name', $request->get('t_name'))->first();
            $dali_mod = Member::where('name', $request->get('t_name'))->first();
        }
        if($dali_mod){
            $dali_mod->is_daili = 1;
            $dali_mod->save();
        }

        Member::create([
            'name' => $name,
            'original_password' => substr(md5(md5($name)), 0, 10),
            'o_password' => $pwd,
            'password' => bcrypt($pwd),
            'phone' => $phone,
            'invite_code' => getRandom(7),
            'top_id' => $dali_mod ? $dali_mod->id : 0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => getIp(),
            'real_name' => $data['real_name'],
            'birthday' => $data['birthday'],
        ]);
            // dump($member);die;
        // $this->gethotgameaccount($member->id);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
            $member = auth('member')->user();
//            $member->update([
//                'is_login' => 1
//            ]);            
            $member->last_session = Session::getId();
            $member->save();
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => getIp()
            ]);
           
            return responseSuccess($member->id, __('ft.login_success'), route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_two') . "?register_name=$name&pwd=$pwd&i_code=$i_code");
    }

    public function register_two(Request $request)
    {
        $register_name = $request->get('register_name');
        $pwd = $request->get('pwd');
        $i_code = $request->get('i_code');

        return view('web.register_two', compact('register_name', 'pwd', 'i_code'));
    }

    public function post_register_two(Request $request)
    {
        $validator = $this->verify($request, 'member.register_two');

        if ($validator->fails()) {
            $messages = $validator->messages()->toArray();
            return responseWrong($messages);
        }

        $data = $request->all();

        //判断是否为代理邀请注册
        $dali_mod = '';
        if ($request->has('invite_code')) {
            $dali_mod = Member::where('is_daili', 1)->where('invite_code', $request->get('invite_code'))->first();
        }

        Member::create([
            'name' => $data['name'],
            'original_password' => substr(md5(md5($data['name'])), 0, 10),
            'password' => bcrypt($data['password']),
            'invite_code' => str_random(7),
            'real_name' => $data['real_name'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'qq' => $data['qq'],
            'email' => $data['email'],
            'top_id' => $dali_mod ? $dali_mod->id : 0,
            'qk_pwd' => $data['qk_pwd'],
            'register_ip' => $request->getClientIp()
        ]);

        if (Auth::guard('member')->attempt(['name' => $data['name'], 'password' => $data['password']])) {
            $member = auth('member')->user();
            $member->update([
                'is_login' => 1
            ]);
            MemberLoginLog::create([
                'member_id' => $member->id,
                'ip' => $request->getClientIp()
            ]);
            return responseSuccess('', '登录成功', route('member.userCenter'));
        }

        return responseSuccess('', '', route('web.register_success'));
    }

    public function register_success(Request $request)
    {
        return view('web.register_success');
    }

    public function syncTpl($name)
    {
        return view('web.member.' . $name);
    }

    public function red_index()
    {
        $red = Red::where('on_line', 0)->orderBy('sort', 'asc')->get();
        return view('web.hongbao', compact('red'));
    }

    public function translate($locale)
    {
        if (!in_array($locale, ['en', 'zh_cn', 'malaya'])) {
            $locale = 'zh_cn';
        }
        Session::put('locale', $locale);
        return redirect('/');

    }

    public function tokenSave(Request $request) {
        $token = $request->input("token");
        if($token) {
            $oldToken_data = NotificationToken::where("token", $token)->get();
            if(count($oldToken_data) == 0) {
                NotificationToken::create([
                    "token" => $token
                ]);
                echo "success";
            }
        }
    }

}