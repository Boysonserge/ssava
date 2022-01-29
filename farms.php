<?php include "inc/db.php"; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SSAVA FARMS - Farms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.html">
    <link rel="icon" href="images/favicon.ico">
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
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<?php include "inc/header.php"; ?>
<!--header-area end-->

<!--page-banner-area start-->
<div class="page-banner-area bg-6 overlay">
    <div class="container">
        <div class="row align-items-center height-400">
            <div class="col-lg-12">
                <div class="page-banner-text text-white text-center">
                    <h2>Farms</h2>
                    <ul class="site-breadcrumb">
                        <li><a href="index.php">Home</a> <span>></span></li>
                        <li>farms</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--page-banner-area end-->

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
                            <a class="card-data-btn" href="checkout-invest.php?invest=<?php echo $row['commodity_id'] ?>">Sponsor Fam</a>
                            <a class="card-data-btn-alt" href="details.php?d=<?php echo $row['commodity_id']?>">Read more</a>
                        </div>


                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>


<div class="mt-20"></div>


<!--footer-area start-->
<?php include "inc/footer.php"; ?>
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
<!--contact-form-js-->
<script src="assets/js/validator.min.js"></script>
<script src="assets/js/form-scripts.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

<!--google-map-->

</body>

</html>
