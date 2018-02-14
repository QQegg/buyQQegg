@extends('layouts.master')
<!-- header -->
@section('title', 'Contact')
<!-- //banner -->
@section('content')

<!-- contact -->
	<div class="contact">

		<div class="contact-grids">
			<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">修改基本資料</li>
			</ol>
			<div class="col-md-4 contact-grid">
				<div class="newsletter">
					<h3><span class="glyphicon glyphicon-user" aria-hidden="true" ></span>
						<span style="font-family:Microsoft JhengHei;" >基本資料</span>
					</h3>
				</div>
				<form>
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" >
				</form>
			</div>
			<div class="col-md-8 contact-grid">
				@if(session('success'))
					<div class="alert alert-success">{{session('success')}}</div>
				@elseif(session('error'))
					<div class="alert alert-danger">{{session('error')}}</div>
				@endif
				<form class="form-horizontal" method="POST" action="{{ url('change/password') }}">
					{{ csrf_field() }}
					<div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
						<label for="account" class="col-md-4 control-label">帳號</label>

						<div class="col-md-6">
							<label for="account" class="col-md-4 control-label">{{ Auth::user()->account }}</label>
						</div>
					</div>
					{{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
						{{--<label for="password" class="col-md-4 control-label">old密碼</label>--}}

						{{--<div class="col-md-6">--}}
							{{--<input id="password" type="password" class="form-control" name="passwordold" required>--}}

							{{--@if ($errors->has('passwordold'))--}}
								{{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('passwordold') }}</strong>--}}
                                    {{--</span>--}}
							{{--@endif--}}
						{{--</div>--}}
					{{--</div>--}}

					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-4 control-label">new密碼</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password"  placeholder="{{ Auth::user()->password }}"required>

							@if ($errors->has('password'))
								<span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>
					</div>

					{{--<div class="form-group">--}}
						{{--<label for="password-confirm" class="col-md-4 control-label">check請再次輸入密碼</label>--}}

						{{--<div class="col-md-6">--}}
							{{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--name--}}
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-md-4 control-label">姓名</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ Auth::user()->name }}" required autofocus>

							@if ($errors->has('name'))
								<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
							@endif
						</div>
					</div>
					{{--phone--}}
					<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
						<label for="phone" class="col-md-4 control-label">電話</label>

						<div class="col-md-6">
							<input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="{{ Auth::user()->phone }}" required autofocus>

							@if ($errors->has('phone'))
								<span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
							@endif
						</div>
					</div>
					{{--birthday--}}
					<div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
						<label for="birthday" class="col-md-4 control-label">生日</label>

						<div class="col-md-6">
							<input id="birthday" type="date" class="form-control" name="birthday" value="{{ old('birthday') }}" placeholder="{{ Auth::user()->birthday }}" required autofocus>

							@if ($errors->has('birthday'))
								<span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
							@endif
						</div>
					</div>

					{{--email--}}
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">E-Mail</label>

						<div class="col-md-6">
							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ Auth::user()->email }}" required>

							@if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-info">
								更新基本資料
							</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4 contact-grid">

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- contact -->
<!--footer-->

<!--//footer-->
@endsection
