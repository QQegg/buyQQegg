@extends('layouts.master')
<!-- header -->
@section('title', 'services')
<!-- //banner -->
@section('content')
<!-- services -->
	<div class="services">
		<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">折價券列表</li>
			</ol>

			<div class="services-overview">
				<h3>折價券列表</h3>
				<div class="services-overview-grids">
					@foreach($coupon as $coupon)
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="{{env('BACKEND_URL4') . $coupon->picture}}" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>名稱：{{$coupon->title}}</h4>
								{{--<h4>店家：{{$coupon->C_name}}</h4>--}}
								<h4>折扣金額：{{$coupon->discount}}$</h4>
                                <h4>店家：{{$coupon->S_name}}</h4>
								<h4>折價券到時間：{{$coupon->end}}</h4>
								{{--<a href="{{route('prodetail',$coupon->id)}}" class="btn btn-success">觀看折價券詳細資訊</a>--}}
							</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->
<!--footer-->

<!--//footer-->
@endsection
