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

{{--                    <img src="images/a3.jpg" class="img-fluid" alt="" />--}}
{{--                    <img src="url('images/news/{{App\Models\News::find($new->id)->img_url}}')" />--}}
                    <img src="images//{{App\Models\News::find($new->id)->img_url}}" class="img-fluid"/>
                </div>
{{--                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-3 about-right2">--}}
{{--                    <img src="images/a1.jpg" class="img-fluid" alt="" />--}}
{{--                </div>--}}
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
{{--                    <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">--}}
{{--                        <div class="grid">--}}
{{--                            <div class="grid-layout">--}}
{{--                                <span class="fa fa-bath mb-sm-4 mb-2" aria-hidden="true"></span>--}}
{{--                                <h5 class="card-title mb-sm-3 mb-2">Interior Design</h5>--}}
{{--                                <p class="card-text">Pellentesque et sed sodales nuc ipsum. Vestibulum laoreeti erat nis,--}}
{{--                                    sit amet ultricel sed augues lobotis sed. Curabitur et tortor ac diam laoreet erat dolor.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-4 mt-md-0 mt-sm-5 mt-4">--}}
{{--                        <div class="grid">--}}
{{--                            <div class="grid-layout">--}}
{{--                                <span class="fa fa-align-left mb-sm-4 mb-2" aria-hidden="true"></span>--}}
{{--                                <h5 class="card-title mb-sm-3 mb-2">Furniture</h5>--}}
{{--                                <p class="card-text">Pellentesque et sed sodales nuc ipsum. Vestibulum laoreeti erat nis,--}}
{{--                                    sit amet ultricel sed augues lobotis sed. Curabitur et tortor ac diam laoreet erat dolor.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

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
{{--                        <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 newsgrid2">--}}
{{--                            <img src="images/dining-room.jpg" alt="news image" class="img-fluid">--}}
{{--                            <h4 class=" mt-4">Dining Room</h4>--}}
{{--                            <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-0 mt-4">--}}
{{--                            <img src="images/bedrooom.jpg" alt="news image" class="img-fluid">--}}
{{--                            <h4 class=" mt-4">Bedroom</h4>--}}
{{--                            <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-0 mt-4">--}}
{{--                            <img src="images/office-room.jpg" alt="news image" class="img-fluid">--}}
{{--                            <h4 class=" mt-4">Office Room</h4>--}}
{{--                            <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--                        </div>--}}
                    </div>
                </div>

            </section>

    <section class="middile-sec py-5" id="tabs">
        <div class="container py-md-5">
            <div class="row">
                <div id="div_1" class="col-lg-12 middile-inner-con">
                    <div id="tab" class="tab-main mx-auto">

                        <input id="tab1" type="radio" name="tabs" checked>
                        <label id="lb1" for="tab1"> </label>

                        <input id="tab2" type="radio" name="tabs">
                        <label id="lb2" for="tab2"> </label>

                        <input id="tab3" type="radio" name="tabs">
                        <label id="lb3" for="tab3"> </label>

                        <input id="tab4" type="radio" name="tabs">
                        <label id="lb4" for="tab4"> </label>

                        <section id="content1">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="images/wall.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-md-8 mt-md-0 mt-4">
                                    <h5 class="mb-3 text-capitalize">The personality and lifestyle of a homeowner is reflected to a large extent in the interior design and décor of the home. Soft furnishings play an important role in interiors.</h5>
                                    <p>Vivamus eget est in odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, sed auctor ut turpis cursus. Vivamus eget est in odio tempor interdum. Mauris max fermentum arcu, ac finibus ante. Sed mattis risus.</p>
                                </div>
                            </div>
                        </section>

                        <section id="content2">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-3 text-capitalize">Kitchen cabinets are the built-in furniture installed in many kitchens for storage of food, cooking equipment, and often silverware and dishes for table service. </h5>
                                    <p>Mauris max fermentum arcu, ac finibus ante Vivamus eget est in odio sed tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus ipsum dolor. Vivamus eget est in odio tempor interdum.</p>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-4">
                                    <img src="images/kitchen.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </section>

                        <section id="content3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="images/sofa.jpg" class="img-fluid" alt="" />
                                </div>
                                <div class="col-md-8 mt-md-0 mt-4">
                                    <h5 class="mb-3 text-capitalize">The best decor for your living room are 3 Seater Sofas so choose wisely according to your home requirements. Explore our latest sofa designs. </h5>
                                    <p>Aac finibus ante. Sed mattis risus at ipsum Vivamus eget est in odio tempor interdumet sed. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus. Mauris maximus fermentum arcu, ac finibus ante lorem ipsum.</p>
                                </div>
                            </div>
                        </section>

                        <section id="content4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-3 text-capitalize">wooden walls are a desirable, but not always economical, option. Keep the warmth and glow of wood inside your home. </h5>
                                    <p>Mauris max fermentum arcu, ac finibus ante Vivamus eget est in odio sed tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum, ut auctor turpis cursus ipsum dolor. Vivamus eget est in odio tempor interdum.</p>
                                </div>
                                <div class="col-md-4 mt-md-0 mt-4">
                                    <img src="images/wall.jpg" class="img-fluid" alt="" />
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <div class="col-lg-6 about-img mt-lg-0 mt-4">
                </div>
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



            {{--$.ajax({--}}
            {{--    type: "get",--}}
            {{--    url: "{{route('Front.home.ajax_news_tab')}}",--}}

            {{--    success: function (result) {--}}
            {{--        $(result).each(function () {--}}
            {{--            // $('#tab').append(--}}
            {{--                $('#lb1').append('<label>' + result[0]['title'] + '</label>' ),--}}
            {{--                //--}}
            {{--                // $('#lb2').append('<label>' + result[1]['title'] + '</label>' );--}}
            {{--                // $('#lb3').append('<label>' + result[2]['title'] + '</label>' );--}}
            {{--                // $('#lb4').append('<label>' + result[3]['title'] + '</label>' );--}}
            {{--        // );--}}
            {{--        });--}}
            {{--    }--}}
            {{--});--}}








});






</script>

@endsection()
