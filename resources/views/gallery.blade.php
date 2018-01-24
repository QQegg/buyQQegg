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
				<li class="active">Photo Gallery</li>
			</ol>
			<h3>Photo Gallery</h3>
			<div class="gallery-grids">
				<div class="gallery-grid">
					<a href="images/11.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/11.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/7.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/6.jpg" alt=" " class="img-responsive" />
					</a>
				</div>
				<div class="gallery-grid">
					<a href="images/8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/8.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/13.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/13.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/14.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/14.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/10.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
					</a>
				</div>
				<div class="gallery-grid">
					<a href="images/15.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/15.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/16.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/16.jpg" alt=" " class="img-responsive" />
					</a>
					<a href="images/12.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="images/12.jpg" alt=" " class="img-responsive" />
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
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