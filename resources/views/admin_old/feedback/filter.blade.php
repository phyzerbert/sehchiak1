<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="" method="get" id="searchForm">
        <div class="row">
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Read_unread')}}</span>
                    <select name="is_read" id="is_read" class="form-control">
                        <option value="">--{{__('words.please_choose')}}--</option>
                        @foreach(config('platform.is_read') as $k =>$v)
                            <option value="{{ $k }}" @if(is_numeric($is_read) && $k == $is_read) selected @endif>{{ $v }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.Starting_time')}}</span>
                    <input type="text" class="form-control" name="start_at" id="start_at" value="{{ $start_at }}" readonly>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.End_Time')}}</span>
                    <input type="text" class="form-control" name="end_at" id="end_at" value="{{ $end_at }}" readonly>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-lg-2 pull-right">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.search_for')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.Reset')}}</button>&nbsp;
                </div>
            </div>
        </div>
    </form>
</div>