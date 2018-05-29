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
<<<<<<< HEAD
				<li class="active">促銷訊息列表</li>
			</ol>

			<div class="services-overview">
				<h3>促銷訊息列表</h3>
				<div class="services-overview-grids">
					@foreach($push as $push)
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="{{env('BACKEND_URL3') . $push->picture}}" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>名稱：{{$push->title}}</h4>
								<h4>店家：{{$push->Store_name}}</h4>
								<a href="{{route('pushdetail',$push->id)}}" class="btn btn-success">觀看產品詳細資訊</a>

								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
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
