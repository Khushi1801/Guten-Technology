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
                <h2 style="color: #fcb80b;text-decoration: underline;">PROPOSAL ENGINEERING</h2>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog_details_left">
                            <div class="blog_details_left_image">
                                <img src="assets/images/proposal eng.jpg" alt="">
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
                                    <h3><a href="#">PROPOSAL ENGINEERING</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Our services include preliminary engineering design and drawing preparations for the 
                                        generation of Material Take off (MTO) for precise estimation of various costs. The comprehensive proposal 
                                        engineering service will complement and enhance our client's tendering services and proposal management 
                                        capabilities to meet the needs of their business in a timely and cost-effective manner.
                                        <br>

                                        Given the costs, resources and time involved in the construction and operation of systems, 
                                        at Guten Technology Services, proposal engineering is accomplished with great discipline and efficiency to provide 
                                        a fully compliant proposal. Backed by fifteen years of rich engineering pedigree, Guten Technology Services possesses a 
                                        team of experienced professionals having domain expertise and technical skill in diverse industry verticals. 
                                        We offer proposal engineering assistance for various industries such as Chemical & Petrochemicals, 
                                        Oil & Gas and Power & Fertilizers.</p>
                                    
                                </div>
                                <br>
                                <div class="blog_details_title">
                                    <h3><a href="#">Our engineers work closely with clients to carry-out activities like:</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">-Preparing equipment layout<br>
                                        -Process and Instrumentation Diagram (P&ID)<br>
                                        -Extracting of Bill of Material<br>
                                        -Cost of procurement, erection and commissioning</p>
                                        

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