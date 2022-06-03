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
                <h2 style="color: #fcb80b;text-decoration: underline;">TRAINING</h2>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog_details_left">
                            <div class="blog_details_left_image">
                                <img src="assets/images/Training.jpg" alt="">
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
                                    <h3><a href="#">TRAINING</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Guten Technology Services founded the Engineering Training Institute in 2004. 
                                        This training centre has conducted certified courses for over 500 fresh graduates and industry personnel. 
                                        This has improved employment potential for the candidates attending these distinct courses. 
                                        The placement cell at the institute has been responsible for deputation of over 80% of students who have attended these certified courses. 
                                        Our faculty with vast experience in their area of specialization have designed these courses keeping in mind the present-day 
                                        requirements of the corporate world. All our courses can be tailored to suit the candidate's specific academic and career ambitions.
                                        <br>
                                    </p>
                                    
                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h3><a href="#">Training Courses offered:</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">-Piping Engineering<br>
                                        -Stress Analysis Course<br>
                                        -3D Modeling (using PDS)<br>
                                    </p>
                                    <p>
                                        The Engineering Training Institute is committed to meet the needs of both employers and aspirants in the field of engineering. 
                                        We continuously strive to maintain high standards of training and mentoring.
                                    </p>
                                        

                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h4><a href="#">Contact for Further Information.</a></h4>
                                </div>
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