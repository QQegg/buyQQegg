<div class="header">
    <div class="search">
        <form action="{{route('prosearch')}}" method="POST" style="display: none">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <i class="glyphicon glyphicon-search" aria-hidden="true"></i><input type="text" value="Search Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here';}" required="">
            <button type="submit" class="btn btn-success">查詢</button>
        </form>
    </div>
    <div class="logo">
        <a>Seafaring <span>A Travel Agency</span></a>
    </div>
    <div class="logo-right">
        <ul>
            @if(Auth::guard()->check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                       您好！ {{ Auth::user()->account }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{route('change_password')}}">修改密碼</a>
                            <a href="{{route('change_profile')}}">修改基本資料</a>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                登出
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                    <li><a href="{{ route('register') }}">註冊</a></li>|
                    <li><a href="{{ route('login') }}">登入</a></li>

                @endif
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<div class="header-nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <!--
                        <li class="active"><a href="{{ route('about') }}">About</a></li>
                        <li class="active"><a href="{{ route('codes') }}">Short Codes</a></li>
                        <li class="active"><a href="{{ route('services') }}">Services</a></li>
                        <li class="active"><a href="{{ route('photo') }}">Photo Gallery</a></li>
                        -->
                        <li class="active"><a href="{{ route('prolist') }}">商品列表</a></li>
                        <li class="active"><a href="{{ route('stolist') }}">店家列表</a></li>
                    </ul>
                </nav>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
<!-- banner -->
{{--藍色那張圖片有需要再加--}}
{{--<div class="banner1">--}}
{{--</div>--}}