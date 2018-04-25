@extends('layouts.master')

@section('content')
    <div class="contact-grids">
<div class="container">
    <ol class="breadcrumb breadco">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active">修改密碼</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-white">
                <div class="panel-heading" style="text-align:center;color:black;font-family: 標楷體;" ><h2>修改密碼<br><small>Change Password</small></h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('change_password') }}">
                        {{ csrf_field() }}
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @elseif(session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @endif
                        {{--passwordold--}}
                        <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">old 密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="passwordold" required>

                                @if ($errors->has('passwordold'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('passwordold') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--passwordnew--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">new 密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">請再次輸入密碼</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-white" style="background-color:pink;font-weight:bold;color:black;width:100%;">
                                    修改密碼
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
