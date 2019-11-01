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

{{--                <img src="images/living-room.jpg" alt="news image" class="img-fluid"> --}}
                <img src="images//{{App\Models\Menus::find($menu->id)->img_url}}" class="img-fluid">

                <h4 class="mt-4">{{$menu->title}}</h4>
                <p class="mt-3">{!! $menu->content !!}</p>
{{--                    {{$menu->content}} </p>--}}
                    <a href="{{route('Front.single', $menu->id)}}" class="read">Read More <span class="fa fa-long-arrow-right"></span></a>
            </div>

            @endforeach

{{--            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4 newsgrid2">--}}
{{--                <img src="images/dining-room.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Dining Room</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-0 mt-4">--}}
{{--                <img src="images/bedrooom.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Bedroom</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-0 mt-4">--}}
{{--                <img src="images/office-room.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Office Room</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 newsgrid1 mt-lg-5 mt-4">--}}
{{--                <img src="images/lightening.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class="mt-4">Lightening</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 mt-lg-5 mt-4 newsgrid2">--}}
{{--                <img src="images/accent.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Accents</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-5 mt-4">--}}
{{--                <img src="images/bedrooom.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Landscape</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-sm-6 newsgrid3 mt-lg-5 mt-4">--}}
{{--                <img src="images/living-room.jpg" alt="news image" class="img-fluid">--}}
{{--                <h4 class=" mt-4">Outdoor</h4>--}}
{{--                <p class="mt-3">Nulla pellentesque dolor ipsum laoreet eleifend integer. </p>--}}
{{--            </div>--}}
{{--            --}}

        </div>
    </div>
</section>
<!-- //top categories -->

<!-- tabs -->
<section class="middile-sec py-5" id="tabs">
    <div class="container py-md-5">
        <div class="row">
            <div class="col-lg-12 middile-inner-con">
                <div class="tab-main mx-auto">

                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1"> Soft Furniture</label>

                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"> Kitchen Cabinet</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"> Three Seater Sofa</label>

                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4"> Wall Design</label>

                    <section id="content1">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/soft.jpg" class="img-fluid" alt="" />
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
<!--//tabs -->



@endsection
