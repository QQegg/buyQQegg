@extends('layouts.master')

@section('content')
    <div class="contact-grids">
        <div class="container">
            <ol class="breadcrumb breadco">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">登入</li>
            </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-white">
                <div class="panel-heading" style="text-align:center;color: black;font-family: 標楷體;" ><h2>登入<br><small> Login</small></h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
                            <label for="account" class="col-md-4 control-label">帳號</label>

                            <div class="col-md-6">
                                <input id="account"  type="text" class="form-control" name="account" value="{{ old('account') }}" placeholder="帳號"required autofocus>

                                @if ($errors->has('account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="密碼" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-default" style="background-color:white;font-weight:bold;color: black">
                                   登 入
                                </button>

                                <a class="btn btn-link-danger & text-danger" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
