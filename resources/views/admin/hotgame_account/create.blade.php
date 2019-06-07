@extends('admin.layouts.main')
@section('content')
    <section class="content">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('words.hotgame_account')}}</h3>
            </div>
            <div class="panel-body">
                <form action="{{route('hotgmae_account.multi_save')}}" method="post" id="createForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h4>918Kiss</h4>
                    <table class="table table-bordered table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                                <td><input type="text" class="form-control" name="username1[]" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                                <td><input type="text" class="form-control" name="password1[]" required></td>
                            </tr>  
                        </tbody>
                    </table>

                    <h4>Newtown</h4>                    
                    <table class="table table-bordered table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                                <td><input type="text" class="form-control" name="username2[]" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                                <td><input type="text" class="form-control" name="password2[]" required></td>
                            </tr>  
                        </tbody>
                    </table>
                    <h4>Joker</h4>
                    <table class="table table-bordered table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                                <td><input type="text" class="form-control" name="username3[]" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                                <td><input type="text" class="form-control" name="password3[]" required></td>
                            </tr>  
                        </tbody>
                    </table>
                    <h4>Mega888</h4>
                    <table class="table table-bordered table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                                <td><input type="text" class="form-control" name="username4[]" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                                <td><input type="text" class="form-control" name="password4[]" required></td>
                            </tr>  
                        </tbody>
                    </table>
                    
                    <h4>Rollex</h4>
                    <table class="table table-bordered table-hover text-center mt-3">
                        <thead>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ID</td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                                <td><input type="text" class="form-control" name="username5[]" required></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                                <td><input type="text" class="form-control" name="password5[]" required></td>
                            </tr>  
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="11">
                                    <button type="submit" class="btn btn-primary">{{__('words.submit')}}</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('hotgame_account.index')}}" class="btn btn-warning"">{{__('words.return')}}</a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </form>                    
             </div>
         </div>

     </section><!-- /.content -->
@endsection