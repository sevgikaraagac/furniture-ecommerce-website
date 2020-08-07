@extends('Front.main')
@section('content')

    <!-- inner banner -->
<section class="inner-banner">
    <div class="container">
        <h3 class="text-center">Blog Page</h3>
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
            <li class="breadcrumb-item active" aria-current="page"> Blog Page</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- Recent News -->
<section class="news py-5" id="news">
            <div class="container py-lg-3">

         <div class="row blog-grids">
             @foreach($news as  $new)
            <div class="col-lg-4 col-md-6 newsgrid1" >

                <img src="/images/{{App\Models\News::find($new->id)->img_url}}" class="img-fluid" >

                <h4 class="mt-4"><a >{{$new->title}}</a></h4>
                <ul class="blog-info mt-2">
                     <li class="mr-4"><span class="fa fa-eye"></span> 40 views</li>
                     <li><span class="fa fa-comments-o"></span> 20 comments</li>
                </ul>
                <a href="{{route('Front.blog_tek', $new->id)}}" class="read">Read More <span class="fa fa-long-arrow-right"></span></a>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- //Recent News -->



 @endsection
