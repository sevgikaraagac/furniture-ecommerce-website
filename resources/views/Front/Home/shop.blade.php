@extends('Front.main')
@section('content')


<div class="container">
    <div  class="bg-content">
        <h2>Sepet</h2>
        <table id="table" class="table">
            <tr>
                <th colspan="2">Ürün</th>
                <th>Adet Fiyatı</th>
                <th>Adet</th>
                <th>Tutar</th>

            </tr>
            @foreach($carts as $key => $cart)
                @php $sub2 = App\Models\SubMenus::find($cart->sub_menu_id) @endphp
{{--            @foreach(App\Models\SubMenus::where('id', $cart->sub_menu_id)->get() as $sub)--}}
            <tr id="tr_{{$key}}" class="tr1">
                <td style="width: 120px;">

                    <img src="/images/{{$sub2->img_url}}">
{{--                    <img src="/images/{{(\App\Models\SubMenus::where('id', $cart->sub_menu_id)->get())->img_url}}">--}}
                </td>
                <td>{{$cart->name}}</td>
                <td><span id="price_{{$key}}"  class="price">{{$cart->price}}</span></td>
                <td>
                    <a id="{{$key}}" onclick="azalt(this.id)"  class="btn btn-xs btn-default">-</a>
                    <span id="quantity_{{$key}}"  style="padding: 10px 20px">{{$cart->qty}}</span>
                    <a id="{{$key}}" onclick="ekle(this.id)" class="btn btn-xs btn-default plus_btn">+</a>
                </td>
                <td>
                    <span id="tutar_{{$key}}"  class="tutar">{{($cart->qty)*($cart->price)}}</span>
                </td>
                <td>
                     <a href="{{route('Front.shopRemove', $cart->id)}}">Sil</a>
                </td>
            </tr>
            @endforeach
{{--            @endforeach--}}
            <tr>
                <td colspan="4" class="text-right">Genel Toplam</td>
            </tr>
             <tr>
                <td id="toplam"  colspan="4" class="text-right"></td>
            </tr>
        </table>

        <div>
            <a href="{{route('Front.shopRemoveAll')}}" class="btn btn-info pull-left">Sepeti Boşalt</a>
            <a href="#" class="btn btn-success pull-right btn-lg">Ödeme Yap</a>
        </div>
    </div>
</div>


@endsection
@section('scripts')
    <script>

        {{--console.log({{$carts}});--}}
        {{--{{dd($carts)}}--}}

$(document).ready(function () {
    $.ajax({
        type:"get",
        url:'/user_cart',
        success:function (result) {
            var toplam=0;
            var x = 0;
             console.log(result);

                for(var i=0;i<result.length;i++){
                    x = parseInt($('#tutar_'+i).html());
                    toplam=toplam+x;
                }
                $('#toplam').html(toplam);
        }
    });

});

function ekle( id) {

    var qty = $('#quantity_' + id).html();
    qty++;
    $("#quantity_" + id).html(qty);
    var subtotal = $('#price_' + id).html() * qty;
    $("#tutar_" + id).html(subtotal);
    var toplam=0;
    var x = 0;
    for(var i=0;i<=2;i++){
        x = parseInt($('#tutar_'+i).html());
        toplam=toplam+x;
    }
    $('#toplam').html(toplam);

}

function azalt( id) {

    var qty = $('#quantity_' + id).html();
    if(qty>=1){
        qty--;
    }
    $("#quantity_" + id).html(qty);
    var subtotal = $('#price_' + id).html() * qty;
    $("#tutar_" + id).html(subtotal);
    var toplam=0;
    var x = 0;
    for(var i=0;i<=2;i++){
        x = parseInt($('#tutar_'+i).html());
        toplam=toplam+x;
    }
    $('#toplam').html(toplam);

}

    </script>
@endsection
