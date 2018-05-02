@extends('layouts.master')
<!-- header -->
@section('title', 'Contact')
<!-- //banner -->
@section('content')

    <div class="col-lg-12 code">
    <label for="picture" class="col-md-4 control-label">目前QR CODE</label>
@foreach($aa as $aa)
    {!! QrCode::size(100)->generate($aa->id) !!}
@endforeach
<p>Scan for locations.</p>
</div>
@endsection