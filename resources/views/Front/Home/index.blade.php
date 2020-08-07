@extends('Front.main')
@section('content')


    <section class="banner_w3lspvt">
        <div class="csslider infinity" id="slider1">
            @foreach($news as $key => $new)
                <input type="radio" name="slides" @if($key == 0) checked="checked" @endif id="slides_{{$key}}" />
            @endforeach
            <ul>
                @foreach($news as $key => $new)
                <li>
                    <div style="background: url('images/news/{{App\Models\News::find($new->id)->img_url}}')" class="banner-top">
                        <div class="overlay">
                            <div class="container">
                                <div class="w3layouts-banner-info text-center">
                                    <h3 class="text-wh">{{$new->title}}</h3>
                                    <p class="text-li mx-auto mt-2">Ut enim ad minim quis nostrud exerci sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua nostrud exerci sed.</p>
                                    <a href="about.html" class="button-style mt-4">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="arrows">
                @foreach($news as $key => $new)
                <label for="slides_{{$key}}"></label>
                @endforeach

            </div>
        </div>
    </section>

    <section class="wthree-row py-5" action="{{route('Front.home.slide')}}" >

        <div class="container py-lg-5">

            <div class="row about-main">
                <div class="col-lg-5 about-text-grid text-left pr-lg-5">
                    <div class="title-desc">
                        <h3 class="main-title-w3pvt text-capitalize">wat we do</h3>
                    </div>
                    <hr>
                    <p class="mt-3">Vestibulum feugiat tortor vitae diam euismod, ut et interdum nisi fermentum. Pellentesque sed sodales nunc.
                        Vestibulum laoreet erat nisi, sit amet ultrices augue lobortis sed. Curabitur et tortor ac diam sed efficitur dapibus in vitae
                        dui donec aliquet.</p>
                </div>

                @foreach($news as $new)
                <div class="col-lg-3 col-sm-6 about-right mt-lg-0 mt-4">
                    <img src="images//{{App\Models\News::find($new->id)->img_url}}" class="img-fluid"/>
                </div>
                @endforeach
            </div>
        </div>

    </section>

    <section   class="what-we-do">
        <div class="overlay1 py-5">
            <div  class="container py-lg-5">
                <div id="gr" class="row">
                    <div class="col-lg-3 mb-lg-0 mb-4">
                        <h3 class="heading">What we do</h3>
                    </div>
                    <div  class="col-lg-3 col-md-4 mt-md-0 mt-4">
                        <div class="grid">
                            <div style="color: white" class="grid-layout">
                                <span class="fa fa-building mb-sm-4 mb-2" aria-hidden="false"></span>
                                <h5 id="h5" style="color:white;" class="text-wh" ></h5>
                                <div style="color: white"> <p id="p" style="color:white;" class="card-text"></p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="news py-5" id="news">
                <div class="container py-lg-5">
                    <div class="d-flex view">
                        <h3 class="heading mb-5"> Top Categories </h3>
                        <div class="ml-auto">
                            <a href="{{route('Front.categories')}}">View All</a>
                        </div>
                    </div>
                    <div class="row news-grids">
                        @foreach($menus as $menu)
                        <div id="men" class="col-lg-3 col-sm-6 newsgrid1">
                             <img src="images//{{App\Models\Menus::find($menu->id)->img_url}}" class="img-fluid">
                            <h4 class="mt-4">{{$menu->title}}</h4>
                            <p class="mt-3">{{$menu->content}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>

            </section>


@endsection

@section('scripts')

    <script>
        $(document).ready(function(){
             $.ajax({
                type:"get",
                url:"{{route('Front.home.ajax_news_get')}}" ,

                success:function (result) {
                    $(result).each(function(index) {
                        $('#gr').append(

                        $('#h5').append('<h5>' + result[index]['title'] + '</h5>',
                        '<p>' + result[index]['content'] + '</p>')
                    );
                    });
                }
            });
});

</script>

@endsection()
