<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TransactionHistory;
use App\Models\LotteryTransaction;
use App\Models\BallcrownTransaction;
use App\Models\PtvideoTransaction;
use App\Models\HotgameAccount;
use App\Models\ApSite;
use App\Models\Member;
use DB;

class TransactionHistoryController extends AdminBaseController
{
    public function index(Request $request){

        $mod = new TransactionHistory();
        $playerName = $start_at = $end_at = $api_type = '';
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $mod = $mod->where('api_id', $api_type);
        }
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');
            $players = Member::select('id')->where('name', 'like', "%$playerName%")->get()->toArray();
            $player_list = array();
            foreach ($players as $item) {
                array_push($player_list, $item['id']);
            }
            $mod = $mod->whereIn('member_id', $player_list);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }       
        
        $api_list = ApSite::all();
        $all_histories = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        $total_deposit = $mod->where('type', 'deposit')->sum('request');
        $total_withdraw = $mod->where('type', 'withdraw')->sum('request');
        // $total_deposit = $mod->sum('deposit_amount');
        // $total_withdraw = $mod->sum('withdraw_amount');
        return view('admin.tran_history.index', compact('all_histories', 'total_deposit', 'total_withdraw', 'api_list', 'api_type', 'playerName', 'start_at', 'end_at'));
    }

    public function show(Request $request){

        $mod = new LotteryTransaction();
        $playerName = $start_at = $end_at = $api_type = '';
        if ($request->has('api_type'))
        {
            $api_type = $request->get('api_type');
            $mod = $mod->where('api_id', $api_type);
        }
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');
            $players = Member::select('id')->where('name', 'like', "%$playerName%")->get()->toArray();
            $player_list = array();
            foreach ($players as $item) {
                array_push($player_list, $item['id']);
            }
            $mod = $mod->whereIn('member_id', $player_list);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }        
        
        $api_list = ApSite::all();

        $all_histories = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        $total_deposit = $mod->sum('deposit_amount');
        $total_withdraw = $mod->sum('withdraw_amount');

        return view('admin.lottery_transaction.index', compact('all_histories', 'total_deposit', 'total_withdraw', 'api_list', 'api_type', 'playerName', 'start_at', 'end_at'));
    }

    public function hotgame_account_index(Request $request){
        
        $accounts =HotgameAccount::paginate(config('admin.page-size'));
        // $accounts =HotgameAccount::all();
        $failed_users = Member::where('game_id1', NULL)->orWhere('game_id2', NULL)->orWhere('game_id3', NULL)->orWhere('game_id4', NULL)->orWhere('game_id5', NULL)->count();
        return view('admin.hotgame_account.index', compact('accounts', 'failed_users'));
    }

    public function hotgame_account_create(Request $request){
        HotgameAccount::create($request->all());
        return back();
    }

    public function hotgame_account_multi_save(Request $request){
        $data = $request->all();
        // dump($data);die;
        $username_array = $password_array = array();
        for ($i=1; $i < 6; $i++) { 
            $username_array = $data['username'.$i];
            $password_array = $data['password'.$i];
            for ($j=0; $j < 10; $j++) { 
                $row = new HotgameAccount();
                $row->game_id = $i;
                $row->username = $username_array[$j];
                $row->password = $password_array[$j];
                if($username_array[$j] != NULL && $password_array[$j] != NULL)$row->save();
            }
        }
        return back()->with('msg_ok', 'Save Successfully.');
    }
    public function release(){
        
        $failed_users = Member::where('game_id1', NULL)->orWhere('game_id2', NULL)->orWhere('game_id3', NULL)->orWhere('game_id4', NULL)->orWhere('game_id5', NULL)->get();
        foreach ($failed_users as $user) {
            $user_array = $user->toArray();
            $data = array(
                'id' => $user->id,
                'game_id1' => $user->game_id1,
                'game_pass1' => $user->game_pass1,
                'game_id2' => $user->game_id2,
                'game_pass2' => $user->game_pass2,
                'game_id3' => $user->game_id3,
                'game_pass3' => $user->game_pass3,
                'game_id4' => $user->game_id4,
                'game_pass4' => $user->game_pass4,
                'game_id5' => $user->game_id5,
                'game_pass5' => $user->game_pass5,
            );
            for ($i=1; $i < 6; $i++) { 
                if($user_array['game_id'.$i] == NULL){
                    $account = HotgameAccount::where('game_id', $i)->first();
                    if($account != NULL){
                        $data['game_id'.$i] = $account->username;
                        $data['game_pass'.$i] = $account->password;
                        $account->delete();
                    }                    
                }
            }
            DB::table('members')->where('id', $user->id)->update($data);
            
        }
        return back()->with('msg_ok', 'Released Successfully');
    }


    public function ballcrown_transaction(Request $request){

        $mod = new BallcrownTransaction();
        $playerName = $start_at = $end_at = $api_type = '';
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');
            // $players = Member::select('id')->where('name', 'like', "%$playerName%")->get()->toArray();
            // $player_list = array();
            $player_list = Member::where('name', 'like', "%$playerName%")->pluck('id');
            // foreach ($players as $item) {
            //     array_push($player_list, $item['id']);
            // }

            $mod = $mod->whereIn('member_id', $player_list);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }        
        
        $api_list = ApSite::all();

        $all_histories = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        $total_deposit = $mod->sum('deposit_amount');
        $total_withdraw = $mod->sum('withdraw_amount');
        return view('admin.ballcrown_transaction.index', compact('all_histories', 'total_deposit', 'total_withdraw', 'api_list', 'api_type', 'playerName', 'start_at', 'end_at'));
    }

    public function ptvideo_transaction(Request $request){

        $mod = new PtvideoTransaction();
        $playerName = $start_at = $end_at = $api_type = '';
        if ($request->has('playerName'))
        {
            $playerName = $request->get('playerName');            
            $player_list = Member::where('name', 'like', "%$playerName%")->pluck('id');
            $mod = $mod->whereIn('member_id', $player_list);
        }
        if ($request->has('start_at'))
        {
            $start_at = $request->get('start_at');
            $mod = $mod->where('created_at', '>=', $start_at);
        }
        if ($request->has('end_at'))
        {
            $end_at = $request->get('end_at');
            $mod = $mod->where('created_at', '<=',$end_at);
        }        

        $all_histories = $mod->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));
        $total_deposit = $mod->sum('deposit_amount');
        $total_withdraw = $mod->sum('withdraw_amount');
        return view('admin.ptvideo_transaction.index', compact('all_histories', 'total_deposit', 'total_withdraw', 'playerName', 'start_at', 'end_at'));
    }

}
