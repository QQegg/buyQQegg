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
				<li class="active">Services</li>
			</ol>
			<div class="services-grid">
				<h3>What We Offer</h3>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-grd">
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 services-grd1">
						<div class="col-xs-3 services-grd1-left">
							<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 services-grd1-right">
							<h4>At vero eos et accusamus et iusto repellendus</h4>
							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod maxime placeat facere 
								possimus.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="services-overview">
				<h3>Services Overview</h3>
				@foreach($product as $product)
				<div class="services-overview-grids">
					<div class="col-md-4 services-overview-grid">
						<div class="services-overview-grd">
							<img src="{{env('BACKEND_URL') . $product->picture}}" alt=" " class="img-responsive" />
							<div class="services-overview-gd">
								<h4>商品名稱：{{$product->name}}</h4>
								<p>商品規格：{{$product->specification}}</p>
								<ul class="social-icons">
									<li><a href="#" class="p"></a></li>
									<li><a href="#" class="in"></a></li>
									<li><a href="#" class="v"></a></li>
									<li><a href="#" class="facebook"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
<!-- //services -->
<!--footer-->

<!--//footer-->
@endsection
