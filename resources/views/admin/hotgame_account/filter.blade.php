<div class="container-fluid" style="margin-bottom: 10px;">
    <form action="{{route('hotgmae_account.create')}}" method="post" id="createForm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <div class="row">            
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">Game Type</span>
                    <select class="form-control" name="game_id" id="game_id">
                        <option value="1">918KISS</option>
                        <option value="2">Newtown</option>
                        <option value="3">Joker</option>
                        <option value="4">Mega888</option>
                        <option value="5">Rollex</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.username')}}</span>
                    <input type="text" class="form-control" name="username" id="username" />
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <span class="input-group-addon">{{__('words.password')}}</span>
                    <input type="text" class="form-control" name="password" id="password" />
                </div>
            </div>
            <div class="col-lg-2">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary">{{__('words.submit')}}</button>&nbsp;
                    <button type="button" class="btn btn-warning" id="restSearchForm">{{__('words.reset')}}</button>                   
                </div>
                
            </div>
            <div class="col-lg-2">
                <a href="{{route('hotgame_account.multi_create')}}" class="btn btn-info">Multiple Create</a>&nbsp;
                <a href="{{route('hotgame_account.release')}}" class="btn btn-success">Release</a>
                @if ($failed_users)
                    <small class="label pull-right bg-yellow tip_msg">new</small>&nbsp;
                @endif                
            </div>
        </div>        
    </form>
</div>
