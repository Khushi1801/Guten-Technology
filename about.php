<!DOCTYPE html>
<html lang="en">
    <?php
    require 'common/head.php';
    ?>
    <head>
        <style>
            .popup {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none; }

                /* The actual popup */ .popup .popuptext {
                    visibility: hidden;
                    width: 250px;
                    background-color: #555;
                    color: #fff;
                    text-align: center;
                    border-radius: 6px;
                    padding: 8px 0;
                    position: absolute;
                    z-index: 1;
                    bottom: 125%;
                    left: 50%;
                    margin-left: -80px; }

                /* Popup arrow */ .popup .popuptext::after {
                    content: "";
                    position: absolute;
                    top: 100%;
                    left: 50%;
                    margin-left: -5px;
                    border-width: 5px;
                    border-style: solid;
                    border-color: #555 transparent transparent transparent; }

                /* Toggle this class - hide and show the popup */ .popup .show {
                    visibility: visible;
                    -webkit-animation: fadeIn 1s;
                    animation: fadeIn 1s; }

                /* Add animation (fade in the popup) */ @-webkit-keyframes fadeIn {
                    from {opacity: 0;}
                    to {opacity: 1;} }

                @keyframes fadeIn {
                    from {opacity: 0;}
                    to {opacity:1 ;} } 
        </style>
    </head>

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

        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/what\ we\ offer.jpg);">
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html" style="color: #fcb80b;text-decoration: underline;">Home</a></li>
                    <!-- <li><span>About</span></li> -->
                </ul>
                <h2 style="color: #fcb80b;text-decoration: underline;">About</h2>
            </div>
        </section>

        <!--Get To Know Start-->
        <section class="get_to_know">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="get_to_know_left">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get_to_know_single">
                                        <div class="get_to_know_image">
                                            <img src="assets/images/about2-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="get_to_know_single">
                                        <div class="get_to_know_image">
                                            <img src="assets/images/about2-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get_to_know_big_image">
                                        <img src="assets/images/about2-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="get_to_know_right">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get_to_know_single">
                                        <div class="get_to_know_image">
                                            <img src="assets/images/about2-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="get_to_know_single">
                                        <div class="get_to_know_image">
                                            <img src="assets/images/about2-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="get_to_know_big_image">
                                        <img src="assets/images/about2-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h2 style="text-decoration: underline;text-decoration-color: #fcb80b;text-align: center;">Company Profile</h2><br>
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/basic engineering.png" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">Basic Engineering</a></h3><br><br>
                                    <div class="popup" onclick="myFunction()">Click Here!
                                        <span class="popuptext" id="myPopup"><ul>-PFD with heat and mass balance<br>
                                            -PDS / IPDS<br>
                                            -P&ID Development<br> 
                                            -Basic Equipment Layout<br>
                                            -Conceptual Equipment Layout<br>
                                            -Line List & other Calculations<br>
                                            -Instrumentation</ul></span>
                                    </div>
                                    <script>
                                        // When the user clicks on <div>, open the popup
                                        function myFunction() {
                                          var popup = document.getElementById("myPopup");
                                          popup.classList.toggle("show");
                                        }
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/detailed engineering.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">Detailed Engineering</a></h3><br>
                                    <div class="popup" onclick="myFunction2()">Click Here!
                                        <span class="popuptext" id="myPopup2"><ul>-Mechanical equipment Data Sheet<br>
                                            -Equipment Fabrication Drawing<br>
                                            -Instrument Data Sheet<br>
                                            -Electrical and Instrument Cable Tray Layout<br>
                                            -Control System Specification<br>
                                            -Foundation and Structural Drawing<br>
                                            -Piping General Arrangement Drawing<br>
                                            -Isomertic Preparation<br>
                                            -Electrical load list & Single Line Diagram<br>
                                            -Piping Design Basis<br>
                                            -Technical Bid Analysis & TR<br>
                                            -PMS / VMS / VALVE Data Sheet<br>
                                            -Plant 3D Modeling<br>
                                            -Plot Plant and Detail Equipment Layout</ul></span>
                                    </div>
                                    <script>
                                        // When the user clicks on <div>, open the popup
                                        function myFunction2() {
                                          var popup = document.getElementById("myPopup2");
                                          popup.classList.toggle("show");
                                        }
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/procurement support.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">Procurement Support</a></h3><br>
                                    <div class="popup" onclick="myFunction3()">Click Here!
                                        <span class="popuptext" id="myPopup3"><ul>-Review of Vendor Documents<br>
                                            -Technical Bid Evaluation<br>
                                            -Vendor Finalization</ul></span>
                                    </div>
                                    <script>
                                        // When the user clicks on <div>, open the popup
                                        function myFunction3() {
                                          var popup = document.getElementById("myPopup3");
                                          popup.classList.toggle("show");
                                        }
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/construction support.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">Construction Support</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/as-built.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">As-Built	</a></h3><br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--Blog One Single-->
                        <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="blog_one_image">
                                <img src="assets/images/documentation.jpg" alt="">
                                <div class="blog_one_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog_one_title">
                                    <h3><a href="#">Documentation</a></h3><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Counter Three Start-->
        <!-- <section class="counter_two three" style="background-image: url(assets/images/resources/counter_two_bg.jpg)">
            <div class="container">
                <ul class="counter_two_box list-unstyled">
                    <li class="counter_two_single wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h2 class="counter">8705</h2>
                        <p>Project Completed</p>
                    </li>
                    <li class="counter_two_single wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h2 class="counter">480</h2>
                        <p>Team Members</p>
                    </li>
                    <li class="counter_two_single wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <h2 class="counter">6260</h2>
                        <p>Hours Worked</p>
                    </li>
                    <li class="counter_two_single wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <h2 class="counter">9774</h2>
                        <p>Happy People</p>
                    </li>
                </ul>
            </div>
        </section> -->

        
        
        <!--Thirty Years Experience Start-->
        <section class="thirty__years_experience"
            style="background-image: url(assets/images/more\ details.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="thirty__years_experience_inner">
                            <h2>For More Details:-</h2>
                            <a href="history.html" class="thm-btn thirty__years_experience_btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--client feedback-->
        <!-- <section class="testimonails_two"
            style="background-image: url(assets/images/testimonials/testimonails_2-bg.jpg)">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Our Clients feedback</h4>
                    <h2>What They’re Saying</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 0,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 0,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "1289": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                },
                "1440": {
                    "spaceBetween": 20,
                    "slidesPerView": 2
                }
            }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    
                                    <div class="testimonails_two_single">
                                        <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="testimonails_two_text">
                                            <p>I was very impresed by the company service lore ipsum is simply free text
                                                used by copy typing refreshing. Neque porro est qui </p>
                                        </div>
                                        <div class="testimonails_two_client_name">
                                            <h3>Mike Hardson</h3>
                                            <p>CO Founder</p>
                                        </div>
                                        <div class="testimonails_two_image">
                                            <img src="assets/images/testimonials/testimonails_1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                   
                                    <div class="testimonails_two_single">
                                        <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="testimonails_two_text">
                                            <p>I was very impresed by the company service lore ipsum is simply free text
                                                used by copy typing refreshing. Neque porro est qui </p>
                                        </div>
                                        <div class="testimonails_two_client_name">
                                            <h3>Jessica Brown</h3>
                                            <p>CO Founder</p>
                                        </div>
                                        <div class="testimonails_two_image">
                                            <img src="assets/images/testimonials/testimonails_1-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    
                                    <div class="testimonails_two_single">
                                        <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="testimonails_two_text">
                                            <p>I was very impresed by the company service lore ipsum is simply free text
                                                used by copy typing refreshing. Neque porro est qui </p>
                                        </div>
                                        <div class="testimonails_two_client_name">
                                            <h3>Mike Hardson</h3>
                                            <p>CO Founder</p>
                                        </div>
                                        <div class="testimonails_two_image">
                                            <img src="assets/images/testimonials/testimonails_1-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    
                                    <div class="testimonails_two_single">
                                        <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="testimonails_two_text">
                                            <p>I was very impresed by the company service lore ipsum is simply free text
                                                used by copy typing refreshing. Neque porro est qui </p>
                                        </div>
                                        <div class="testimonails_two_client_name">
                                            <h3>Jessica Brown</h3>
                                            <p>CO Founder</p>
                                        </div>
                                        <div class="testimonails_two_image">
                                            <img src="assets/images/testimonials/testimonails_1-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!--expert team-->
        <!-- <section class="team_one">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Team of Professionals</h4>
                    <h2>Expert Contractors</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        
                        <div class="team_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                            <div class="team_one_image">
                                <img src="assets/images/team/team-1-img-1.jpg" alt="">
                            </div>
                            <div class="team_one_content">
                                <div class="team_one_name_title">
                                    <h4>Mike Hardson</h4>
                                    <p>Contractor</p>
                                </div>
                                <div class="team_one_social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        
                        <div class="team_one_single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="team_one_image">
                                <img src="assets/images/team/team-1-img-2.jpg" alt="">
                            </div>
                            <div class="team_one_content">
                                <div class="team_one_name_title">
                                    <h4>Sarah Albert</h4>
                                    <p>Contractor</p>
                                </div>
                                <div class="team_one_social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        
                        <div class="team_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="team_one_image">
                                <img src="assets/images/team/team-1-img-3.jpg" alt="">
                            </div>
                            <div class="team_one_content">
                                <div class="team_one_name_title">
                                    <h4>Kevin Micahel</h4>
                                    <p>Contractor</p>
                                </div>
                                <div class="team_one_social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        
                        <div class="team_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="300ms">
                            <div class="team_one_image">
                                <img src="assets/images/team/team-1-img-4.jpg" alt="">
                            </div>
                            <div class="team_one_content">
                                <div class="team_one_name_title">
                                    <h4>Alessha Brown</h4>
                                    <p>Contractor</p>
                                </div>
                                <div class="team_one_social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

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
                                <a href="services.html" class="thm-btn">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        require 'common/footer.php';
        ?>
</body>

</html>