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
                    <li><a href="index.php" style="color: #fcb80b;text-decoration: underline;">Home</a></li>
                    <!-- <li><span>What we Offer</span></li> -->
                </ul>
                <h2 style="color: #fcb80b;text-decoration: underline;">Design & Detailed Engineering</h2>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog_details_left">
                            <div class="blog_details_left_image">
                                <img src="assets/images/design and detailed eng.jpg" alt="">
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
                                    <h3><a href="#">Design and Detailed Engineering</a></h3>
                                </div>
                                <div class="blog_details_text">
                                    <p class="text-1">Detailed Engineering is the essential link that bridges basic design engineering and the construction phase of a project. 
                                        With our expertise in advanced design engineering tools and practices, we extend our capabilities to expedite planning, design and digital
                                        validation of manufacturing systems before their construction.<br>

                                        As a part of our integral engineering design services, engineers develop meticulous documentation 
                                        such as plot plans, piping and instrumentation diagrams (P&ID), process flow diagrams (PFD), 2D/3D models, isometrics, material take off (MTO), 
                                        bill of materials (BOM) and datasheets required to move from initial planning stage to procurement and construction. Our team has the ability to 
                                        envision various cost-effective engineering design concepts without compromising on quality.<br>
                                        
                                        Having worked for both large and medium sized domestic and offshore clients, our team has gained broad-ranging experience in 
                                        detailed engineering design whether it's a single phase of designing or multi-disciplined detail engineering. 
                                        We cover the complete spectrum of detail engineering design which includes process, mechanical, piping, electrical, 
                                        instrumentation and civil engineering disciplines.</p>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4">
                                    <!--Blog One Single-->
                                    <div class="blog_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                                        <div class="blog_one_image">
                                            <img src="assets/images/process-engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Process <br> Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction()">Click Here!
                                                    <span class="popuptext" id="myPopup"><ul>-Process Flow Diagram based on Material Balance & Energy Balance<br>
                                                        -Upgradation and finalization of P & I Diagrams & Line List<br>
                                                        -Pipe Size & Pressure Drop Calculations<br>
                                                        -Basic Equipment Layout<br>
                                                        -Instrument process data sheet<br>
                                                        -Process Data sheets for Static & Rotary Equipment<br>
                                                        -Thermal Design & Rating of Heat Exchanger<br>
                                                        -Process Equipment Simulations</ul></span>
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
                                            <img src="assets/images/mechanical Engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Mechanical Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction2()">Click Here!
                                                    <span class="popuptext" id="myPopup2"><ul>-Preparation of mechanical data sheet for all static
                                                         equipment such as vessels, tanks, heat exchangers, distillation columns etc.<br>
                                                        -Mechanical Design for Static Equipment as per ASME, BS, IS, TEMA Codes using PVElite Software.<br>
                                                        -Mechanical Design for Storage Tanks as per API, BS, IS Codes.<br>
                                                        -Preparation of GA & fabrication drawings.</ul></span>
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
                                            <img src="assets/images/pipeline-engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Piping <br> Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction3()">Click Here!
                                                    <span class="popuptext" id="myPopup3"><ul>-Development of Equipment Layout<br>
                                                        -Piping layouts<br>
                                                        -Isometric drawings for pipes<br>
                                                        --MTO for Piping<br>
                                                        -Civil Scope Drawings for Civil and Structural Engineering Design<br>
                                                        -Piping supports layout with details and BOM<br>
                                                        -Stress Analysis of Piping using CAESAR II software<br>
                                                        -Preparation of specification & schedule of Erection for piping and Equipment<br>
                                                        -Insulation and Painting Schedule<br>
                                                        -As Built Drawings</ul></span>
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
                                            <img src="assets/images/electrical engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Electrical Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction4()">Click Here!
                                                    <span class="popuptext" id="myPopup4"><ul>-Equipment sizing and specifications (MCC, Motor, HT/LT System etc.)<br>
                                                        -Preparation of Single line diagram<br>
                                                        -Cable & Cable Tray size calculation<br>
                                                        -Earthing / Lighting / Cable Tray layout for process & utility buildings<br>
                                                        -Bill of Quantities for cables, Earthing and electrical installations</ul></span>
                                                </div>
                                                <script>
                                                    // When the user clicks on <div>, open the popup
                                                    function myFunction4() {
                                                      var popup = document.getElementById("myPopup4");
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
                                            <img src="assets/images/instrumentation engineering.png" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Instrumentation Engineering	</a></h3><br>
                                                <div class="popup" onclick="myFunction5()">Click Here!
                                                    <span class="popuptext" id="myPopup5"><ul>-Instrument Index<br>
                                                        -Instrument data sheet for all field instruments<br>
                                                        -Develop logic diagrams and hook-up drawings<br>
                                                        -Instrument cable and tubing schedule<br>
                                                        -Instrument Layout and installation drawing<br>
                                                        -Material take-off for instruments<br>
                                                        -Engineering of PLC & DCS for Plant Automation</ul></span>
                                                </div>
                                                <script>
                                                    // When the user clicks on <div>, open the popup
                                                    function myFunction5() {
                                                      var popup = document.getElementById("myPopup5");
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
                                            <img src="assets/images/civil engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Civil <br> Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction6()">Click Here!
                                                    <span class="popuptext" id="myPopup6"><ul>-Preparation of foundation layout and load data 
                                                        drawings for civil design purpose<br>
                                                        -Civil Design & drawings for Process & Utility buildings, Roads, Drains, 
                                                        Pipe / Cable Racks, Shed, Platforms, 
                                                        Equipment Supporting Structure, Truss Design of Roof for Storage Tanks etc. using STAAD Pro software.<br>
                                                        -Material take off for Civil and Structural works<br>
                                                        -Preparation of civil tender, floating of inquiries to vendors and 
                                                        bid analysis for order placement</ul></span>
                                                </div>
                                                <script>
                                                    // When the user clicks on <div>, open the popup
                                                    function myFunction6() {
                                                      var popup = document.getElementById("myPopup6");
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
                                            <img src="assets/images/procurement engineering.jpg" alt="">
                                            <div class="blog_one_date_box">
                                                <!-- <p>20 <br> Oct</p> -->
                                            </div>
                                        </div>
                                        <div class="blog-one__content">
                                            <div class="blog_one_title">
                                                <h3><a href="#">Procurement Engineering</a></h3><br>
                                                <div class="popup" onclick="myFunction7()">Click Here!
                                                    <span class="popuptext" id="myPopup7"><ul>-Preparation of Technical Specification for Static 
                                                        & Rotary equipment, Piping Material, Electrical & Instrument Items.<br>
                                                        -Recommendation of qualified vendor<br>
                                                        -Technical BID Evaluation<br>
                                                        -Technical Recommendation for Order placement<br>
                                                        -Procurement Expediting<br>
                                                        -Vendor Drawings Approval<br>
                                                        </ul></span>
                                                </div>
                                                <script>
                                                    // When the user clicks on <div>, open the popup
                                                    function myFunction7() {
                                                      var popup = document.getElementById("myPopup7");
                                                      popup.classList.toggle("show");
                                                    }
                                                    </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="blog_details_title">
                                <h3><a href="#">As-Built Drawings and 3D Modeling</a></h3>
                            </div>
                            <div class="blog_details_text">
                                <p class="text-1">Using highly advanced software like PDS and Autoplant, 3D Modeling of Equipment, Piping, Civil Structure and 
                                    Electrical Raceway will be prepared for error-free documents, verification of clashes in the model and smooth execution of erection / procurement activities. 
                                    3D Model once prepared can be used to extract various essential documents like Bill of Material, Isometrics, General Arrangement Drawings, Clash Reports etc.<br>

                                    We can also update 3D Model based on As-Built plant conditions. While, As-built drawings will not only track changes, 
                                    additions or deletions from the original design during construction but will also serve as a reference for future maintenance, 
                                    expansion or planning of similar project at different location.
                                </p>
                                
                            </div>
                            <br>
                            <div class="blog_details_title">
                                <h3><a href="#">Drafting and Digitization</a></h3>
                            </div>
                            <div class="blog_details_text">
                                <p class="text-1">At Guten Technology Services, we produce a wide range of drafting services for our clients. 
                                    Using software like AutoCAD and MicroStation, we can convert all paper drawings into accurate multi-layered AutoCAD drawings.<br>

                                    These services are rendered by a drafting team working in coordination with our engineers to create all types of As-Built drawings, 
                                    mechanical, piping, electrical, civil and process engineering drawings with complete details.
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
        </section>

         <?php 
         require'common/footer.php';
         ?>
</body>

</html>