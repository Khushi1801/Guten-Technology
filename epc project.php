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

         <!--Page Header Start-->
        <section class="page-header" style="background-image: url(assets/images/what\ we\ offer.jpg);">
            <div class="container">
               <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php" style="color: #fcb80b;text-decoration: underline;">Home</a></li>
                    <!-- <li><span>What we Offer</span></li> -->
                </ul>
                <h2 style="color: #fcb80b;text-decoration: underline;">EPC Projects</h2>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog_details_left">
                            <div class="blog_details_left_image">
                                <img src="assets/images/epc project.jpg" alt="">
                                <div class="blog_details_date_box">
                                    <!-- <p>20 <br> Oct</p> -->
                                </div>
                            </div>
                            <div class="blog_details_content">
                                <!-- <ul class="list-unstyled blog-details__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul> -->
                                <div class="blog_details_title">
                                    <h3><a href="#">EPC Projects</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Over the years, Guten Technology Services has evolved from an engineering design consultancy 
                                        firm to an integrated procurement and commissioning establishment. Guten Technology Services has accomplished complex engineering, 
                                        procurement and construction (EPC) projects for clients in challenging locations across the globe. Offering a full spectrum of 
                                        EPC services, the organization is one of the most diversified contractors in the industry.<br>

                                        Our EPC services range from concept to commissioning and turnover. We advise clients in the sourcing of materials, systems engineering and integration of all packages within appropriate platforms..</p>
                                    
                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h3><a href="#">Engineering</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Essentially, Guten Technology Services executes all projects with paramount consideration for 
                                        quality and safety. The organization’s engineering expertise ranges from civil, electrical, mechanical, piping, and 
                                        instrumentation engineering; to advanced interactive 3D modeling.

                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h3><a href="#">Procurement</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Over the years, Guten Technology Services has evolved from an engineering design consultancy 
                                        firm to an integrated procurement and commissioning establishment. Guten Technology Services has accomplished complex engineering, 
                                        procurement and construction (EPC) projects for clients in challenging locations across the globe. Offering a full spectrum of 
                                        EPC services, the organization is one of the most diversified contractors in the industry.
                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h3><a href="#">Construction</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Procurement is one of the key areas that can make or break a client’s budget, time-line and construction quality. 
                                        Guten Technology Services leverages its domestic as well as international procurement expertise and supplier network to 
                                        provide the best value for clients' capital investments.
                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h4><a href="#">Contact for Further Information.</a></h4>
                                </div>
                            </div>
                            <!-- <div class="blog_detail__bottom">
                                <p class="blog_detail__tags">
                                    <span>Tags:</span>
                                    <a href="#">construction</a>
                                    <a href="#">Repair</a>
                                </p>
                                <div class="blog_detail__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div> -->
                            <!-- <div class="author-one">
                                <div class="author-one__image">
                                    <img src="assets/images/blog/author-1-1.jpg" alt="">
                                </div>
                                <div class="author-one__content">
                                    <h3>Mike Hardson</h3>
                                    <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed veritatis et quasi architecto.</p>
                                </div>
                            </div> -->
                            <!-- <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin<i class="far fa-clock"></i><span>22 Oct, 2020</span></h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert<i class="far fa-clock"></i><span>22 Oct, 2020</span></h3>
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text.</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="inc/sendemail.php" class="comment-one__form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="email" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment_input_box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <button type="submit" class="thm-btn comment-form__btn">Submit comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="blog_details_sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="#">Construction<i><sup>(3)</sup></i></a></li>
                                    <li><a href="#">Mechanical Research<i><sup>(8)</sup></i></a></li>
                                    <li><a href="#">Home Repairing<i><sup>(20)</sup></i></a></li>
                                    <li><a href="#">Industrial Business<i><sup>(0)</sup></i></a></li>
                                    <li><a href="#">Factory<i><sup>(36)</sup></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Recent Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta">16 Oct, 2020</a>
                                                <a href="news_detail.html" class="sibebar_post_content_title">We are Building New Quality Machinery</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta">16 Oct, 2020</a>
                                                <a href="news_detail.html" class="sibebar_post_content_title">We are Building New Quality Machinery</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta">16 Oct, 2020</a>
                                                <a href="news_detail.html" class="sibebar_post_content_title">We are Building New Quality Machinery</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Popular Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Construction</a>
                                    <a href="#">Industry</a>
                                    <a href="#">Factory</a>
                                    <a href="#">Repair</a>
                                    <a href="#">Tools</a>
                                    <a href="#">Renovations</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

         <?php 
         require'common/footer.php';
         ?>

</body>

</html>