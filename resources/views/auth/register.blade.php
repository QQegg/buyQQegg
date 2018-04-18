@extends('layouts.master')

@section('content')
    <div class="contact-grids">
        <div class="container">
        <ol class="breadcrumb breadco">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">註冊</li>
        </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-white">
                <div class="panel-heading" style="text-align:center;color:black;font-family: 標楷體;" ><h2>註冊<br><small>Register</small></h2></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        {{--name--}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">姓名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="請輸入姓名" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--account--}}
                        <div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
                            <label for="account" class="col-md-4 control-label">帳號</label>

                            <div class="col-md-6">
                                <input id="account" type="text" class="form-control" name="account" value="{{ old('account') }}" placeholder="請輸入帳號且註冊成功後不可修改" required autofocus>

                                @if ($errors->has('account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--password--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">密碼</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="請輸入至少六位數的密碼"  required>

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="請再次輸入至少六位數的密碼" required>
                            </div>
                        </div>
                        {{--birthday--}}
                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">生日</label>

                            <div class="col-md-6">
                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--phone--}}
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">電話</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="請輸入電話" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--email--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="請輸入E-mail" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--picture--}}
                        <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                            <label for="picture" class="col-md-4 control-label">上傳大頭貼</label>

                            <div class="col-md-6">
                                <input id="picture" type="file" class="form-control" name="picture" value="{{ old('picture') }}" required>

                                @if ($errors->has('picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-group-vertical" style="background-color:pink;font-weight:bold;color:black;width:100%;">
                                    註 冊
                                </button>
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
