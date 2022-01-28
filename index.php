<?php include "inc/db.php";?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ssava farms Rwanda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="apple-touch-icon" href="icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- bootstrap v4.0.0 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome-icons css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- themify-icons css -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- elegant css -->
    <link rel="stylesheet" href="assets/css/elegant.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="assets/css/venobox.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- slick css -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- slick-theme css -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- helper css -->
    <link rel="stylesheet" href="assets/css/helper.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="icon" href="images/favicon.ico">
    <style>

    </style>
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<?php include "inc/header.php"; ?>
<!--header-area end-->

<!--banner-area start-->
<div class="banner-area bg-5 overlay">
    <div class="container">
        <div class="row align-items-center height-800">
            <div class="col-sm-12">
                <div class="banner-text style-2 text-white text-center mt-minus-10">
                    <h3 class="text-white">Invest  -  Plant  -  Earn</h3>
                    <h2>Grow your wealth with passive investments in farming
                    </h2>
                    <h4>Sign up with us to view current offerings.

                    </h4>
                    <a href="#commo" class="btn-common mt-45">Get started now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner-area end-->

<!--products-banner start-->

<!--products-end start-->

<!--products-area start-->
<div class="products-area" id="commo">
    <div class="section-title text-center mt-20">
        <h2>AVAILABLE COMMODITIES?</h2>
    </div>
    <div class="container-fluid">
        <div class="cards-container wrap-b">
            <?php
            $q=mysqli_query($conn,"SELECT * FROM commodity ORDER BY commodity_id DESC");
            while ($row=mysqli_fetch_array($q)){
                ?>
                <div class="card-item">
                    <div class="card-image">
                        <img src="images/<?php echo $row['main_pic']?>">
                    </div>
                    <div class="card-data">
                        <p class="card-data-heading"><?php echo $row['cName']?></p>
                        <div class="card-data-caption wrap-b">

                            <span><i class="fas fa-tags"></i>Cost Per Unit</span>
                            <span class="left"><?php echo number_format($row['cost'])?> RWF</span>
                        </div>

                        <div class="card-data-caption wrap-b">
                                <span><i class="far fa-bookmark"></i>Investment term</span>
                                <span class="left"><?php echo $row['investment_term']?></span>
                        </div>
                        <div class="card-data-caption wrap-b">
                            <span><i class="fas fa-exchange-alt"></i>Average profit</span>
                            <span class="left"><?php echo $row['range']?></span>
                        </div>
                        <div class="card-data-btns wrap-b">
                            <a class="card-data-btn" href="checkout.php">Sponsor Fam</a>
                            <a class="card-data-btn-alt" href="details.php?d=<?php echo $row['commodity_id']?>">Read more</a>
                        </div>


                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!--products-area end-->

<!--about-area start-->
<div class="about-area mt-85 sm-mt-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-sm-12">
                <div class="section-title text-center">
                    <h2>HOW IT WORKS?</h2>
                </div>
            </div>
        </div>
        <div class="row mt-40 sm-mt-40">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="sin-service style-2">
                    <i class="ti-truck"></i>
                    <h3>You pay</h3>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-lg-4 d-lg-block col-md-6 d-md-none col-sm-12">
                <div class="sin-service style-2">
                    <i class="ti-cup"></i>
                    <h3>We farm</h3>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="sin-service style-2">
                    <i class="ti-clipboard"></i>
                    <h3>You earn</h3>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-85"></div>
<div class="clearfix"></div>
<!--about-area end-->

<!--cta-area start-->
<div class="cta-area mt-100 sm-mt-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="cta-text">
                    <h3>Help line number <span>(+250 788 531 643</span></h3>
                    <p>Available for calls and whatsapp.</p>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#" class="btn-common cta-btn width-190 pull-right">Contact Now</a>
            </div>
        </div>
    </div>
</div>
<!--cta-area end-->

<!--testimonial-area start-->
<div class="testimonial-area bg-1 mt-62 sm-mt-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="section-title text-center">
                    <h2>What Client Say</h2>
                </div>
            </div>
        </div>
        <div class="row mt-35">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="testimonial-items carousel-one arrow-none">
                    <div class="single-testimonial">
                        <p>I wanted to mention that these days, when the opposite of good customer and tech support <br/> tends to be the norm, it’s always great having a team like you guys at The Garden! So, be sure <br/> that I’ll always spread the word about how good your product is and the extraordinary level of <br/> support that you provide any time there is any need for it.</p>
                        <h4>Nancy Franklin</h4>
                        <small>UI/UX  Designer</small>
                    </div>
                    <div class="single-testimonial">
                        <p>I wanted to mention that these days, when the opposite of good customer and tech support <br/> tends to be the norm, it’s always great having a team like you guys at The Garden! So, be sure <br/> that I’ll always spread the word about how good your product is and the extraordinary level of <br/> support that you provide any time there is any need for it.</p>
                        <h4>Nancy Franklin</h4>
                        <small>UI/UX  Designer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--testimonial-area end-->

<div class="mt-85"></div>

<!--footer-area start-->
<?php include_once 'inc/footer.php' ?>
<!--footer-area end-->

<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-1.12.0 version -->
<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstra.min js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- meanmenu js -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- easing js -->
<script src="assets/js/jquery.easing.min.js"></script>
<!---venobox-js-->
<script src="assets/js/venobox.min.js"></script>
<!---slick-js-->
<script src="assets/js/slick.min.js"></script>
<!---waypoints-js-->
<script src="assets/js/waypoints.js"></script>
<!---counterup-js-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!---isotop-js-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- jquery-ui js -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- jquery.countdown js -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

<script src="https://kit.fontawesome.com/28f7157779.js" crossorigin="anonymous"></script>

</body>

</html>
