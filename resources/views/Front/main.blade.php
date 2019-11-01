<!DOCTYPE html>
<html lang="en">
<head>
    <title>Furnish Interior Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>


    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <!-- css files -->
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
    <!-- //css files -->

    <link href="{{asset('css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">

    <!-- google fonts -->
    <link href="{{asset('//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext')}}" rel="stylesheet">
    <!-- //google fonts -->

</head>
<body>
<!-- //header -->
<header class="py-sm-3 pt-3 pb-2" id="home">
    <div class="container">
        <!-- nav -->
        <div class="top d-md-flex">
            <div id="logo">
                <h1> <a href="{{route('main')}}"><span class="fa fa-meetup"></span> Furnish</a></h1>
            </div>
            <div class="search-form mx-md-auto">
                <div class="n-right-w3ls">
                    <form action="#" method="post" class="newsletter">
                        <input class="search" type="text" placeholder="Search..." required="">
                        <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                    </form>
                </div>
            </div>
            <div class="forms mt-md-0 mt-2">
                @guest()
                <a href="{{route('login')}}" class="btn"><span class="fa fa-user-circle-o"></span> Sign In</a>
                <a href="{{route('register')}}" class="btn"><span class="fa fa-pencil-square-o"></span> Create Account</a>
                @endguest

                    <a href="#" class="btn"><span></span> {{Illuminate\Support\Facades\Auth::user()->name}} </a>

                    <a href="{{route('Front.shop')}}" class="btn"><span></span> Sepet</a>

            </div>
        </div>
        <nav class="text-center">
            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li class="mr-lg-4 mr-2 active"><a href="{{route('main')}}">Home</a></li>
                <li class="mr-lg-4 mr-2"><a href="{{route('Front.about')}}">About Us</a></li>
                <li class="mr-lg-4 mr-2"><a href="{{route('Front.categories')}}">Categories</a></li>
                <li class="mr-lg-4 mr-2"><a href="{{route('Front.blog')}}">Blog</a></li>
                <li class=""><a href="{{route('Front.contact')}}">Contact</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->

@yield('content')
<!-- footer -->
<footer class="footer py-5">
    <div class="container py-md-3">
        <div class="footer-grid_section text-center">
            <div class="footer-title mb-3">
                <h2> <a href="index.html"><span class="fa fa-meetup"></span> Furnish</a></h2>
            </div>
            <div class="footer-text">
                <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ipnut libero malesuada feugiat.
                    Lorem ipsum dolor sit amet elit.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 mb-lg-0 mb-4 footer-top">
                <h4 class="mb-4 w3f_title text-uppercase">Contact Info</h4>
                <div class="footer-style-w3ls my-2">
                    <p> 1127 Block, 2nd cross, 4th floor, London.</p>
                </div>
                <div class="footer-style-w3ls my-2">
                    <p> (+121)-098-8907-9987</p>
                </div>
                <div class="footer-style-w3ls">
                    <p> <a href="mailto:info@examplemail.com">info@examplemail.com</a></p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 footv3-left">
                <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Company</h4>
                <ul class="list-agileits">
                    <li class="my-2">
                        <a href="about.html">
                            About Us
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#">
                            Terms of use
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="#">
                            Faq's
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="#">
                            Privacy Ploicy
                        </a>
                    </li>
                    <li>
                        <a href="contact.html">
                            Get In Touch
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Categories</h4>
                <ul class="list-agileits">
                    <li class="my-2">
                        <a href="#">
                            Furniture Chairs
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#">
                            Three Seater Sofas
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="#">
                            Dining Tables
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="#">
                            Office Chairs
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Kitchen Cabinets
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-sm-5 mt-4">
                <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Resources</h4>
                <ul class="list-agileits">
                    <li class="my-2">
                        <a href="#">
                            Getting Started
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#">
                            Best Collections
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="categories.html">
                            All Categories
                        </a>
                    </li>
                    <li class="my-2">
                        <a href="#">
                            24/7 Support
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Contact for Help
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-sm-5 mt-4">
                <h4 class="mb-md-4 mb-3 w3f_title text-uppercase">Account</h4>
                <ul class="list-agileits">
                    <li class="my-2">
                        <a href="login.html">
                            Sign In
                        </a>
                    </li>
                    <li class="">
                        <a href="register.html">
                            Create Account
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<section class="copy-right py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="">© 2019 Furnish. All rights reserved | Design by
                    <a href="http://w3layouts.com"> W3layouts.</a>
                </p>
            </div>
            <div class="col-md-4 mt-md-0 mt-4">
                <div class="subscribe-form">
                    <form action="#" method="post" class="newsletter">
                        <input class="subscribe" type="text" placeholder="Subscribe..." required="">
                        <button class="form-control btn" value=""><span class="fa fa-long-arrow-right"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- copyright -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>


@yield('scripts')

</body>
</html>

