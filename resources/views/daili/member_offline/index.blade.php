@extends('daili.layouts.main')
@section('content')

     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.offline_member_list')}}</h3>
             </div>
             <div class="panel-body">
                 @include('daili.member_offline.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 10%">ID</th>
                         <th>{{__('words.user_name')}}</th>
                         <th style="width: 10%">{{__('words.central_account')}}</th>                       
                         <td>Personal Deposit</td>
                         <td>Team Deposit</td>
                         <th style="width: 10%">{{__('words.actual_name')}}</th>  
                         <th style="width: 10%">{{__('words.affiliated_agent')}}</th>
                         <th style="width: 10%">{{__('words.mobile_email')}}</th>
                         <th style="width: 15%">{{__('words.registration_time')}}</th>
                         <th style="width: 10%">{{__('words.status')}}</th>
                         <th style="width: 15%">{{__('words.operating')}}</th>
                     </tr>
                     @foreach($data as $item)
                        @php
                            $m_list = $item->under_members()->pluck('id');
                            $recharge_mod = new \App\Models\Recharge();
                            $drawing_mod = new \App\Models\Drawing();
                            $dividend_mod = new \App\Models\Dividend();                    

                            $team_recharge_money = $recharge_mod->whereIn('member_id', $m_list)->where('status', 2)->sum('money');
                            $team_drawing_money = $drawing_mod->whereIn('member_id', $m_list)->where('status', 2)->sum('money');

                            $personal_recharge_money = \App\Models\Recharge::where('confirm_at', '>=', $start_at)->where('confirm_at', '<=', $end_at)->where('member_id', $item->id)->where('status', 2)->sum('money');
                            $personal_drawing_money = \App\Models\Drawing::where('confirm_at', '>=', $start_at)->where('confirm_at', '<=', $end_at)->where('member_id', $item->id)->where('status', 2)->sum('money');

                        @endphp
                         <tr>
                             <td>
                                 {{ $item->id }}
                             </td>
                             <td class="{{$item->is_daili}}">
                                @if ($item->is_daili == 1)
                                    <a href="{{route('daili.sub_members', $item->id)}}">{{ $item->name }}</a>
                                @else
                                    {{ $item->name }}
                                @endif
                             </td>
                             <td>
                                {{ $item->money }}
                             </td>
                             <td>
                                {{ $personal_recharge_money }}
                             </td>
                             <td>
                                {{ $team_recharge_money }}
                             </td>
                             <td>
                                 {{ $item->real_name }}
                             </td>
                             <td>
                                 {{ $item->top_member->name}}
                             </td>
                             <td>
                                 {{ $item->phone }}/{{ $item->email }}
                             </td>
                             <td>
                                 {{ $item->created_at }}
                             </td>
                             <td>
                                 {!! \App\Models\Base::$MEMBER_STATUS_HTML[$item->status] !!}
                             </td>
                             <td>
                                    {{--<a href="{{ route('member_offline.edit', ['id' => $item->getKey()]) }}" class="btn btn-primary btn-xs">修改</a>--}}
                                 {{--@if ($item->status == 0)--}}
                                    {{--<a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 1]) }}" class="btn btn-danger btn-xs" onclick="return confirm('确定禁用吗？')">禁用</a>--}}
                                 {{--@elseif($item->status == 1)--}}
                                     {{--<a href="{{ route('member.check', ['id' => $item->getKey(), 'status' => 0]) }}" class="btn btn-success btn-xs" onclick="return confirm('确定启用吗？')">启用</a>--}}
                                 {{--@endif--}}
                                 {{--<button class="btn btn-danger btn-xs"--}}
                                         {{--data-url="{{route('user.destroy', ['id' => $item->getKey()])}}"--}}
                                         {{--data-toggle="modal"--}}
                                         {{--data-target="#delete-modal"--}}
                                 {{-->--}}
                                     {{--删除--}}
                                 {{--</button>--}}
                             </td>
                         </tr>
                     @endforeach
                 </table>
                 <div class="clearfix">
                     <div class="pull-left" style="margin: 0;">
                         <p>{{__('words.total')}} <strong style="color: red">{{ $data->total() }}</strong>{{__('words.article')}} </p>
                     </div>
                     <div class="pull-right" style="margin: 0;">
                         {!! $data->appends(['name' => $name, 'status' => $status])->links() !!}
                     </div>
                 </div>
             </div>
         </div>

     </section><!-- /.content -->
@endsection
@section("after.js")
     @include('admin.layouts.delete',['title'=>'操作提示','content'=>'你确定要删除这个用户吗?'])
@endsection