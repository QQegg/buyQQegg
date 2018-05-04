@extends('layouts.master')

@section('content')
    <div class="contact-grids">
        <div class="container">
            <ol class="breadcrumb breadco">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">我的會員</li>
            </ol>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-white">
                        <div class="panel-heading" style="text-align:center;color:black;font-family: 標楷體;" ><h2>會員<br></h2></div>


                        <form action="{{route('qrcode')}}">
                            <button type="submit" class=" btn & center-block">我的會員條碼</button>
                        </form>
                        <br>

                        <form action="{{route('point')}}">
                            <button type="submit" class=" btn  & center-block">我的點數</button>
                        </form>








                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
