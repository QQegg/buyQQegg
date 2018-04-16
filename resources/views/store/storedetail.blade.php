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
					<button class="btn btn-info" data-toggle="modal" data-target="#myComment">新增評論</button>

			<div class="modal fade" id="myComment" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">評論者：{{ Auth::user()->name}}</h4>
						</div>
						<form action="{{route('comstore',$store->id)}}" method="POST" id="frm-insert">
							{{ csrf_field() }}
							<div class="modal-body">
								<div class="write-review-comment-container">
									<textarea name="content" style="resize:none; width:566px;height:100px;" class="review-input-text-box write-review-comment" maxlength=" 4096 " placeholder="請寫下對本店的評論" aria-label="請寫下對本店的評論"></textarea>
								</div>


								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

								<style>
									.rating {
										display: inline-block;
									}

									.rating:not(:checked) > input {
										display:none;
									}

									.rating:not(:checked) > label {
										float: right;
										width: 28px;
										padding: 0 4px;
										overflow: hidden;
										white-space: nowrap;
										cursor: pointer;
										font-size: 200%;
										line-height: 1.2;
										color: #ddd;
										filter: saturate(0);
										-webkit-filter: saturate(0);
										-moz-filter: saturate(0);
										-o-filter: saturate(0);

									}

									.rating:not(:checked) > label:before {
										content: url("http://i.imgur.com/1dT6Fai.png") ' ';
									}

									.rating > input:checked ~ label {
										filter: saturate(1);
										-webkit-filter: saturate(1);
										-moz-filter: saturate(1);
										-o-filter: saturate(1);
									}

									.rating:not(:checked) > label:hover,
									.rating:not(:checked) > label:hover ~ label {
										filter: hue-rotate(-50deg);
										-webkit-filter: hue-rotate(-50deg);
										-moz-filter: hue-rotate(-50deg);
										-o-filter:hue-rotate(-50deg);

									}

									.rating > input:checked + label:hover,
									.rating > input:checked + label:hover ~ label,
									.rating > input:checked ~ label:hover,
									.rating > input:checked ~ label:hover ~ label,
									.rating > label:hover ~ input:checked ~ label {
										filter: hue-rotate(-50deg);
										-webkit-filter: hue-rotate(-50deg);
										-moz-filter: hue-rotate(-50deg);
										-o-filter:hue-rotate(-50deg);

									}
								</style>

									<div class="rating">
									<input type="radio" name="rate" id="star1" value="5"><label for="star1">
									</label>
									<input type="radio" name="rate" id="star2" value="4"><label for="star2">
									</label>
									<input type="radio" name="rate" id="star3" value="3"><label for="star3">
									</label>
									<input type="radio" name="rate" id="star4" value="2"><label for="star4">
									</label>
									<input type="radio" name="rate" id="star5" value="1"><label for="star5">
									</label>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success pull-right" >提交</button>
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">close</button>
							</div>
						</form>
					</div>

				</div>
			</div>
			@endforeach
			@foreach($comment as $comment)
				<div class="container">{{$comment->content}}</div>
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