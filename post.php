<?php include 'header.php';
    $id = (isset($_GET['h_id']) ? $_GET['h_id'] : '');
    $sorgu=$db->prepare("SELECT * FROM haberler WHERE h_id='$id'");
    $sorgu->execute();
 ?>

        <main>
		<?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC, ))  { ?>
            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area blog-details-slider-area blog-slider-overly bg-cover bg-no-repeat position-relative"    data-background= "images/blog/<?php echo $sorgucek['h_resim'] ?>">
                <div id="scene" class="d-none"></div>
                <!-- /shape-slider -->
                <div class="single-page page-height d-flex align-items-end">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-11  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-end">
                                <div class="page-title mt-80 pb-60">
                                    <h3 class="text-capitalize text-white f-700 mt-10 mb-20"><?php echo $sorgucek["h_baslik"] ?></h3>
                                    <ul class="blog-page-content-info mb-6 d-flex align-items-center">
                                        <li class="sub">
                                            <span><?php echo $sorgucek["k_isim"] ?></span>
                                        </li>
                                        <li><span class="pl-10 pr-10">|</span></li>
                                        <li class="date">
                                            <span><?php echo $sorgucek["h_tarih"] ?></span>
                                        </li>
                                        <li><span class="pl-10 pr-10">|</span></li>
                                        <li class="admin">
                                            <span><?php echo $sorgucek["h_yazar"] ?></span>
                                        </li>
                                    </ul><!-- /blog-page-content-tag -->
                                </div><!-- /page title -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                <!-- </div> -->
                </div>
            </div> 


         
            <!-- slider-area-end  -->   <!-- ====== blog-page1-area-start=========================================== -->
            <div class="blog-page1-area blog-details-area blog-page mt-65 mb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8  col-lg-8  col-md-12  col-sm-12 col-12">
                            <div class="blog-page1-content-wrapper">
                                <div class="blog-page1-content mb-45">
                                    <p class="pb-10">
                                       <?php echo $sorgucek["h_metin"]?>
                                    </p>
                                  

                                   
                                    <div class="blog-page-footer border-bottom pt-1 pb-50 d-xl-flex align-items-center justify-content-between">
                                        <div class="modal-tags d-sm-flex align-items-center pt-25">
                                            <h6 class="text-uppercase mb-0 pr-15 secondary-color3 f-700">Tags :</h6>
                                            <ul class="tag-list">
                                                <li class="d-inline-block pr-10 f-700">
                                                    <a class="black-color d-block" href="blog-details.html">Web
                                                        Design,</a>
                                                </li>
                                                <li class="d-inline-block pr-10 f-700">
                                                    <a class="black-color d-block"
                                                        href="blog-details.html">Apps,</a>
                                                </li>
                                                <li class="d-inline-block pr-10 f-700">
                                                    <a class="black-color d-block"
                                                        href="blog-details.html">Salman Shah,</a>
                                                </li>
                                                <li class="d-inline-block pr-10 f-700">
                                                    <a class="black-color d-block"
                                                        href="blog-details.html">shabnur</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="blog-page-social-link d-flex align-items-center justify-content-xl-end mt-25">
                                            <span class="d-block text-uppercase pr-1 f-400 mb-0">Share :</span>
                                            <ul class="social-link text-md-right">
                                                <li class="d-inline-block">
                                                    <a class="facebook-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="twitter-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="linkedin-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                <li class="d-inline-block">
                                                    <a class="theme-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fad fa-share-alt"></i></a>
                                                </li>
                                            </ul><!-- social-link -->
                                        </div><!-- /blog-page-social-link -->
                                    </div>
                                </div><!-- /blog-page1-content -->
<?php } ?>
                                <div class="row author-post-area">
                                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                        <div class="single-author-post">
                                            <ul class="blog-posts d-md-flex justify-content-between pb-50">
                                                <li class="mb-30">
                                                    <a href="blog-details.html" class="secondary-color text-uppercase mr-1 d-inline-block mb-10">
                                                        <span class="black-color mr-2"><i class="fas fa-long-arrow-alt-left"></i></span>Prv Post
                                                    </a>
                                                    <h4 class="f-700">Jokod tempor incididunt ut labore et dolore magna aliqua.</h4>
                                                </li>
                                                <li class="text-md-right mb-30">
                                                    <a href="blog-details.html" class="secondary-color text-uppercase ml-1 d-block mb-10">
                                                        Next Post<span class="ml-2"><i class="fas fa-long-arrow-alt-right"></i></span>
                                                    </a>
                                                    <h4 class="f-700">Jokod tempor incididunt ut labore et dolore magna aliqua.</h4>
                                                </li>
                                            </ul>
                                            <div class="author-post-details primary-border position-relative pl-30 pr-30 pt-40 pb-30">
                                                <div class="row">
                                                    <div class="col-xl-2  col-lg-2  col-md-2  col-sm-12 col-12">
                                                        <div class="author-img mb-10">
                                                            <img class="rounded-circle" src="images/blog-page/blog-page-author-img2.jpg" alt="image">
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-10  col-lg-10  col-md-10  col-sm-12 col-12">
                                                        <div class="author-post mb-15">
                                                            <h6 class="f-700 black-color d-block pb-10">Hosne Ara</h6>
                                                            <p>Eimod te mpor incididunt ut labore et dolore ma gna aliqua. Ut enim ad minim eniam quis nostrud exercitation tempor incidi dunt ut labore et do lore magna aliqua. </p>
                                                            <div class="btn-2 d-block pt-10">
                                                                <a href="blog-details.html" class="black-color d-inline-block  position-relative f-700 text-capitalize">View All post</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /col -->
                                                    <ul class="social-link position-absolute right-0 top-0 pt-30 pr-30">
                                                        <li class="d-inline-block">
                                                            <a class="facebook-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                                        </li>
                                                        <li class="d-inline-block">
                                                            <a class="twitter-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li class="d-inline-block">
                                                            <a class="linkedin-color text-center pl-10 d-inline-block transition-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                    </ul><!-- social-link -->
                                                </div><!-- /row -->
                                            </div>
                                        </div>
                                    </div><!-- /col -->
                                </div><!-- /row author-post-area -->

                                <div class="review-comments-area mt-80">
                                    <h4 class="f-700">20 Comments</h4>
                                    <div class="review-comments-are mt-50">
                                        <div class="row">
                                            <div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-4 mt-1 pr-3 pr-sm-0 pr-md-3">
                                                <div class="client-avatar mb-30">
                                                    <img class="avatar-img rounded-circle" src="images/blog-page/blog-page-author-img2.jpg" alt="image">
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-10  col-lg-10  col-md-10  col-sm-10 col-12 pl-0">
                                                <div class="review-text ml-20 footer-border-bottom pb-35 mb-45">
                                                    <div class="review-head d-sm-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h3 class="f-700 pr-2">Maxxoile D. Silva</h3>
                                                            <ul class="d-flex mr-2">
                                                                <li>
                                                                    <span class="secondary-color3">January 04, 2020,</span>
                                                                </li>
                                                                <li>
                                                                    <span class="secondary-color3">9.23 Pm</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="my-btn">
                                                            <a href="blog-details.html" class="btn transparent-bg primary-border text-capitalize f-18 f-700">reply</a>
                                                        </div>
                                                    </div><!-- /review-head -->
                                                    <p class="dc-text1 gray-color2 mb-2 mt-20">
                                                        Vore et dot enim ad minim veniam, quis nos trud exercitation ullamco ccae datat non proident, sun em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusore et dolore magna alinor.
                                                    </p>
                                                </div>
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                        <div class="row">
                                            <div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-4 mt-1 pr-3 pr-sm-0 pr-md-3">
                                                <div class="client-avatar mb-30">
                                                    <img class="avatar-img rounded-circle" src="images/blog-page/blog-page-author-img3.jpg" alt="image">
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-10  col-lg-10  col-md-10  col-sm-10 col-12 pl-0">
                                                <div class="review-text ml-20 footer-border-bottom pb-35 mb-45">
                                                    <div class="review-head d-sm-flex justify-content-between align-items-center">
                                                        <div class="">
                                                            <h3 class="f-700 pr-2">Maxxoile D. Silva</h3>
                                                            <ul class="d-flex mr-2">
                                                                <li>
                                                                    <span class="secondary-color3">January 04, 2020,</span>
                                                                </li>
                                                                <li>
                                                                    <span class="secondary-color3">9.23 Pm</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="my-btn">
                                                            <a href="blog-details.html" class="btn transparent-bg primary-border text-capitalize f-18 f-700">reply</a>
                                                        </div>
                                                    </div><!-- /review-head -->
                                                    <p class="dc-text1 gray-color2 mb-2 mt-20">
                                                        Vore et dot enim ad minim veniam, quis nos trud exercitation ullamco ccae datat non proident, sun em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusore et dolore magna alinor.
                                                    </p>
                                                </div>
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                        <div class="row">
                                            <div class="col-xl-10  col-lg-12  col-md-11  col-sm-12 col-12 offset-xl-2 offset-md-1">
                                                <div class="row">
                                                    <div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-4 mt-1 pr-3 pr-sm-0 pr-md-3">
                                                        <div class="client-avatar mb-30">
                                                            <img class="avatar-img rounded-circle" src="images/blog-page/blog-page-author-img4.jpg" alt="image">
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-10  col-lg-9  col-md-10  col-sm-10 col-12 pl-0">
                                                        <div class="review-text ml-20 footer-border-bottom pb-35 mb-45">
                                                            <div class="review-head d-sm-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <h3 class="f-700 pr-2">Maxxoile D. Silva</h3>
                                                                    <ul class="d-flex mr-2">
                                                                        <li>
                                                                            <span class="secondary-color3">January 04, 2020,</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="secondary-color3">9.23 Pm</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="my-btn">
                                                                    <a href="blog-details.html" class="btn transparent-bg primary-border text-capitalize f-18 f-700">reply</a>
                                                                </div>
                                                            </div><!-- /review-head -->
                                                            <p class="dc-text1 gray-color2 mb-2 mt-20">
                                                                Vore et dot enim ad minim veniam, quis nos trud exern sectetur adipisicing elit, sed do eiusore et dolore magna alinor pisicing elit, sed do eius.
                                                            </p>
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                        <div class="row">
                                            <div class="col-xl-2  col-lg-2  col-md-2  col-sm-2 col-4 mt-1 pr-3 pr-sm-0 pr-md-3">
                                                <div class="client-avatar mb-30">
                                                    <img class="avatar-img rounded-circle" src="images/blog-page/blog-page-author-img5.jpg" alt="image">
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-10  col-lg-10  col-md-10  col-sm-10 col-12 pl-0">
                                                <div class="review-text ml-20 footer-border-bottom pb-35 mb-45">
                                                    <div class="review-head d-sm-flex justify-content-between align-items-center">
                                                        <div class="">
                                                            <h3 class="f-700 pr-2">Maxxoile D. Silva</h3>
                                                            <ul class="d-flex mr-2">
                                                                <li>
                                                                    <span class="secondary-color3">January 04, 2020,</span>
                                                                </li>
                                                                <li>
                                                                    <span class="secondary-color3">9.23 Pm</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="my-btn">
                                                            <a href="blog-details.html" class="btn transparent-bg primary-border text-capitalize f-18 f-700">reply</a>
                                                        </div>
                                                    </div><!-- /review-head -->
                                                    <p class="dc-text1 gray-color2 mb-2 mt-20">
                                                        Vore et dot enim ad minim veniam, quis nos trud exercitation ullamco ccae datat non proident, sun em ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusore et dolore magna alinor.
                                                    </p>
                                                </div>
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                    </div>
                                    <div class="reply-form contact-form mt-40 mb-50">
                                        <h4 class="mb-45 f-700">Add A Comment</h4>
                                        <p class="mb-30">Peteur sint occae datat non proident, sun em ipsum dolor sit amet, conse</p>
                                        <form action="#">
                                            <div class="name-and-email d-sm-flex">
                                                <div class="name w-100 mr-3 mb-15">
                                                    <input type="text" name="r-name" id="r-name" class="w-100 pl-20" placeholder="Name*">
                                                </div>
                                                <div class="email w-100 mb-20">
                                                    <input type="email" name="email" id="r-email" class="w-100 pl-20" placeholder="Email*">
                                                </div>
                                            </div><!-- /name-and-email -->
                                            <div class="comment mb-40">
                                                <textarea name="message" class="w-100 pl-20 pt-15" id="message" placeholder="Your comment*"></textarea>
                                            </div>
                                            <div class="my-btn">
                                                <a href="#" class="btn theme-bg text-uppercase f-18 f-700">Submit</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div><!-- /blog-page1-content-wrapper -->
                        </div><!-- /col -->
                        <div class="col-xl-4  col-lg-4  col-md-12  col-sm-12 col-12">
                            <div class="blog-page-sidebar pl-30">
                                <div class="rs-right panel">
                                    <div class="row">
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="sidebar-widget blog-search-wrapper mb-65">
                                                <h4 class="pb-20">Search <span><i class="far fa-angle-double-right"></i></span></h4>
                                                <div class="blog-search position-relative">
                                                    <input class="form-control" type="text" placeholder="Type to search">
                                                    <a class="position-absolute theme-bg h-100 right-0 top-0 text-center pt-3 pb-3" href="#"><span class="search-icon white-color"><i class="far fa-search"></i></span></a>
                                                </div>
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- /col -->
                                        <div class="col-xl-12  col-lg-12  col-md-6  col-sm-12 col-12">
                                            <div class="sidebar-widget mb-65">
                                                <h4 class="pb-22">Recent Posts <span><i class="far fa-angle-double-right"></i></span></h4>
                                                <ul class="recent-post">
                                                    <li class="d-flex mb-20">
                                                        <a href="blog-details.html"><img src="images/blog-page/blog-page1-rp-img1.jpg" alt="blog"></a>
                                                        <div class="r-post-content ml-15">
                                                            <h3 class="theme-color">
                                                                <a href="blog-details.html">Lorem ipsum dolor sit amet consec tore man</a>
                                                            </h3>
                                                            <span>May 23, 2020</span>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mb-20">
                                                        <a href="blog-details.html"><img src="images/blog-page/blog-page1-rp-img2.jpg" alt="blog"></a>
                                                        <div class="r-post-content ml-15">
                                                            <h3 class="theme-color">
                                                                <a href="blog-details.html">Lorem ipsum dolor sit amet consec tore man</a>
                                                            </h3>
                                                            <span>June 24, 2020</span>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex mb-20">
                                                        <a href="blog-details.html"><img src="images/blog-page/blog-page1-rp-img3.jpg" alt="blog"></a>
                                                        <div class="r-post-content ml-15">
                                                            <h3 class="theme-color">
                                                                <a href="blog-details.html">Lorem ipsum dolor sit amet consec tore man</a>
                                                            </h3>
                                                            <span>Aug 26, 2020</span>
                                                        </div>
                                                    </li>
                                                </ul>  
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- /col -->
                                        <div class="col-xl-12  col-lg-12 offset-lg-0  col-md-5 offset-md-1  col-sm-12 col-12">
                                            <div class="sidebar-widget mb-45">
                                                <h4 class="pb-20">Blog Categories <span><i class="far fa-angle-double-right"></i></span></h4>
                                                <ul>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Web design
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Development
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Traveling
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Religion
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Sports
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Tutorial
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Wordpress
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="pb-15 d-block" href="blog-details.html">
                                                            <span class="theme-color pr-1"><i class="fas fa-caret-right"></i></span>
                                                            Programming
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- /col -->
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="sidebar-widget mb-60">
                                                <h4 class="pb-22">Tags <span><i class="far fa-angle-double-right"></i></span></h4>
                                                <ul class="search-tag">
                                                    <li><a href="blog-details.html">Mirgbai</a></li>
                                                    <li><a href="blog-details.html">Bangla</a></li>
                                                    <li><a href="blog-details.html">Algorithm</a></li>
                                                    <li><a href="blog-details.html">Facebook</a></li>
                                                    <li><a href="blog-details.html">Social Network</a></li>
                                                    <li><a href="blog-details.html">Ios</a></li>
                                                    <li><a href="blog-details.html">Bootstraping</a></li>
                                                    <li><a href="blog-details.html">Android</a></li>
                                                </ul>
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                </div><!-- rs-right -->
                            </div><!-- /blog-page1-sidebar -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- blog-page1-area-end -->


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