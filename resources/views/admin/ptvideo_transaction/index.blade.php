@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.sports_transaction')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.ballcrown_transaction.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">No</th>
                         <th>Tag ID</th>
                         {{-- <th style="width: 20%">Game</th> --}}
                         <th style="width: 15%">Game ID</th>
                         <th style="width: 15%">Request</th>
                         <th style="width: 20%">Time</th>
                     </tr>
                     @foreach($all_histories as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>@isset($item->member->name) {{ $item->member->name }} @endisset </td>
                            {{-- <td>@isset($item->api->name) {{ $item->api->name }} @endisset </td> --}}
                            <td>{{ $item->game_id }}</td>
                            <td>
                                @if ($item->type == 'deposit') 
                                    <span style="color:green;">+ {{ $item->deposit_amount }}</span> 
                                @else 
                                    <span style="color:red;">- {{ $item->withdraw_amount }}</span>
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                     @endforeach
                     <tfoot>
                        <tr>
                            <td colspan="2" style="color:green;font-weight:bold">Total Deposit : +{{$total_deposit}}</td>
                            <td colspan="3" style="color:red;font-weight:bold">Total Withdraw : {{$total_withdraw}}</td>
                        </tr>
                     </tfoot>
                 </table>
                 <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $all_histories->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $all_histories->appends(['playerName' => $playerName, 'start_at' => $start_at, 'end_at' => $end_at])->links() !!}
                    </div>
                </div>
             </div>
         </div>

     </section><!-- /.content -->


@endsection