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
                    <!-- <li><span>Contact</span></li> -->
                </ul>
                <h2 style="color: #fcb80b;text-decoration: underline;">Contact</h2>
            </div>
        </section>

        <!--All Contact Info Start-->
        <section class="all_contact_info">
            <div class="container">
                <div class="all_contact_info_inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <!--All Contact Info Single-->
                            <div class="all_contact_info_single mail_info">
                                <div class="icon"><span class="flaticon-email"></span></div>
                                <div class="content">
                                    <a href="mailto:dadhaniakuldip@yahoo.com">dadhaniakuldip@yahoo.com</a> <br>
                                    <!-- <a href="mailto:info@company.com">info@company.com</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--All Contact Info Single-->
                            <div class="all_contact_info_single phone_info">
                                <div class="icon"><span class="flaticon-telephone"></span></div>
                                <div class="content">
                                    <a href="tel:+91-9725052678">+91-9725052678</a> <br>
                                    <!-- <a href="tel:+92-666-8888-000">+ 92 666 8888 000</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <!--All Contact Info Single-->
                            <div class="all_contact_info_single location_info">
                                <div class="icon"><span class="flaticon-pin"></span></div>
                                <div class="content">
                                    <p>FF-37, FIRST FLOOR, KANHA CITY, <br> AJWA ROAD, VADODARA – 390 019 <br> GUJARAT, INDIA.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="contact_one_left">
                            <div class="block-title text-left">
                                <h4>Contact With Us</h4>
                                <h2>Love to Hear from Our Customers</h2>
                            </div>
                            <div class="contact_one_left-text">
                                <!-- <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit sed do eiusm od tempor ut
                                    labore. sit amet scelerisque eros. Phasellus hendrerit neque a augue.</p> -->
                            </div>
                            <div class="contact_one_left__social">
                                <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-one__form__wrap">
                            <form action="inc/sendemail.php" method="post" class="contact-one__form contact-form-validated">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" name="name" placeholder="Your name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="email" name="email" placeholder="Email address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="tel" name="number" placeholder="Phone" required maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <textarea name="message" placeholder="Write Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-group contact__btn">
                                            <button type="submit" name="send" class="thm-btn contact-one__btn">Send a
                                                message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Google Map-->
        <section class="google_map two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14764.157130177819!2d73.23307882356916!3d22.314354065969656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcfead1a5a59d%3A0x38467e48c639276c!2sKanha%20City!5e0!3m2!1sen!2sin!4v1625727671780!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <?php 
        require 'common/footer.php';
        ?>
</body>

</html>