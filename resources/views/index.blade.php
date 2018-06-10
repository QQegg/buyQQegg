@extends('layouts.master')
<!-- header -->
@section('content')
    <!-- //header -->

    <style>
        .textposition {
            position: relative;     /*絕對位置*/
            top: 20%;               /*從上面開始算，下推 50% (一半) 的位置*/
            left: 10%;              /*從左邊開始算，右推 50% (一半) 的位置*/
               /*寬度的一半*/

            width:900px;
            height:60px;

            text-align: center;
        }
    </style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <br>
        <div class="textposition">
            <h1 style="color: #FF8800;">關於我們</h1>
            <h3>
                由雙魚商圈團隊規劃，全台最大購物空間，導入亞洲購物街精品風格，充滿活力.富有創意.新鮮有趣的環境，是我們商圈的堅持。
                位於台中市北區益民一中商圈，被一中商圈、中友百貨、中友商圈、學士商圈、台中孔廟、忠烈祠、放送局、市長官邸餐廳環繞，區域內商圈每月流動人潮達1000萬人次，是台中市少見商業文教與觀光混和區。首創全台最大5000坪購物大道，六大主題街道，五大徒步區，目前已引進時尚、休閒、潮流、文創、娛樂、美食、美容、美髮、電子3C等產業進駐。地下室提供有400個大型平面停車位，適合參觀人潮停車使用。
            </h3>
        </div>
    </div>
@endsection