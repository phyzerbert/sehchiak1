@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{ __('words.commissioner') }}</h3>
            </div>
            <div class="panel-body">
                {{-- @include('admin.commission.filter') --}}
                <div class="row">
                        <div class="col-md-4">
                            <h4 class="pull-left">Level : {{$level}} Members</h4>
                            <h4 class="pull-left" style="margin-left:25px">TopLine : {{$topline->name}}</h4>
                            <h4 class="pull-left" style="margin-left:25px">Agent : {{$agent->name}}</h4>                    
                        </div>
                        <div class="col-md-5">
                            <form action="" class="form-inline" method="get" id="searchForm">
                                <div class="form-group">
                                    <label>Player Name</label>
                                    <input type="text" name="playerName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Select Date</label>
                                    <select class="form-control" name="year" id="year">
                                        <option value="">Select Year</option>
                                        <option value="2019" selected>2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="month" id="year">
                                        <option value="">Select Month</option>
                                    <option value="01" @if ($month == '01')selected @endif>January</option>
                                    <option value="02" @if ($month == '02')selected @endif>February</option>
                                    <option value="03" @if ($month == '03')selected @endif>March</option>
                                    <option value="04" @if ($month == '04')selected @endif>April</option>
                                    <option value="05" @if ($month == '05')selected @endif>May</option>
                                    <option value="06" @if ($month == '06')selected @endif>June</option>
                                    <option value="07" @if ($month == '07')selected @endif>July</option>
                                    <option value="08" @if ($month == '08')selected @endif>August</option>
                                    <option value="09" @if ($month == '09')selected @endif>September</option>
                                    <option value="10" @if ($month == '10')selected @endif>October</option>
                                    <option value="11" @if ($month == '11')selected @endif>November</option>
                                    <option value="12" @if ($month == '12')selected @endif>December</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                        <div class="col-md-1">
                            <a class="btn btn-primary pull-right" href="javascript:history.go(-1);">&nbsp;{{ __('mb.Back') }}</a>
                        </div>
                    </div>
                <br>
                <table class="table table-bordered table-hover text-center">
                    <thead>
                        <tr align="center" style="background:#3C4D82;color:#ffffff;">
                            <td>No#</td>
                            <td>{{ __('words.proxy_account') }}</td>
                            <td>Created At</td>
                            <td>{{ __('words.offline_balance') }}</td>
                            <td>{{ __('words.deposit') }}</td>
                            <td>{{ __('words.withdrawal') }}</td>
                            <td>{{ __('words.commission_amount') }}</td>
                            <td>{{ __('words.status') }}</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <?php
                                
                                $recharge_mod = new \App\Models\Recharge();
                                $drawing_mod = new \App\Models\Drawing();

                                $rate_array = [10, 3, 3, 2, 1];
                                $rate = $rate_array[$level];
                                $last_log = $item->daili_money_logs()->orderBy('created_at', 'desc')->first();
                                $last_month = isset($last_log) ? $last_log->created_at : 'No';
                                if ($start_at)
                                {
                                    $recharge_mod = $recharge_mod->where('confirm_at', '>=', $start_at);
                                    $drawing_mod = $drawing_mod->where('confirm_at', '>=', $start_at);
                                }
                                if ($end_at)
                                {
                                    $recharge_mod = $recharge_mod->where('confirm_at', '<=', $end_at);
                                    $drawing_mod = $drawing_mod->where('confirm_at', '<=', $end_at);
                                }

                                $recharge_money = $recharge_mod->where('member_id', $item->id)->where('status', 2)->sum('money');
                                $drawing_money = $drawing_mod->where('member_id', $item->id)->where('status', 2)->sum('money');

                                $total_sy_money = $recharge_money - $drawing_money;                               
                                $commission = $total_sy_money*$rate/100;

                                $last_commission = $item->daili_money_logs()->where('last_month', $month)->first();
                                // dump($last_commission);
                                if(isset($last_commission)){
                                    $status = "Paid";
                                }else{
                                    $status = "Unpaid";
                                }
                            ?>
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                                {{-- <td>{{ $item->under_members()->sum('money') }}</td> --}}
                                <td>{{ $item->money }}</td>
                                <td>{{ $recharge_money }}</td>
                                <td>{{ $drawing_money }}</td>
                                <td>Total : {{$total_sy_money}}, Rate : {{$rate}}%, Commission : {{$commission}}</td>
                                <td>{{ $status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{ __('words.total') }} <strong style="color: red">{{ $data->total() }}</strong> {{ __('words.article') }}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $data->appends(['playerName' => $playerName, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /.content -->
@endsection
@section("after.js")
     <script>
         $(function(){
             
         });
     </script>
@endsection