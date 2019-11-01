@extends('Front.main')
@section('content')


<body id="commerce">
<div class="container">

    <div class="bg-content">
        <div class="row">
            @foreach($subs as $sub)
            <div class="col-md-5">
                <img src="/images/{{App\Models\SubMenus::find($sub->id)->img_url}}" class="img-fluid">
                <hr>
            </div>
            <div class="col-md-7">

                <h1>{{$sub->title}}</h1>
                <p class="">{{$sub->price}} ₺</p>
{{--                <form action="{{route('Front.sepet_index')}}" method="post">--}}
{{--                    {{csrf_field()}}--}}
{{--                    <input type="hidden" name="id" value="{{$sub->id}}">--}}
{{--                    <input type="submit" class="btn btn-theme" value="Sepete Ekle">--}}
{{--                </form>--}}
{{--                <a href="{{route('Front.sepet.ekle', $sub->id)}}">Sepete Ekle</a>--}}
                <a href="{{route('Front.sepetcart.ekle', $sub->id)}}">Sepete Ekle</a>
            </div>
        </div>

        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li ><a  data-toggle="tab">{{$sub->content}}</a></li>

            </ul>
            @endforeach
        </div>

    </div>

</div>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

</body>



@endsection
