{{----}}{{--@extends('layouts.master')--}}
{{--<!-- header -->--}}
{{--@section('title', 'Contact')--}}
{{--<!-- //banner -->--}}
{{--@section('content')--}}

{{--<div class="col-lg-12 code">--}}
{{--<label for="picture" class="col-md-4 control-label">目前QR CODE</label>--}}
{{--@foreach($aa as $aa)--}}
{{--{!! QrCode::size(100)->generate($aa->id) !!}--}}
{{--@endforeach--}}
{{--<p>Scan for locations.</p>--}}
{{--</div>--}}
{{----}}
{{--@endsection--}}
@extends('layouts.master')

@section('content')
    <div class="contact-grids">
        <div class="container">
            <ol class="breadcrumb breadco">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('account') }}">我的會員</a></li>
                <li class="active">我的點數</li>
            </ol>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-white">
                        <div class="panel-heading" style="text-align:center;color:black;font-family: 標楷體;" ><h2>我的點數<br></h2></div>


                        {{--passwordold--}}
                        <div class="center-block">
                            @foreach($point as $point)
                                <h2 class="text-center & text-danger">{{$point->point}}</h2>
                            @endforeach




                        </div>









                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
