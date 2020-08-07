@extends('Front.main')
@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="container">
        <h3 class="text-center">Categories Page</h3>
    </div>
</section>
<!-- //inner banner -->
<!-- page details -->
<div class="breadcrumb-agile">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
    </div>
</div>
<!-- //page details -->


<!-- top categories -->
<section class="news py-5" id="news">
    <div class="container py-lg-3">
        <div class="row news-grids">
            @foreach($menus as $menu)
                <div class="col-lg-3 col-sm-6 newsgrid1">
                    <img src="images//{{App\Models\Menus::find($menu->id)->img_url}}" class="img-fluid">
                <h4 class="mt-4">{{$menu->title}}</h4>
                <p class="mt-3">{!! $menu->content !!}</p>
                    <a href="{{route('Front.single', $menu->id)}}" class="read">Read More <span class="fa fa-long-arrow-right"></span></a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- //top categories -->

@endsection
