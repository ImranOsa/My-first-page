<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Appway - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="css/font-awesome-all.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/style-register.css" rel="stylesheet">


</head>
<style>
    .error {
        color: red;
    }
</style>



<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header home-4">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo">
                            <a href="index.html"><img src="images/xperta_logo.png" alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area pull-right clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-1').animatescroll();">Home</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-2').animatescroll();">About</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-3').animatescroll();">Pricing</a></li>
                                    <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-4').animatescroll();">Contact</a></li>

                                    <li><a data-toggle="modal" data-target="#login" href="#login">Login</a></li>
                                    <li><a data-toggle="modal" data-target="#register" href="#register">Register</a></li>

                            </div>

                            </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box">
                    <a href="index.html"><img src="images/xperta_logo.png" alt=""></a>
                </figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="index.html"><img src="images/xperta_logo.png" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-style-four" id="section-1" style="background-image: url(images/icons/banner-bg-3.png);">
        <div class="pattern-bg" style="background-image: url(images/icons/pattern-5.png);"></div>
        <div class="anim-icons">
            <div class="icon icon-1"><img src="images/icons/anim-icon-1.png" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="images/icons/anim-icon-2.png" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="images/icons/anim-icon-3.png" alt=""></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <h1>Hassle-free Invoicing software</h1>
                        <div class="text">Invoice is web-based invoicing software that helps you craft invoices, automatically send payment reminders & get paid faster online.</div>
                        <div class="btn-box">
                            <a href="#" class="link-btn">Access Invoice<i class="fas fa-angle-double-right"></i></a>
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption="">Overview Video<i class="flaticon-play-button"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="layer-bg" style="background-image: url(images/icons/leaf-1.png);"></div>
                        <figure class="image clearfix float-bob-y"><img src="images/resource/illustration-6.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-style-two -->
    <section class="service-style-two centred">
        <div class="container">
            <div class="sec-title center">
                <h2>Our Service</h2>
                <p>Get everything you'll ever need to manage your paperwork.</p>
            </div>
            <div class="inner-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-bill"></i></div>
                                <h4><a href="#">Quick Invoicing</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-search-1"></i></div>
                                <h4><a href="#">Easy Time Tracking</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-payment"></i></div>
                                <h4><a href="#">Online Payments</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-reminder"></i></div>
                                <h4><a href="#">Automated Reminders</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-wallet"></i></div>
                                <h4><a href="#">Expense Management</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-data"></i></div>
                                <h4><a href="#">Insightful Reports</a></h4>
                                <div class="text">Solution is an easy to use tool all very easy! eCommerce. With the help of our system you can present.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- feature-style-six -->
    <section class="feature-style-six">
        <div class="container">
            <div class="inner-box">
                <div class="row align-items-center" id="section-2">
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_15">
                            <div class="content-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <h2>The simplest way to create and send invoices</h2>
                                </div>
                                <div class="text">Get everything you'll ever need to manage your paperwork.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected you are going.</div>
                                <div class="btn-box"><a href="#" class="theme-btn">Learn More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_14">
                            <div class="image-box">
                                <div class="bg-layer" style="background-image: url(images/icons/image-shap-5.png);"></div>
                                <figure class="image image-1 clearfix wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/tab-1.png" alt=""></figure>
                                <figure class="image image-2 wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/phone-6.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner-box">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                        <div id="image_block_15">
                            <div class="image-box">
                                <figure class="image clearfix wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="images/resource/screen-1.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                        <div id="content_block_15">
                            <div class="content-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="sec-title">
                                    <h2>How we help our clients measure social</h2>
                                </div>
                                <div class="text">Get everything you'll ever need to manage your paperwork. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected you are going.</div>
                                <div class="btn-box"><a href="#" class="theme-btn">Learn More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-six -->


    <!-- testimonial-style-four -->
    <section class="testimonial-style-four">
        <div class="image-layer" style="background-image: url(images/icons/shap-6.png);"></div>
        <div class="container-fluid">
            <div class="sec-title center">
                <h2>What People Says</h2>
                <p>Trusted by more than 9,000 businesses in 140 countries.<br />all of our resources are free</p>
            </div>
            <div class="testimonial-inner">
                <div class="three-column-carousel owl-carousel owl-theme">
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-2.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-6.png" alt=""></figure>
                                <h5 class="name">Steven smith</h5>
                                <span class="designation">Programmer</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-2.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-6.png" alt=""></figure>
                                <h5 class="name">Steven smith</h5>
                                <span class="designation">Programmer</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-2.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-6.png" alt=""></figure>
                                <h5 class="name">Steven smith</h5>
                                <span class="designation">Programmer</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="images/icons/icon-1.png" alt=""></figure>
                            <div class="author-info">
                                <figure class="image-box"><img src="images/resource/testimonial-5.png" alt=""></figure>
                                <h5 class="name">TeamSnap</h5>
                                <span class="designation">VP Experience</span>
                            </div>
                            <div class="text">“We don't take ourselves too seriously, but seriously enough to ensure we're creating the best product and experience for our customers. I feel like Help Scout does the same.”</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-four end -->


    <!-- pricing-style-three -->
    <section class="pricing-style-three" id="section-3">
        <div class="container">
            <div class="tabs-box">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Simple pricing. Advanced features.</h2>
                            </div>
                            <div class="text">Get everything you'll ever need to manage your paperwork. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected you are going.</div>
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Monthly</li>
                                    <li class="tab-btn" data-tab="#tab-2">Yearly</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-box centred">
                            <div class="tabs-content">
                                <div class="tab active-tab" id="tab-1">
                                    <div class="pricing-block-two">
                                        <div class="pricing-table">
                                            <div class="choice-box">Popular Choice</div>
                                            <div class="table-header">
                                                <h3 class="title">Business</h3>
                                                <div class="text">on the other hand</div>
                                                <h2 class="price">100<span> Per Month</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li>Free Customer Support</li>
                                                    <li>Free installation</li>
                                                    <li>Free Back-up</li>
                                                    <li>-</li>
                                                    <li>-</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-block-two">
                                        <div class="pricing-table">
                                            <div class="choice-box">Popular Choice</div>
                                            <div class="table-header">
                                                <h3 class="title">Standard</h3>
                                                <div class="text">on the other hand</div>
                                                <h2 class="price">100<span> Per Month</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li>Free Customer Support</li>
                                                    <li>Free installation</li>
                                                    <li>Free Back-up</li>
                                                    <li>-</li>
                                                    <li>-</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab" id="tab-2">
                                    <div class="pricing-block-two">
                                        <div class="pricing-table">
                                            <div class="choice-box">Popular Choice</div>
                                            <div class="table-header">
                                                <h3 class="title">Business</h3>
                                                <div class="text">on the other hand</div>
                                                <h2 class="price">300<span> Per Year</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li>Free Customer Support</li>
                                                    <li>Free installation</li>
                                                    <li>Free Back-up</li>
                                                    <li>-</li>
                                                    <li>-</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-block-two">
                                        <div class="pricing-table">
                                            <div class="choice-box">Popular Choice</div>
                                            <div class="table-header">
                                                <h3 class="title">Standard</h3>
                                                <div class="text">on the other hand</div>
                                                <h2 class="price">100<span> Per Year</span></h2>
                                            </div>
                                            <div class="table-content">
                                                <ul>
                                                    <li>Free Customer Support</li>
                                                    <li>Free installation</li>
                                                    <li>Free Back-up</li>
                                                    <li>-</li>
                                                    <li>-</li>
                                                </ul>
                                            </div>
                                            <div class="table-footer">
                                                <a href="#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-style-three end -->



    <!-- Ajax Validation Js -->
    <script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <!-- contact-section -->
    <section class="contact-section">
        <div id="section-4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">

                    <div class="contact-form-area">
                        <div class="sec-title center">
                            <h2>Contact us</h2>
                        </div>
                        <div class="form-inner">
							<div id="sucess" ></div>
                            <div id="error"></div>
                            <form id="contact_form" name="contact_form" method="post">
                                <div class="row">
                                    
                                    <div id="success"></div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="full_name" placeholder="Name" id="full_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-envelope"></i>
                                            <input type="email" name="email" placeholder="Email" id="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-file"></i>
                                            <input type="text" name="subject" placeholder="Subject" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <i class="fas fa-phone"></i>
                                            <input type="text" name="mobile" placeholder="+91" id="mobile" required title="Enter your 10 digit mobile number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Write here message" id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 column">
                                        <div class="form-group message-btn centred">
                                            <button type="submit" class="theme-btn-two" id="btn-submit">Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
							<div id="error_reg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_05">
                        <div class="image-box wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image float-bob-y"><img src="images/resource/subscribe-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_06">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Subscribe our Newsletter</h2>
                            </div>
                            <div class="text">Lorem ipsum dolor sit amet consectetur adipiscing elit donec tempus pellentesque dui vel tristique purus justo</div>
                            <form action="#" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit" class="theme-btn-two">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

    <!------------------------------------ -------------------------------------------------------
    ------------------------------------ Contact Form Modal Area Start Here-----for LOGIN ---------------------------------------------------
    ---------------------------------------------------------------------------------
    --------------------------------------------------------------------------------->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="fxt-contact-wrap">
                        <h2 class="item-title">Login</h2>
                        <div class="fxt-contact-form">
                            <form id="contact_form" name="contact_form" method="post" action="login.php">
                                <div class="row">
                                    <div class="col-lg-12 form-group">

                                        <div class="translate-bottom delay-500">
                                            <input type="text" class="form-control" placeholder="Username" name="uname" data-error="User Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-700">
                                            <input type="password" class="form-control" name="password" data-error="Password" placeholder="Password">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-12 form-group">
                                    <div class="translate-bottom delay-1300">
                                        <button type="submit" class="theme-btn-two" name="submit-form">Login</button>
                                    </div>
                                </div>
                        </div>
                        <div class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!------------------------------------ -------------------------------------------------------
    ------------------------------------ Contact Form Modal Area Start Here for registration ---------------------------------------------------
    ---------------------------------------------------------------------------------
    --------------------------------------------------------------------------------->
    <!------registration-------------------------->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="fxt-contact-wrap">
                        <h2 class="item-title">Registration</h2>
                        <span id="error_message" class="text-danger"></span>
                        <span id="success_message" class="text-success"></span>
                        <div class="fxt-contact-form">
                        <div id="error" ></div>
                        <div id="reg-success" ></div>

                            <!---form start-->
                            <form id="regist_form" name="regist_form" method="post" action="register.php"  >

                            
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                       
                                       
                                        <!---fullname-->
                                        <div class="translate-bottom delay-500">
                                            <input type="text" class="form-control" placeholder="Full name" id="register_name" name="register_name"   >
                                        </div>
                                    </div>


                                    
                                    <!--company name-->
                                    <div class="col-lg-12 form-group">

                                        <div class="translate-bottom delay-500">
                                            <input type="text" class="form-control" placeholder="Company name" name="register_compname" id="register_compname" >
                                        </div>
                                    </div>


                                    <!--email-->
                                    <div class="col-lg-12 form-group">

                                        <div class="translate-bottom delay-500">
                                            <input type="text" class="form-control" placeholder="Email" name="register_email" id="register_email" >
                                        </div>
                                    </div>



                                    <!--phon no-->
                                    <div class="col-lg-12 form-group">

                                        <div class="translate-bottom delay-500">
                                            <input type="text" class="form-control" placeholder="Phone no." name="register_phone" id="register_phone" >
                                        </div>

                                    </div>



                                    <!---create password-->                                
                                    <div class="col-lg-12 form-group">

                                        <div class="form-group has-feedback">
                                            <input class="form-control" id="password" name="password"  placeholder="New Password" type="password">
                                        
                                        </div>
                                          

                                    </div>




                                    <!--confirm password-->
                                    <div class="col-lg-12 form-group">

                                        <div class="translate-bottom delay-500">
                                            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword">
                                        </div>

                                    </div>




                                    <!--plan ----drop down----->
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-500">
                                            <select class="form-control" name="register_plan"  id="register_plan" >
                                                <option value="">---Select plan---</option>
                                                <option value="Basic">Basic</option>
                                                <option value="standard">Standard</option>
                                            </select>
                                        </div>
                                    </div>



                                    <!----submit form-->
                                    <div class="col-lg-12 form-group">
                                        <div class="translate-bottom delay-1300">
                                        <input type="submit" class="theme-btn-two" name="submit" id="submit-form" >
                                          
                                        </div>
                                    </div>
                                </div>


                               <div class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form Modal Area End Here -->



    <!-- main-footer -->
    <footer class="main-footer style-two">
        <div class="image-layer" style="background-image: url(images/icons/footer-bg-2.png);"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo">
                                    <a href="index.html"><img src="images/xperta_logo.png" alt=""></a>
                                </figure>
                                <div class="text">Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim lorem sed do eiusmod.</div>
                                <ul class="social-links">
                                    <li>
                                        <h6>Follow Us :</h6>
                                    </li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Support</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Submit a Ticket</a></li>
                                        <li><a href="#">Visit Knowledge Base</a></li>
                                        <li><a href="#">Support System</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Professional Services</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Links</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-2').animatescroll();">About</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-3').animatescroll();">Pricing</a></li>
                                        <li><a href="javascript:void(0);" class="dropdown-toggle" onclick="$('#section-4').animatescroll();">Contact</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="contact-widget footer-widget">
                                <h4 class="widget-title">Contact Info</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><b>Corporate Office</b> <br/> #41, A.J Chambers,R.V. Road, Basavanagudi,<br/> Bangalore-04, India.</li>
                                        <li>
                                            <i class="fas fa-phone-volume"></i>
                                            <a href="tel:+918041621214"> +91 80 4162 1214  </a><br />

                                        </li>
                                        <li>
                                            <i class="fas fa-envelope"></i>
                                            <a href="mailto:info@quatriz.in">info@quatriz.in</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; 2020 <a href="#">Webizzle</a>. All rights reserved</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
    <!-- contact us -->
<script>
   // JavaScript Document 
   
    $.validator.addMethod('customphone', function (value, element) {
    return this.optional(element) || /^([7-9]{1})(\d{9})$/.test(value);
}, "Kindly enter valid Mobile Number");

   
$('document').ready(function()
{  
     /* validation */
	 $("#contact_form").validate({
      rules:
	  {
			full_name: {
		    required: true,
			minlength: 3
			},
			mobile:'customphone',
			email: {
            required: true,
            email: true
            },
			subject: {
            required: true
            },
			message: {
            required: true
            },
	   },
       messages:
	   {
            full_name:{
						required: "Kindly enter your name",
						minlength: "Your name must have at least 3 characters"
                     },
           
            email: "Kindly enter a valid email address",
			subject:{
				required: "Kindly write your subject"
			},
			message:{
				required: "Kindly write your message"
			}
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		 
				var data = $("#contact_form").serialize();
				// alert();
				$.ajax({
				
				type : 'POST',
				url  : 'cont_us.php',
				data : data,
				beforeSend: function()
				{	
					$("#error_reg").fadeOut();
					$("#sucess").fadeOut();
					//$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error_reg").fadeIn(1000, function(){
											
											
											$("#error_reg").html('<div class="alert alert-danger"> <h3><i class="fa fa-thumbs-up"></i>&nbsp; Your query has not been registered.</h3></div>');
											
											$('#contact_form')[0].reset();
										
									});
																				
								}
								else if(data==2)
								{
									
									$("#sucess").fadeIn(1000, function(){ 
									$("#sucess").html('<div class="alert alert-success"> <h3><i class="fa fa-thumbs-up"></i>&nbsp; Thank you for reaching out to us! We will revert as soon as possible!.</h3></div>');
										
									});	
									$('#contact_form')[0].reset();
									//$("#register-form").fadeOut();
								}
							 
								else{
										
									$("#error_reg").fadeIn(1000, function(){
											
									$("#error_reg").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */ 

});
   
</script>
	
	
   <!-- Ajax Validation code -->
   <!--------registration --------validation---------------------------------------------------------->
   <script>
       $('document').ready(function() {
            $("#regist_form").validate({
                rules: {
                    register_name: {
                        required: true
                    },
                    register_compname: {
                        required: true
                    },
                    register_email: {
                        required: true,
                    },
                    register_phone: {
                        required: true,
                    }, 
                    password: {
                      required: true,
                      minlength: 6,
                      maxlength: 15,
                     
                    },
                    cpassword: {
                      required: true,
                       equalTo: '#password'
                    },                  
                    register_plan: {
                        required: true
                    } ,                  
                    
                },
                messages: {
                    
                    register_name: "Kindly enter Your name",
                    register_compname: "Kindly enter the company name",
                    register_email: "Kindly enter valid email id",
                    register_phone: "Kindly enter valid phone number",
                    password:{
                    required: "Provide a Password",
                    minlength: "Password Needs To Be Minimum of 6 Characters",
                     maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
                   
                    },
           
                    cpassword:{
                    required: "Retype Your Password",
                    equalTo: "Password Mismatch! Retype"
                    },
                    register_plan: "Kindly select a plan.",


                },

              submitHandler: loginForm
            });



            /* validation */

            /* form submit */
            function loginForm() {
                var data = $("#regist_form").serialize();
                $.ajax({

                    type: 'POST',
                    url: 'register.php',
                    data: data,
                    beforeSend : function() {
                        $("#error").fadeOut();
                        $("#success").fadeOut();
                       // $("#submit-form").attr("disabled", true);
                    },
                    success: function(data) {
                        if (data == 1) {

                            $("#error").fadeIn(1000, function() {
                                $("#error").html("<div class='alert alert-danger'> <i class='fa fa-ban'></i> Fill in all the fields </div>");
                                $("#submit-form").attr("disabled", false);
                                //alert("this is an alert");
                                $("#submit-form").html('Index');
                                $('#regist_form')[0].reset();

                            });

                        } else if (data ==2 ) {
                            $("#reg-success").fadeIn(1000, function() {
                                $("#reg-success").html('<div class="alert alert-success"> <i class="fa fa-check-circle"style="padding-right: 20px;"></i>You have been successfully registered</div>');
                                $("#submit-form").attr("disabled", false);
                                $("#submit-form").html('Index');
                                $('#regist_form')[0].reset();
                            });

                        }
                        else{
										
                                        $("#error").fadeIn(1000, function(){
                                                
                                        $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
                                                
                                        $("#submit-form").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
                                        $('#regist_form')[0].reset();
                                            
                                        });
                                                
                                    }


                    }
                });
                return false;
            }
            // form submit
        });
    </script>  
   


     


    <!-- jequery plugins -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/scrollbar.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/tilt.jquery.js"></script>


    <!-- main-js -->
    <script src="js/script.js"></script>

    <!-- main-js -->
    <script src="js/animatescroll.js"></script>



</body>
<!-- End of .page_wrapper -->

</html>