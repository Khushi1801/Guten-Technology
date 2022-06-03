<!DOCTYPE html>
<html lang="en">

        <?php 
            require 'common/head.php';
        ?>

<body>

    <?php
        require 'common/preloader.php';
    ?>

    <div class="page-wrapper">


        <div class="site-header__header-one-wrap clearfix">

            <?php
            require 'common/welcome-page.php';
            ?>

            <?php
            require 'common/header.php';
            ?>

        </div>

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".banner-slider-button-next",
        "prevEl": ".banner-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider1.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We are Engineering Consultants providing SERVICES.</p>
                                        <h2>GUTEN <br> TECHNOLOGY <br> SERVICES</h2>
                                        <a href="about.php" class="thm-btn">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider3.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We are Engineering Consultants providing SERVICES.</p>
                                        <h2>GUTEN <br> TECHNOLOGY <br> SERVICES</h2>
                                        <a href="#" class="thm-btn">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(assets/images/slider4.jpg);"></div>
                        <div class="container">
                            <div class="swiper-slide-inner">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p>We are Engineering Consultants providing SERVICES.</p>
                                        <h2>GUTEN <br> TECHNOLOGY <br> SERVICES</h2>
                                        <a href="about.php" class="thm-btn">download</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="banner-slider-nav">
                    <div class="banner-slider-button-prev"><span class="flaticon-right-arrow"></span></div>
                    <div class="banner-slider-button-next"><span class="flaticon-right-arrow"></span> </div>
                </div>
            </div>
        </section>

        <!-- CTA One Start -->
        <section class="cta_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta_one_inner">
                            <div class="cta_one_left_text">
                                <h3>A High Quality Industrial Services</h3>
                            </div>
                            <div class="cta_one_right_btn">
                                <a href="services.php" class="thm-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Welcome One Start -->
        <section class="welcome_one">
            <div class="welcome_one_shape_bg"
                style="background-image: url(assets/images/resources/welcome_one_shape-bg.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome_one_left">
                            <div class="welcome_one_left_image">
                                <img src="assets/images/about.jpg" alt="">
                                <!-- <ul class="counter_one list-unstyled">
                                    <li class="counter_one_single">
                                        <h2 class="counter">660</h2>
                                        <p>Industrial Solutions</p>
                                    </li>
                                    <li class="counter_one_single">
                                        <div class="counter_one_experience">
                                            <h2><span class="counter">30</span>+</h2>
                                        </div>
                                        <p>Years Experience</p>
                                    </li>
                                    <li class="counter_one_single">
                                        <h2 class="counter">800</h2>
                                        <p>Projects Completed</p>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome_one_right_content">
                            <div class="block-title text-left">
                                <h3 style="text-decoration: underline;text-decoration-color: #fbc80b;">About Company</h3>
                                <h2>We’re More than a Industrial Company</h2>
                            </div>
                            <div class="welcome_one_right_text_box">
                                <p class="welcome_one_right_first_text">Guten Technology Services is a multi-disciplinary Engineering Consultancy 
                                    and Designing Company based in Vadodara (Gujarat).</p>
                                <!-- <p class="welcome_one_right_second_text">There are many variations of passages of Lorem
                                    Ipsum available, but the majority have suffered alteration in some form, by injected
                                    humour.</p> -->
                            </div>
                            <br>
                            <h3><img src="assets/images/visionary.png" style="height: 30px;"> Our Vision</h3>
                            <p>Build a strong full-fledged technology services company to address market needs with a major 
                                thrust on providing total solutions from concept to commissioning for support to the enterprises in the global process plant industry.</p>
                                <br>
                                <br>
                            <h3><img src="assets/images/target.png" style="height: 30px;"> Our Mission</h3>
                            <p>Become the premier technology partner for our clients by providing cost effective innovative design solutions and services 
                                that meet our client’s needs with excellence and punctual delivery, with a sound technical expertise and vast domain experience. 
                                We would like to support our clients by giving them comfort and confidence in us by delivering time bound quality services in full.</p>
                            <!-- <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>Invest in your simply neighborhood</li>
                                <li><i class="fa fa-check"></i>Support people in free text extreme need</li>
                                <li><i class="fa fa-check"></i>Largest global industrial business community</li>
                                <li><i class="fa fa-check"></i>Share your love for factory community</li>
                            </ul> -->
                            <!-- <div class="welcome_one_signature_box">
                                <div class="welcome_one_signature_bg"
                                    style="background-image: url(assets/images/resources/welcome_one_signature.png)">
                                </div>
                                <h3>William Smith</h3>
                                <p>Co Founder</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Services One Start -->
        <section class="our_services_one">
            <div class="container">
                <div class="block-title text-center">
                    <h2 style="text-decoration: underline;text-decoration-color: #fbc80b;">Industries We Serve</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!-- Our Services One Single -->
                        <div class="our_services_one_single wow fadeInUp">
                            <div class="our_services_one_image">
                                <img src="assets/images/speciality chemicals.jpg" alt="">
                                <div class="our_services_icon">
                                    <span class="flaticon-industrial"></span>
                                </div>
                            </div>
                            <div class="our_services_one_content">
                                <h3><a href="#">Speciality <br> Chemicals</a></h3>
                                <!-- <p>Aliq is notm hendr erit a augue insu image pellen simply freede text ipsum.</p> -->
                                <a href="#" class="services_one_arrow_icon">
                                    <span class="flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!-- Our Services One Single -->
                        <div class="our_services_one_single wow fadeInUp" data-wow-delay="100ms">
                            <div class="our_services_one_image">
                                <img src="assets/images/petrochemical.jpg" alt="">
                                <div class="our_services_icon">
                                    <span class="flaticon-petroleum"></span>
                                </div>
                            </div>
                            <div class="our_services_one_content">
                                <h3><a href="#">Chemical <br> / Petrochemical</a></h3>
                                <!-- <p>Aliq is notm hendr erit a augue insu image pellen simply freede text ipsum.</p> -->
                                <a href="#" class="services_one_arrow_icon">
                                    <span class="flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!-- Our Services One Single -->
                        <div class="our_services_one_single wow fadeInUp" data-wow-delay="200ms">
                            <div class="our_services_one_image">
                                <img src="assets/images/oil and gas.jpg" alt="">
                                <div class="our_services_icon">
                                    <span class="flaticon-engineering"></span>
                                </div>
                            </div>
                            <div class="our_services_one_content">
                                <h3><a href="#">Oil <br> & Gas</a></h3>
                                <!-- <p>Aliq is notm hendr erit a augue insu image pellen simply freede text ipsum.</p> -->
                                <a href="#" class="services_one_arrow_icon">
                                    <span class="flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brand-one">
            <div class="container">
                <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
                    data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 5, "dots": false, "nav": false, "margin": 140, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 140}}}'>
                    <div class="item">
                        <img src="assets/images/Sterling_logo slider.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/Opal_logo slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/panzer slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/pw piping world slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/kutch kcil slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/Sterling_logo slider.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/Opal_logo slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/panzer slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/pw piping world slider.jpg" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/kutch kcil slider.jpg" alt="">
                    </div><!-- /.item -->
                </div>
            </div>
        </section>
        
        <!--Projects One Start-->
        <section class="our_projects_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="block-title text-left">
                            <h4>Closed Projects</h4>
                            <h2>Explore Our Projects</h2>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="project-filter style1 post-filter has-dynamic-filters-counter list-unstyled">
                            <li data-filter=".filter-item" class="active"><span class="filter-text">All</span></li>
                            <li data-filter=".inds"><span class="filter-text">Industry</span></li>
                            <li data-filter=".fac"><span class="filter-text">Factory</span></li>
                            <li data-filter=".elec"><span class="filter-text">Electronics</span></li>
                            <li data-filter=".cons"><span class="filter-text last-pd-none">Construction</span></li>
                        </ul>
                    </div>
                </div>
                <div class="row filter-layout masonary-layout">
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons elec">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-1.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec cons">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-2.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item elec fac">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-3.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds cons">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-4.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item fac cons">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-5.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 filter-item inds elec">
                        <!--Projects One Single-->
                        <div class="our_projects_one_single">
                            <div class="our_projects_one_image">
                                <img src="assets/images/project/project-1-img-6.jpg" alt="">
                                <div class="our_projects_one_icon">
                                    <a href="projects-detail.php"><span class="flaticon-plus"></span></a>
                                </div>
                                <div class="our_projects_one_text">
                                    <h4>Bridge <br> Construction</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!--Blog One Start-->
        <section class="blog_one">
            <div class="container">
                <div class="block-title text-center">
                    <h4>From The Blog</h4>
                    <h2>News & Articles</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/blog/blog-1-img-1.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <p>20 <br> Oct</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul> -->
                                <div class="blog_one_title">
                                    <h3><a href="#">We are best for any industrial business
                                            solutions</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="blog_one_image">
                                <img src="assets/images/blog/blog-1-img-2.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <p>20 <br> Oct</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul> -->
                                <div class="blog_one_title">
                                    <h3><a href="#">Organically grow the holistic world view of
                                            disruptive</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="blog_one_image">
                                <img src="assets/images/blog/blog-1-img-3.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <p>20 <br> Oct</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <!-- <ul class="list-unstyled blog-one__meta">
                                    <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="blog-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul> -->
                                <div class="blog_one_title">
                                    <h3><a href="#">Bring to the table win-win survival strategies
                                            to</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Call One Start-->
        <!-- <section class="call_one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="call_one_inner">
                            <div class="call_one_image">
                                <img src="assets/images/resources/call_1-img-1.jpg" alt="">
                            </div>
                            <div class="call_one_content">
                                <div class="text">
                                    <p>Gravida sodales condimentum pellentesq <br> accumsan orci quam sagittis sapien.
                                        san <br> orci quam sagittis sapien.</p>
                                </div>
                                <div class="call_one_number">
                                    <h4>Get a Free Estimate</h4>
                                    <a href="tel:92-666-888-0000">92 666 888 0000</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="blog_one">

        </section>
        <!--Google Map-->
        <section class="google_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14764.157130177819!2d73.23307882356916!3d22.314354065969656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcfead1a5a59d%3A0x38467e48c639276c!2sKanha%20City!5e0!3m2!1sen!2sin!4v1625727671780!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </section>

        <?php
        require 'common/footer.php';
        ?>
</body>

</html>