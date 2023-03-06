<?php include 'header.php'; 
        $sorgu2=$db->prepare("SELECT * FROM iletisim");
        $sorgu2->execute();
        $sorgucek=$sorgu2->fetch(PDO::FETCH_ASSOC);
?>
        <main>
            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area position-relative primary-bg">
                <div id="scene" class="position-absolute w-100 h-100">
                    <img data-depth="0.20" class="shape page-shape-1 d-none d-lg-inline-block s-shape" src="images/slider/page-shape/page-shape1.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-2 d-none d-lg-inline-block s-shape" src="images/slider/page-shape/page-shape2.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-3 d-none d-lg-inline-block" src="images/slider/page-shape/page-shape3.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-4 d-none d-lg-inline-block" src="images/slider/page-shape/page-shape4.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-5 d-none d-lg-inline-block bounce-animate2" src="images/slider/page-shape/page-shape5.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-6 d-none d-lg-inline-block bounce-animate" src="images/slider/page-shape/page-shape6.png" alt="#">
                    <img data-depth="0.20" class="shape page-shape-7 d-none d-lg-inline-block s-shape" src="images/slider/page-shape/page-shape1.png" alt="#">
                </div>
                <!-- /shape-slider -->
                
                <div class="single-page page-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                <div class="page-title mt-110 text-center">
                                    <span class="theme-color f-700">Know more</span>
                                    <h1 class="text-capitalize f-700 mt-10 mb-20">Contact Us</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a class="secondary-color3" href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active text-capitalize secondary-color3" aria-current="page">Contact</li>
                                        </ol>
                                    </nav>
                                </div><!-- /page title -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                <!-- </div> -->
                </div>
            </div>
            <!-- slider-area-end  -->


            <!-- ====== contact-area-start
            ==================================================== -->
            <div id="contact" class="contact-area mb-165 mt-155">
                <div class="contact-wrapper position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5 col-md-12  col-sm-12 col-12">
                                <div class="contact-wrapper pb-20">
                                    <div class="title text-md-center text-lg-left">
                                        <span class="theme-color f-700">Stay Connected</span>
                                        <h3 class="f-700">Contact Us</h3>
                                    </div>
                                    <ul class="contact-info-content d-md-flex justify-content-between d-lg-block mt-50">
                                        <li class="contact-location s-contact text-md-center text-lg-left mb-35 transition-3 d-lg-flex d-flex d-md-block">
                                            <div class="contact-icon d-inline-block text-center primary-bg mr-30">
                                                <span class="text-white d-inline-block">
                                                   <img src="images/icon/placeholder-icon.png" alt="image">
                                                </span>
                                            </div><!-- /contact-icon -->
                                            <div class="contact-text">
                                                <h4 class="f-700 mb-2">Location</h4>
                                                <p class="secondary-color mb-0">20 Bordeshi, Amin Bazar
                                                    <br> Savar, Dhaka - 1348</p>
                                            </div>
                                        </li><!-- /contact-location -->
                                        <li class="contact-email s-contact text-md-center text-lg-left mb-35 transition-3 d-lg-flex d-flex d-md-block">
                                            <div class="contact-icon d-inline-block text-center primary-bg mr-30">
                                                <span class="text-white d-inline-block">
                                                    <img src="images/icon/letter-icon.png" alt="image">
                                                    </span>
                                            </div><!-- /contact-icon -->
                                            <div class="contact-text">
                                                <h4 class="f-700 mb-2">Email</h4>
                                                <p class="mb-0">
                                                    <a class="secondary-color2 primary-hover d-block" href="#"><?php echo $sorgucek["i_mail"]; ?></a>
                                                    <a class="secondary-color2 primary-hover d-block" href="#">sales@evalo.com</a>
                                                </p>
                                            </div>
                                        </li><!-- /contact-email -->
                                        <li class="contact-phone s-contact text-md-center text-lg-left mb-40 transition-3 d-lg-flex d-flex d-md-block">
                                            <div class="contact-icon d-inline-block text-center primary-bg mr-30">
                                                <span class="text-white d-inline-block">
                                                    <img src="images/icon/call-icon.png" alt="image">
                                                </span>
                                            </div><!-- /contact-icon -->
                                            <div class="contact-text">
                                                <h4 class="f-700 mb-2">Phone</h4>
                                                <p class="mb-0">
                                                    <a class="secondary-color2 primary-hover d-block" 
                                                    href="#">+123 456 7890</a>
                                                </p>
                                            </div>
                                        </li><!-- /contact-phone -->
                                    </ul><!-- /contact-info-content -->
                                </div><!-- /contact-wrapper -->
                            </div><!-- /col -->
                            <div class="col-xl-6 col-lg-7 col-md-12  col-sm-12 col-12">
                                <div class="contact-wrapper">
                                    <div class="contact-form">
                                        <div class="title px-md-5 px-lg-0 text-md-center text-lg-left">
                                            <h3 class="f-700 mb-40">Drop us a line</h3>
                                            <p class="mb-20">Phasellus seiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                        </div><!-- /title -->
                                        <form action="php/mail.php" method="POST" id="contact-form">
                                            <div class="contact-info text-md-center text-lg-left pt-20">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-15" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                                        <input class="name w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 primary-font-family" type="text" name="inputName" id="inputName" placeholder="Your Name *" required><!-- /name -->
                                                    </div><!-- /col -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-15" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">
                                                        <input class="email w-100 theme-border pl-20 pt-15 pb-15 pr-10 form-color border-radius5 primary-font-family" type="email" name="inputEmail" id="inputEmail" placeholder="Your Email *" required><!-- /email -->
                                                    </div><!-- /col -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-15" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                                        <input class="phone w-100 theme-border pl-20 pt-15 pb-15 pr-10" type="text" name="inputPhone" id="inputPhone" placeholder="Your Phone" required><!-- /phone -->
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="row ">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-15" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                                        <textarea class="massage w-100 primary-border pl-20 pt-20" name="inputMessage" id="inputMessage" placeholder="Your query *" required></textarea><!-- /textarea -->
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                                <div class="my-btn mt-40">
                                                    <button class="btn theme-bg text-uppercase f-18 f-700" type="submit" name="submit" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2500">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="form-message mt-20"></p>
                                    </div><!-- /contact-form -->
                                </div><!-- /contact-wrapper -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                        <div class="row over-hidden">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="500">
                                <div class="map-wrapper z-index-1 mt-120 img-grayscale" id="mapwrapper"> </div>
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div><!-- /contact-wrapper -->
            </div>
            <!-- contact-area-end  -->


            <!-- ====== banner-area-start ========================================= -->
            <div class="banner-area service-page primary-bg">
                <div class="container">
                    <div class="banner-wrapper pt-100 pb-100 transition3">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-9 col-lg-9  col-md-12 col-sm-12 col-12">
                                <div class="banner-content">
                                    <h4 class="f-700 mb-18">Evalo helps you to grow fast</h4>
                                    <p class="mb-0">Bolor sit amet cons ectetur adipisic</p>
                                </div><!-- /work-banner-content -->
                            </div><!-- /col -->
                            <div class="col-xl-3 col-lg-3  col-md-12 col-sm-12 col-12">
                                <div class="banner-btn float-left float-lg-right">
                                    <div class="my-btn">
                                        <a href="service.html" class="btn theme-bg text-capitalize f-18 f-700">read more</a>
                                    </div><!-- /my-btn -->
                                </div><!-- /work-banner-content -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /banner-wrapper -->
                </div><!-- /container -->
            </div>
            <!-- banner-area-end  -->


        </main>
          <?php include 'footer.php'; ?>