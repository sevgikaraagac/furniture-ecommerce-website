@extends('Front.main')
@section('content')

<!-- inner banner -->
<section class="inner-banner">
    <div class="container">
        <h3 class="text-center">Contact Page</h3>
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
            <li class="breadcrumb-item active" aria-current="page"> Contact Us</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- contact -->
<section class="contact py-5">
    <!-- contact content -->
    <div class="contact-cont pb-3">
        <div class="container">
            <div class="row mail-w3l-w3pvt-">
                <div class="col-lg-6">
                    <div class="w3pvt-info_mail_grid_right">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" name="Name" class="form-control" placeholder="Enter Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="Email" class="form-control" placeholder="Your Email Id" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="Message" placeholder="Enter Message Here" required=""></textarea>
                            </div>
                            <button type="submit" class="btn">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="contact-left-w3ls">
                        <h3>Contact Info</h3>
                        <div class="row visit">
                            <div class="col-md-1 col-sm-2 col-2 contact-icon-wthree  pl-2 pr-0">
                                <span class="fa fa-home" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
                                <h4>Visit us</h4>
                                <p>1127 Block, 2nd cross, 4th floor,
                                    <br>5th street, London.</p>
                            </div>
                        </div>
                        <div class="row mail-w3 my-4">
                            <div class="col-md-1 col-sm-2 col-2 contact-icon-wthree pl-2 pr-0">
                                <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
                                <h4>Mail us</h4>
                                <p><a href="mailto:info@examplemail.com">info@examplemail.com</a></p>
                            </div>
                        </div>
                        <div class="row call">
                            <div class="col-md-1 col-sm-2 col-2 contact-icon-wthree pl-2 pr-0">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-11 col-sm-10 col-10 contact-text-w3pvt-info">
                                <h4>Call us</h4>
                                <p>(+121)-098-8907-9987</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //contact content -->
</section>
<!-- //contact -->

<!-- map -->
<div class="map p-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
            class="map" style="border:0" allowfullscreen=""></iframe>
</div>
<!-- //map -->



@endsection
