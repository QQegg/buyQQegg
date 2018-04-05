@extends('layouts.master')
<!-- header -->
@section('title', 'gallery')
<!-- //banner -->
@section('content')
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<ol class="breadcrumb breadco">
				<li><a href="#">Home</a></li>
				<li class="active">產品詳細資訊</li>
			</ol>
			<h3>產品詳細資訊</h3>
			@foreach($product as $product)
				<img src="{{env('BACKEND_URL') . $product->picture}}" alt=" " class="img-responsive" />
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">商品名稱：{{$product->name}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">商品類別：{{$product->C_name}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">商品規格：{{$product->specification}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">商品價格：{{$product->price}}</font>
				<br>
				<a href="{{route('prolist')}}" class="btn btn-success">返回</a>
			@endforeach
		</div>
	</div>
		<!--script-->
			<script src="js/jquery.chocolat.js"></script>
				<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
				<!--light-box-files-->
			<script type="text/javascript" charset="utf-8">
				$(function() {
					$('.gallery-grid a').Chocolat();
				});
			</script>
		<!--script-->
<!-- //gallery -->
<!--footer-->

<!--//footer-->	

@endsection