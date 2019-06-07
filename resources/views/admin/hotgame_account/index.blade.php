@extends('admin.layouts.main')
@section('content')
     <section class="content">
         <div class="panel panel-primary">
             <div class="panel-heading">
                 <h3 class="panel-title">{{__('words.hotgame_account')}}</h3>
             </div>
             <div class="panel-body">
                 @include('admin.hotgame_account.filter')

                 <table class="table table-bordered table-hover text-center">
                     <tr>
                         <th style="width: 5%">No</th>
                         <th style="width: 20%">{{__('mb.hot_game')}}</th>
                         <th style="width: 20%">{{__('words.username')}}</th>
                         <th style="width: 20%">{{__('words.password')}}</th>
                         <th>Created At</th>
                     </tr>
                     @foreach($accounts as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>@isset($item->api->name) {{ $item->api->name }} @endisset </td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                     @endforeach
                     <tfoot>
                     <tr>
                     </tr>
                     </tfoot>
                 </table>
                 <div class="clearfix">
                    <div class="pull-left" style="margin: 0;">
                        <p>{{__('words.Total')}} <strong style="color: red">{{ $accounts->total() }}</strong> {{__('words.article')}}</p>
                    </div>
                    <div class="pull-right" style="margin: 0;">
                        {!! $accounts->links() !!}
                    </div>
                </div>
             </div>
         </div>

     </section><!-- /.content -->


@endsection