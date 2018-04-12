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
				<li class="active">店家詳細資訊</li>
			</ol>
			<h3>店家詳細資訊</h3>
			@foreach($store as $store)
				<img src="{{env('BACKEND_URL2') . $store->picture}}" alt=" " class="img-responsive" />
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">名稱：{{$store->name}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">聯絡人：{{$store->contact}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">e-mail：{{$store->email}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">連絡電話：{{$store->phone}}</font>
				<br>
				<font size="+4" style="font-family:DFKai-sb;" class="div-left">地址：{{$store->address}}</font>
				<br>
				<a href="{{route('stolist')}}" class="btn btn-success">返回店家列表</a>
			@endforeach

<button class="btn btn-info" data-toggle="modal" data-target="#mycomment">新增評論</button>
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