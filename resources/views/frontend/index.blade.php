@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('/img/logo/loder.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <div class="slider-active dot-style">
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".3s">Hosting digital technology web
                                        solution! </h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Automated Control Panel with Up to
                                        50% Off Hosting Starting from $2.50/Month.</p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1s" href="industries.html"
                                            class="btn radius-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="{{ asset('../img/hero/hero_right.png') }}" alt=""
                                        data-animation="fadeInRight" data-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".3s">Hosting digital technology web
                                        solution! </h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Automated Control Panel with Up to
                                        50% Off Hosting Starting from $2.50/Month.</p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1s" href="industries.html"
                                            class="btn radius-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="{{ asset('/img/hero/hero_right.png') }}" alt=""
                                        data-animation="fadeInRight" data-delay="1.5s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".3s">Hosting digital technology web
                                        solution! </h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">Automated Control Panel with Up to
                                        50% Off Hosting Starting from $2.50/Month.</p>
                                    <!-- Slider btn -->
                                    <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1s" href="industries.html"
                                            class="btn radius-btn">get started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="{{ asset('/img/hero/hero_right.png') }}" alt=""
                                        data-animation="fadeInRight" data-delay="1.5s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="{{ asset('/img/hero/top-left-shape.png') }}" alt="">
                <img class="slider-shape2" src="{{ asset('/img/hero/right-top-shape.png') }}" alt="">
                <img class="slider-shape3" src="{{ asset('/img/hero/left-botom-shape.png') }}" alt="">
            </div>
            <!-- slider Social -->
            <div class="slider-social d-none d-md-block">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
        <!-- Slider Area End -->
        <!--Services Area Start -->
        <div class="services-area section-padding30 fix">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-100">
                            <span>Oue Best Services</span>
                            <h2>What we have for you</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-wrapper mb-50">
                            <div class="single-services">
                                <div class="services-icon">
                                    <span class="flaticon-server"></span>
                                </div>
                                <div class="services-cap">
                                    <h3><a href="services.html">Shared Hosting</a></h3>
                                    <p>Hunky dory barney fannaround up the duff no biggie loo cup of tea jolly good
                                        ruddy!</p>
                                    <a href="services.html" class="get-btn"><i class="ti-arrow-right"></i> get
                                        started</a>
                                </div>
                            </div>
                            <div class="services-shape">
                                <span>.01</span>
                                <img src="{{ asset('/img/gallery/shape-services.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-wrapper mb-50">
                            <div class="single-services">
                                <div class="services-icon">
                                    <span class="flaticon-green"></span>
                                </div>
                                <div class="services-cap">
                                    <h3><a href="services.html">Reseller Hosting</a></h3>
                                    <p>Hunky dory barney fannaround up the duff no biggie loo cup of tea jolly good
                                        ruddy!</p>
                                    <a href="services.html" class="get-btn"><i class="ti-arrow-right"></i> get
                                        started</a>
                                </div>
                            </div>
                            <div class="services-shape">
                                <span>.02</span>
                                <img src="{{ asset('/img/gallery/shape-services.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="services-wrapper mb-50">
                            <div class="single-services">
                                <div class="services-icon">
                                    <span class="flaticon-servers"></span>
                                </div>
                                <div class="services-cap">
                                    <h3><a href="services.html">Cloud Hosting</a></h3>
                                    <p>Hunky dory barney fannaround up the duff no biggie loo cup of tea jolly good
                                        ruddy!</p>
                                    <a href="services.html" class="get-btn"><i class="ti-arrow-right"></i> get
                                        started</a>
                                </div>
                            </div>
                            <div class="services-shape">
                                <span>.03</span>
                                <img src="{{ asset('/img/gallery/shape-services.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- Search domain Start -->
        <section class="search-domain-area section-bg pt-140 pb-140"
            data-background="{{ asset('/img/gallery/section_bg02.jpg') }}">
            <div class="container">
                <div class="row align-items-end mb-80">
                    <div class="col-xl-4">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>Get your domain</span>
                            <h2>Search domain you want</h2>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Search Box -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <input type="text" placeholder="Search your domain name here">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">.com</option>
                                        <option value="">.bd</option>
                                        <option value="">.edu</option>
                                        <option value="">.gov</option>
                                        <option value="">.us</option>
                                        <option value="">.uk</option>
                                        <option value="">.pk</option>
                                        <option value="">.org</option>
                                        <option value="">.live</option>
                                        <option value="">.net</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="#">search now</a>
                            </div>
                        </form>
                        <!-- Search Box End-->
                    </div>
                </div>
                <!-- Domain List -->
                <div class="row">
                    <div class="domain-list">
                        <div class="single-domain">
                            <span>.com</span>
                            <p>$3.99/Year</p>
                        </div>
                        <div class="single-domain">
                            <span>.net</span>
                            <p>$2.99/Year</p>
                        </div>
                        <div class="single-domain">
                            <span>.com</span>
                            <p>$3.99/Year</p>
                        </div>
                        <div class="single-domain">
                            <span>.co</span>
                            <p>$5.99/Year</p>
                        </div>
                        <div class="single-domain">
                            <span>.org</span>
                            <p>$2.99/Year</p>
                        </div>
                        <div class="single-domain">
                            <span>.live</span>
                            <p>$1.99/Year</p>
                        </div>
                    </div>
                </div>
                <!-- Domain List  End-->
            </div>
        </section>
        <!-- Search domain End -->
        <!--All startups Start -->
        <section class="all-starups-area section-padding2">
            <!-- left Contents -->
            <div class="starups">
                <div class="starups-details">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle3">
                        <span>Get your domain</span>
                        <h2>We are with you every step of the way</h2>
                    </div>
                    <!-- details caption -->
                    <div class="details-caption">
                        <p>Cnsectetur adipisicing cvbelit, sxced dbeo eiucdsmod tempor incididunt ut labore egsfgt
                            dolore magna aliqua. Ut encim ad minim veniam, quis nostrud exercitation ulclamco laboris
                            nisi ufgut aliquip edgx ebrha.</p>
                        <p>Cnsectetur adipisicing cvbelit, sxced dbeo eiucdsmod tempor incididunt ut labore egsfgt
                            folorem.</p>
                    </div>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>
            <!--Right Contents  -->
            <div class="starups-img">
                <img src="{{ asset('/img/gallery/visit_bg.jpg') }}" alt="">
            </div>
        </section>
        <!--All startups End -->
        <!-- work company Start-->
        <section class="work-company">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3">
                            <span>Get your domain</span>
                            <h2>We are with you every step of the way</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="logo-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="{{ asset('/img/gallery/cisco_brand6.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work company End-->
        <!-- Our pricing Start -->
        <div class="our-pricing-area section-padding30 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- First Tab -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="single-pricing mb-30">
                                    <div class="pricing-caption text-center">
                                        <div class="procing-logo">
                                            <img src="{{ asset('/img/icon/roket.png') }}" alt="">
                                        </div>
                                        <span>$ 05.00</span>
                                        <div class="pricing-listing">
                                            <ul>
                                                <li>Increase traffic 50%</li>
                                                <li>Social Media Marketing</li>
                                                <li>10 Free Optimization</li>
                                                <li>24/7 support</li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn white-btn">Get the plan</a>
                                    </div>
                                    <!-- pricing Shape -->
                                    <div class="pricing-shape">
                                        <img class="pricing1" src="{{ asset('/img/gallery/procing-shape1.png') }}"
                                            alt="">
                                        <img class="pricing2" src="{{ asset('/img/gallery/procing-shape2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- Second Tab -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="single-pricing  mb-30">
                                    <div class="pricing-caption text-center">
                                        <div class="procing-logo">
                                            <img src="{{ asset('/img/icon/roket.png') }}" alt="">
                                        </div>
                                        <span>$ 05.00</span>
                                        <div class="pricing-listing">
                                            <ul>
                                                <li>Increase traffic 50%</li>
                                                <li>Social Media Marketing</li>
                                                <li>10 Free Optimization</li>
                                                <li>24/7 support</li>
                                            </ul>
                                        </div>
                                        <a href="#" class="btn white-btn">Get the plan</a>
                                    </div>
                                    <!-- pricing Shape -->
                                    <div class="pricing-shape">
                                        <img class="pricing1" src="{{ asset('/img/gallery/procing-shape1.png') }}"
                                            alt="">
                                        <img class="pricing2" src="{{ asset('/img/gallery/procing-shape2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing-caption -->
                    <div class="col-lg-6 col-md-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3">
                            <span>Oue Best Services</span>
                            <h2>Our pricing</h2>
                            <p class="pt-20 pb-40">Cnsectetur adipisicing cvbelit, sxced dbeo eiucdsmod tempor
                                incididunt ut labore egsfgt dolore magna aliqua. Ut encim ad minim veniam, quis nostrud
                                exercitation ulclamco laboris nisi ufgut aliquip edgx ebrha.</p>
                        </div>
                        <!-- Tab Button -->
                        <div class="pricing-button">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Monthly</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Yearly</a>
                                </div>
                            </nav>
                        </div>
                        <!-- End Tab Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our pricing End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container ">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center mb-30">
                                        <div class="founder-img">
                                            <img src="{{ asset('/img/testmonial/Homepage_testi.png') }}" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jahon Ann</span>
                                            <p>CEO, Colorlib</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrice.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center mb-30">
                                        <div class="founder-img">
                                            <img src="{{ asset('/img/testmonial/Homepage_testi.png') }}" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Jahon Ann</span>
                                            <p>CEO, Colorlib</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                            ultrice.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="testimonial-banner">
                            <img src="{{ asset('/img/gallery/testimonail.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <img src="{{ asset('/img/testmonial/shape-testimonial.png') }}" class="testimonial-shape d-none d-lg-block"
                alt="">
        </div>
        <!-- Testimonial End -->
        <!-- Support Area Start -->
        <section class="support-area section-bg pt-150 pb-150" data-background="assets/img/gallery/section_bg03.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="support-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle5">
                                <span>Get your domain</span>
                                <h2>24/7 Expert Support</h2>
                                <p class="support-details">Our expert team is always on hand to help answer your
                                    questions, get you started, and grow your presence online. You can call, chat or
                                    email us any time!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="support-number">
                            <!-- Single contact -->
                            <div class="single-contact text-center">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="contact-number">
                                    <span>+1 514 648</span>
                                </div>
                            </div>
                            <!-- Single contact -->
                            <div class="single-contact text-center">
                                <div class="contact-icon">
                                    <i class="far fa-comment"></i>
                                </div>
                                <div class="contact-number">
                                    <span>Text Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Area End -->
        <!-- Blog Area Start -->
        <section class="blogs-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Our Blog</span>
                            <h2>Our latest news</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog1.png') }}" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">23 Dec, 2020</span>
                                <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog2.png') }}" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">23 Dec, 2020</span>
                                <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blogs mb-100">
                            <div class="blog-img">
                                <img src="{{ asset('/img/gallery/blog3.png') }}" alt="">
                            </div>
                            <div class="blog-cap">
                                <span class="color1">23 Dec, 2020</span>
                                <h4><a href="#">Addiction When Gambling Becomes</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="{{ asset('/img/logo/logo2_footer.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>All packages</h4>
                                    <ul>
                                        <li><a href="#">Package-1</a></li>
                                        <li><a href="#">Package-2</a></li>
                                        <li><a href="#">Package-3</a></li>
                                        <li><a href="#">Custome</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Link</h4>
                                    <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">News & Articles</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>+1 514 648 256</h4>
                                    <ul>
                                        <li><a href="#">youremail@gmail.com</a></li>
                                    </ul>
                                    <p>123 East 26th Street, Fifth Floor, New York, NY 10011</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-9 ">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                                        aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>





</body>
{{-- <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <div class="row mb-4">
        <div class="col">
            <example-component></example-component>
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fab fa-font-awesome-flag"></i> Font Awesome @lang('strings.frontend.test')
                </div>
                <div class="card-body">
                    <i class="fas fa-home"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-pinterest"></i>
                </div><!--card-body-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row--> --}}
@endsection