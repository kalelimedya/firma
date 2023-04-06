<?php include 'header.php';
    $sorgu=$db->prepare("SELECT * FROM haberler");
    $sorgu->execute();
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
                                    <span class="theme-color f-700">Get Updated</span>
                                    <h1 class="text-capitalize f-700 mt-10 mb-20">Blog</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a class="secondary-color3" href="index.html">Anasayfa</a></li>
                                        <li class="breadcrumb-item active text-capitalize secondary-color3" aria-current="page">Blog</li>
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


            <!-- ====== blog-page1-area-start=========================================== -->
            <div class="blog-page1-area blog-page mt-170 mb-170">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8  col-lg-8  col-md-12  col-sm-12 col-12">
                     
                            <div class="blog-page1-content-wrapper">
                            <?php while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC, ))  { ?>
                                <img src="images/blog/<?php echo $sorgucek['h_resim'] ?>"/>
                        

                                <div class="blog-page1-content mt-25 mb-60">
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
                                    <h4 class="mb-22">
                                        <a href="blog-details.html"><?php echo $sorgucek["h_baslik"] ?></a>
                                    </h4>
                                    <p><?php echo substr($sorgucek["h_metin"],0,50) ?></p>
                                    <div class="blog-page-footer mt-15 d-sm-flex align-items-center justify-content-between">
                                        <div class="my-btn mt-15">
                                            <a href="blog-details.html" class="btn theme-bg text-capitalize f-18 f-700">devamını oku</a>
                                        </div>
                                        <div class="blog-page-social-link d-flex align-items-center justify-content-lg-end mt-25">
                                            <span class="d-block text-uppercase pr-1 f-700 mb-0">Paylaş :</span>
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
                            </div><!-- /blog-page1-content-wrapper -->
                         
                 
                           
                        </div><!-- /col -->
                        <div class="col-xl-4  col-lg-4  col-md-12  col-sm-12 col-12">
                            <div class="blog-page-sidebar pl-30">
                                <div class="rs-right panel">
                                    <div class="row">
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="sidebar-widget blog-search-wrapper mb-65">
                                                <h4 class="pb-20">Ara <span><i class="far fa-angle-double-right"></i></span></h4>
                                                <div class="blog-search position-relative">
                                                    <input class="form-control" type="text" placeholder="Aramak istediğiniz nedir">
                                                    <a class="position-absolute theme-bg h-100 right-0 top-0 text-center pt-3 pb-3" href="#"><span class="search-icon white-color"><i class="far fa-search"></i></span></a>
                                                </div>
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- /col -->
                                        <div class="col-xl-12  col-lg-12  col-md-6  col-sm-12 col-12">
                                            <div class="sidebar-widget mb-65">
                                                <h4 class="pb-22">Son gönderiler <span><i class="far fa-angle-double-right"></i></span></h4>
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
                                            <div class="sidebar-widget mb-40">
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

                    <div class="row mt-20">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <nav class="pagination-page" aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#"><i class="fas fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- /col -->
                    </div>

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