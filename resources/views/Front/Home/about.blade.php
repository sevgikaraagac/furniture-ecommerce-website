@extends('Front.main')
@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="container">
        <h3 class="text-center">About Furnish</h3>
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
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- about-->
<section class="wthree-row py-5" id="about">
    <div class="container py-lg-5">
        <div class="row about-main">
            <div id="qwe" class="col-lg-5 about-text-grid text-left pr-lg-5">
                <div class="title-desc">
                    <h3 id="h_3" class="main-title-w3pvt text-capitalize"></h3>
                </div>
                <hr>
                <p id="p_1" class="mt-3"></p>

            </div>
            <div id="div_1" class="col-lg-3 col-sm-6 about-right mt-lg-0 mt-4">
                <img id="img_1" src="" class="img-fluid" alt="" />
            </div>
            <div id="div_2" class="col-lg-4 col-sm-6 mt-lg-0 mt-3 about-right2">
                <img id="img_2" src="" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- //about -->

<!-- specialization-->
<section class="wthree-row specialization py-5">
    <div class="container py-lg-5">
        <div class="row about-main">
            <div id="zxc" class="col-lg-5 about-text-grid text-left pr-lg-5">
                <h3 id="h_4" class="heading"> </h3>
                <p id="p_4" class="mt-3"></p>
                <hr>
                <p>01. Home Furniture Design</p>
                <p>02. Commercial Office Design</p>
                <p>03. Interior Furniture Design</p>
                <p>04. Indoor and Outdoor Furniture</p>
                <p>05. Landscape Design</p>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                <span>24</span>
                <h4>years of experience</h4>
            </div>
            <div id="div_3" class="col-lg-4 col-sm-6 mt-lg-0 mt-4 about-right2">
                <img id="img_3" src="" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- //specialization -->
<section class="creative">
    <div class="overlay1 py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 id="asd" class="title-w3 mb-sm-4 mb-2"></h3>
            <p id="dsa" class="mb-3"></p>
            <a href="{{route('Front.contact')}}"> Contact Us</a>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>

    $(document).ready(function(){
        $.ajax({
            type:"get",
            url:"/Front/home/ajaxRequestGet",
            success:function(result)  {

                    $('#asd').append('<h3>' + result[1]['title'] + '</h3>');
                    $('#dsa').append('<p>' + result[1]['content'] + '</p>');
            }
        });

        $.ajax({
            type:"get",
            url:"/Front/home/ajaxRequest_mission",
            success:function(result)  {

                $('#qwe').append('<h3>' + result[1]['title'] + '</h3>',
                                 '<p>' + result[1]['content'] + '</p>'

                );

                    $('#div_1').append(
                        $('#img_1').attr('src', "images/news/" + result[1]['img_url']),
                    );
                    $('#div_2').append(
                        $('#img_2').attr('src', "images/news/" + result[2]['img_url'])
                    );


                }


        });
        $.ajax({
            type:"get",
            url:"/Front/home/ajaxRequest_mission",
            success:function(result)  {

                $('#h_4').append('<h3>' + result[1]['title'] + '</h3>',
                    '<p>' + result[1]['content'] + '</p>'

                );
                $('#div_3').append(
                    $('#img_3').attr('src', "images/news/" + result[3]['img_url']  )
                );

            }
        });







    });




</script>




@endsection
