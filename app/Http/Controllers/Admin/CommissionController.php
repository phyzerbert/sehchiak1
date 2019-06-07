<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DailiMoneyLog;
use App\Models\Member;
use App\Models\Recharge;
use App\Models\Drawing;

class CommissionController extends Controller
{
    public function index(Request $request){

        $playerName = '';
        $year = date('Y');
        $month = date('m', strtotime('-1 month'));
        $level = 1;

        $mod = new Member();
        if ($request->has('playerName'))
        {
            $playerName = $request->get('member_id');
            $mod = $mod->where('name', 'LIKE', "%$playerName%");
        }
        if ($request->has('year') && $request->has('month'))
        {
            $year = $request->get('year');
            $month = $request->get('month');
        }
                
        $start_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month, 1, $year));
        $end_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month+1, 1, $year));

        $data = $mod->where('is_daili', 1)->orderBy('created_at', 'desc')->paginate(config('admin.page-size'));

        return view('admin.commission.index', compact('data', 'level', 'playerName', 'year', 'month', 'start_at', 'end_at'));
    }

    public function downline(Request $request, $level, $topline, $agent){
        $playerName = '';
        $year = date('Y');
        $month = date('m', strtotime('-1 month'));
        $topline = Member::find($topline);
        $agent_id = $agent;
        $agent = Member::find($agent_id);
        $mod = new Member();
        if ($request->has('playerName'))
        {
            $playerName = $request->get('member_id');
            $mod = $mod->where('name', 'LIKE', "%$playerName%");
        }
        if ($request->has('year') && $request->has('month'))
        {
            $year = $request->get('year');
            $month = $request->get('month');
        }

        $start_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month, 1, $year));
        $end_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month+1, 1, $year));

        // $data = $mod->where('is_daili', 1)->where('top_id', $agent_id)->orderBy('name', 'asc')->paginate(config('admin.page-size'));
        $data = $mod->where('top_id', $agent_id)->orderBy('name', 'asc')->paginate(config('admin.page-size'));

        return view('admin.commission.level', compact('data', 'level', 'topline', 'agent', 'year', 'month', 'playerName', 'start_at', 'end_at'));
    }

    public function agent_member(Request $request, $level, $topline, $agent){
        $playerName = '';
        $year = date('Y');
        $month = date('m', strtotime('-1 month'));
        $topline = Member::find($topline);
        $agent_id = $agent;
        $agent = Member::find($agent_id);
        $mod = new Member();
        if ($request->has('playerName'))
        {
            $playerName = $request->get('member_id');
            $mod = $mod->where('name', 'LIKE', "%$playerName%");
        }
        if ($request->has('year') && $request->has('month'))
        {
            $year = $request->get('year');
            $month = $request->get('month');
        }

        $start_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month, 1, $year));
        $end_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month+1, 1, $year));

        $data = $mod->where('top_id', $agent_id)->orderBy('name', 'asc')->paginate(config('admin.page-size'));

        return view('admin.commission.member', compact('data', 'level', 'topline', 'agent', 'year', 'month', 'playerName', 'start_at', 'end_at'));
    }

    public function auto_commission(){
        $all_agents = Member::where('is_daili', 1)->get();

        foreach ($all_agents as $topline) {
            $member_level1 = $topline->under_members;
            $agent_level1 = $topline->under_members()->where('is_daili', 1)->get();
            $this->make_commission_log($member_level1, $topline, 1);

            foreach ($agent_level1 as $agent1) {
                $member_level2 = $agent1->under_members;
                $agent_level2 = $agent1->under_members()->where('is_daili', 1)->get();
                $this->make_commission_log($member_level2, $topline, 2);

                foreach ($agent_level2 as $agent2) {
                    $member_level3 = $agent2->under_members;
                    $agent_level3 = $agent2->under_members()->where('is_daili', 1)->get();
                    $this->make_commission_log($member_level3, $topline, 3);

                    foreach ($agent_level3 as $agent3) {
                        $member_level4 = $agent3->under_members;
                        $agent_level4 = $agent3->under_members()->where('is_daili', 1)->get();
                        $this->make_commission_log($member_level4, $topline, 4);

                        foreach ($agent_level4 as $agent4) {
                            $member_level5 = $agent4->under_members;
                            $agent_level5 = $agent4->under_members()->where('is_daili', 1)->get();
                            $this->make_commission_log($member_level5, $topline, 5);
                        }
                    }
                }
            }
        }
        return back()->with('msg_ok', 'Commissioned Successfully.');
    }

    public function make_commission_log($members, Member $topline, $level){

        $rates = [10, 3, 3, 2, 1];
        $rate = $rates[$level-1];
        $month = date('m', strtotime('-1 month'));
        $year = date('Y');
        $start_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month, 1, $year));
        $end_at = date('Y-m-d h:i:s', mktime(0, 0, 0, $month+1, 1, $year));

        foreach ($members as $member) {

            $recharge_money = Recharge::where('member_id', $member->id)->where('confirm_at', '>=', $start_at)->where('confirm_at', '<=', $end_at)->where('status', 2)->sum('money');
            $drawing_money = Drawing::where('member_id', $member->id)->where('confirm_at', '>=', $start_at)->where('confirm_at', '<=', $end_at)->where('status', 2)->sum('money');
            $total_sy_money = $recharge_money - $drawing_money;                               
            $commission = $total_sy_money*$rate/100;

            DailiMoneyLog::create([
                'member_id' => $member->id,
                'topline' => $topline->id,
                'money' => $commission,
                'yl_money' => $total_sy_money,
                'remark' => 'Paid',
                'last_month' =>$month
            ]);

            // $topline->increment('money', $commission);
        }
        return true;
    }
}
