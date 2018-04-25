@extends('layouts.app')

@section('content')
    <?PHP
    $url = "http://140.128.80.192:8001/posts";
    echo "<script>";
    echo "window.location.href='$url'";
    echo "</script>";
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
