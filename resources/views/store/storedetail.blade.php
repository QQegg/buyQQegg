@extends('layouts.master')
<!-- header -->
@section('title', 'gallery')
<!-- //banner -->
@section('content')
    <!-- gallery -->


    <div class="gallery" xmlns:v-bind="http://www.w3.org/1999/xhtml"
         xmlns:border-bottom-style="http://www.w3.org/1999/xhtml">
        <div class="container">
            @if(count($product) == 0)
                <ol class="breadcrumb breadco">
                    <li><a href="#">Home</a></li>
                    <li class="active">店家商品頁面</li>
                </ol>
                @foreach($store_name_big as $store_name)
                    <h3 style="color: orange"<strong>「{{$store_name->name}}」</strong>的商品頁面</h3>
                @endforeach
                <p class="text-center">
                    目前尚未新增商品
                </p>
        </div>
        <div class="container">
            <a href="{{route('stolist')}}" class="btn btn-success">返回店家列表</a>

            @if(count($user_id) == 0)
                <button class="btn btn-info" data-toggle="modal" data-target="#myComment">新增評論</button>
            @elseif($user_id['0'] == 0)
                必須先入才可以留言喔!
            @else
                @foreach($comment_id as $comment_id)
                    @foreach($store_name_big as $store_name)
                        <form style="float: left" class="delete" action="{{route('comdestroy',$comment_id)}}"
                              method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="Store_id" value="{{$store_name->id}}">
                            <input type="submit" class="btn btn-info" value="刪除評論">
                        </form>
                    @endforeach
                @endforeach
            @endif
            <br>
            <br>

            <div class="modal fade" id="myComment" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            @if(Auth::user() == null)
                                尚未有登入的使用者
                            @else
                                <h4 class="modal-title">評論者：{{ Auth::user()->name}}</h4>
                            @endif
                        </div>

                        @if(Auth::user() == null)
                            尚未有登入的使用者
                        @else
                            @foreach($store_name_big as $store_name)
                                <form action="{{route('comstore',Auth::user()->id)}}" method="POST" id="frm-insert">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <input type="hidden" name="Store_id" value="{{$store_name->id}}">

                                        <div class="write-review-comment-container">
                                        <textarea name="content" style="resize:none; width:566px;height:100px;"
                                                  class="review-input-text-box write-review-comment" maxlength=" 4096 "
                                                  placeholder="請寫下對本店的評論" aria-label="請寫下對本店的評論"></textarea>
                                        </div>

                                        <link rel="stylesheet"
                                              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                                              rel="stylesheet">

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
                                            <input type="radio" id="star1" name="rating" value="5" hidden/>
                                            <label for="star1"></label>
                                            <input type="radio" id="star2" name="rating" value="4" hidden/>
                                            <label for="star2"></label>
                                            <input type="radio" id="star3" name="rating" value="3" hidden/>
                                            <label for="star3"></label>
                                            <input type="radio" id="star4" name="rating" value="2" hidden/>
                                            <label for="star4"></label>
                                            <input type="radio" id="star5" name="rating" value="1" hidden/>
                                            <label for="star5"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <script>
                                            jQuery(document).ready(function () {
                                                    jQuery("#star1").click(function () {
                                                        if (jQuery("#star1").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star2").click(function () {
                                                        if (jQuery("#star2").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star3").click(function () {
                                                        if (jQuery("#star3").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star4").click(function () {
                                                        if (jQuery("#star4").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star5").click(function () {
                                                        if (jQuery("#star5").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                        </script>
                                        <button id="Button" type="submit" class="btn btn-success pull-right disable"
                                                disabled="disabled">提交
                                        </button>
                                        <button type="button" class="btn btn-default pull-left"
                                                data-dismiss="modal">close
                                        </button>
                                    </div>
                                </form>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div style="float: left">
                總評分：
                <div class="star-rating">
                    <div class="star-rating-top" style="width:{{$starrate}}%">
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
            </div>

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
            <br>
            <br>
            <br>
            <div class="container" style="border-top-style:solid;padding:5px;">
                @foreach($comment as $comment)
                    <ul>
                        <li>
                            <div> {{$comment->user_name}}</div>
                            <ul>
                                <div style="float: left">
                                    {{$comment->content}}
                                </div>
                                <div style="float: left" class="star-rating">
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
                                <br>
                                <br>
                                <ul>
                                    @if(!$comment->Store_comment == null)
                                        <li>店家回應：{{ $comment->Store_comment}}</li>
                                    @endif
                                </ul>
                            </ul>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
        @else
            <div class="container">
            <ol class="breadcrumb breadco">
                <li><a href="#">Home</a></li>
                <li class="active">店家商品頁面</li>
            </ol>
            @foreach($store_name_big as $store_name)
                <h3 style="color: orange" <strong>「{{$store_name->name}}」</strong>的商品頁面</h3>
            @endforeach
            @foreach($product as $product)
                <div class="col-md-4 services-overview-grid">
                    <div class="services-overview-grd">
                        <img src="{{env('BACKEND_URL') . $product->picture}}" alt=" " class="img-responsive"/>
                        <div class="services-overview-gd">
                            <h4>名稱：{{$product->name}}</h4>
                            <h4>類別：{{$product->C_name}}</h4>
                            <h4>規格：{{$product->specification}}</h4>
                            <h4>價格：{{$product->price}}$</h4>
                            <a href="{{route('prodetail',$product->id)}}" class="btn btn-success">觀看產品詳細資訊</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <div class="modal fade" id="myComment" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            @if(Auth::user() == null)
                                尚未有登入的使用者
                            @else
                                <h4 class="modal-title">評論者：{{ Auth::user()->name}}</h4>
                            @endif
                        </div>

                        @if(Auth::user() == null)
                            尚未有登入的使用者
                        @else
                            @foreach($store_name_big as $store_name)
                                <form action="{{route('comstore',Auth::user()->id)}}" method="POST" id="frm-insert">
                                    {{ csrf_field() }}
                                    <div class="modal-body">
                                        <input type="hidden" name="Store_id" value="{{$store_name->id}}">

                                        <div class="write-review-comment-container">
                                        <textarea name="content" style="resize:none; width:566px;height:100px;"
                                                  class="review-input-text-box write-review-comment" maxlength=" 4096 "
                                                  placeholder="請寫下對本店的評論" aria-label="請寫下對本店的評論"></textarea>
                                        </div>

                                        <link rel="stylesheet"
                                              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"
                                              rel="stylesheet">

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
                                            <input type="radio" id="star1" name="rating" value="5" hidden/>
                                            <label for="star1"></label>
                                            <input type="radio" id="star2" name="rating" value="4" hidden/>
                                            <label for="star2"></label>
                                            <input type="radio" id="star3" name="rating" value="3" hidden/>
                                            <label for="star3"></label>
                                            <input type="radio" id="star4" name="rating" value="2" hidden/>
                                            <label for="star4"></label>
                                            <input type="radio" id="star5" name="rating" value="1" hidden/>
                                            <label for="star5"></label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <script>
                                            jQuery(document).ready(function () {
                                                    jQuery("#star1").click(function () {
                                                        if (jQuery("#star1").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star2").click(function () {
                                                        if (jQuery("#star2").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star3").click(function () {
                                                        if (jQuery("#star3").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star4").click(function () {
                                                        if (jQuery("#star4").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                            jQuery(document).ready(function () {
                                                    jQuery("#star5").click(function () {
                                                        if (jQuery("#star5").is(":checked")) {
                                                            jQuery("#Button").prop("disabled", false);
                                                        }
                                                        else {
                                                            jQuery("#Button").prop("disabled", true);
                                                        }
                                                    });
                                                }
                                            );
                                        </script>
                                        <button id="Button" type="submit" class="btn btn-success pull-right disable"
                                                disabled="disabled">提交
                                        </button>
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                            close
                                        </button>
                                    </div>
                                </form>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

        <br>

            <div class='container' style="border-top-style:solid;padding:5px;">
                <div>
                    <a href="{{route('stolist')}}" class="btn btn-success">返回店家列表</a>
                    @if(count($user_id) == 0)
                        <button class="btn btn-info" data-toggle="modal" data-target="#myComment">新增評論</button>
                    @elseif($user_id['0'] == 0)
                        必須先入才可以留言喔!
                    @else
                        @foreach($comment_id as $comment_id)
                            @foreach($store_name_big as $store_name)
                                <form style="float: left" class="delete" action="{{route('comdestroy',$comment_id)}}"
                                      method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                    <input type="hidden" name="Store_id" value="{{$store_name->id}}">
                                    <input type="submit" class="btn btn-info" value="刪除評論">
                                </form>
                            @endforeach
                        @endforeach
                    @endif
                    <br>
                    <br>
                    <div style="float: left">
                        總評分：
                        <div class="star-rating">
                            <div class="star-rating-top" style="width:{{$starrate}}%">
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
                    </div>
                </div>
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
                    <ul>
                        <li>
                            <div> {{$comment->user_name}}</div>
                            <ul>
                                <div style="float: left">
                                    {{$comment->content}}
                                </div>
                                <div style="float: left" class="star-rating">
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
                                <br>
                                <br>
                                <ul>
                                    @if(!$comment->Store_comment == null)
                                        <li>店家回應：{{ $comment->Store_comment}}</li>
                                    @endif
                                </ul>
                            </ul>
                        </li>
                    </ul>
                @endforeach
            </div>
        @endif
    </div>





    <!--script-->
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
    <!--light-box-files-->
    <script type="text/javascript" charset="utf-8">
        $(function () {
            $('.gallery-grid a').Chocolat();
        });
    </script>
    <!--script-->
    <!-- //gallery -->
    <!--footer-->

    <!--//footer-->

@endsection