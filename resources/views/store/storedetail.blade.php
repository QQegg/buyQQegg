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
						<form action="{{route('comstore',Auth::user()->id)}}" method="POST" id="frm-insert">
							{{ csrf_field() }}
							<div class="modal-body">
								<input type="hidden" name="Store_id" value="{{$store->id}}">
								<div class="write-review-comment-container">
									<textarea name="content" style="resize:none; width:566px;height:100px;" class="review-input-text-box write-review-comment" maxlength=" 4096 " placeholder="請寫下對本店的評論" aria-label="請寫下對本店的評論"></textarea>
								</div>


								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
								<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

								<style>
                                    .rating {
                                        font-size: 0;
                                        display: table;
                                    }

                                    .rating > label {
                                        color: #ddd;
                                        float: right;
                                    }

                                    .rating > label:before {
                                        padding: 5px;
                                        font-size: 24px;
                                        line-height: 1em;
                                        display: inline-block;
                                        content: "★";
                                    }

                                    .rating > input:checked ~ label,
                                    .rating:not(:checked) > label:hover,
                                    .rating:not(:checked) > label:hover ~ label {
                                        color: #FFD700;
                                    }

                                    .rating > input:checked ~ label:hover,
                                    .rating > label:hover ~ input:checked ~ label,
                                    .rating > input:checked ~ label:hover ~ label {
                                        opacity: 0.5;
                                    }
								</style>

                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" hidden/>
                                    <label for="star5"></label>
                                    <input type="radio" id="star4" name="rating" value="4" hidden/>
                                    <label for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3" hidden/>
                                    <label for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2" hidden/>
                                    <label for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1" hidden/>
                                    <label for="star1"></label>
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
		</div>

		<br>

        <style>
            .star-rating {
                unicode-bidi: bidi-override;
                color: #ddd;
                font-size: 0;
                height: 25px;
                margin: 0 auto;
                position: relative;
                display: table;
                padding: 0;
                text-shadow: 0px 1px 0 #a2a2a2;
            }

            .star-rating span {
                padding: 5px;
                font-size: 20px;
            }

            .star-rating span:after {
                content: "★";
            }

            .star-rating-top {
                color: #FFD700;
                padding: 0;
                position: absolute;
                z-index: 1;
                display: block;
                top: 0;
                left: 0;
                overflow: hidden;
                white-space: nowrap;
            }

            .star-rating-bottom {
                padding: 0;
                display: block;
                z-index: 0;
            }
        </style>

		<div class="container" style="border-top-style:solid;padding:5px;">
            @foreach($comment as $comment)
                {{$comment->user_name}}

                <div class="star-rating">
                    <div class="star-rating-top" style="width:{{$comment->rate}}%">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="star-rating-bottom">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
				<div>
					{{$comment->content}}
				</div>
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