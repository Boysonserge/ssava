<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Garden - Checkout</title>
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
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<?php include "inc/header.php"; ?>
<!--header-area end-->

<!--page-banner start-->
<div class="page-banner-area bg-5">
    <div class="container">
        <div class="row align-items-center height-200">
            <div class="col-sm-12">
                <div class="page-banner-text text-white text-center">
                    <h2>Checkout: </h2>
                    <ul class="site-breadcrumb text-muted">
                        <li>Groundnuts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--page-banner end-->

<!--checkout-area start-->
<div class="checkout-area mt-95 sm-mt-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>New here? <a href="checkout.php">Click here</a> to sign up</p>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-lg-8">
                <div class="billing-form">
                    <h4>Your login info</h4>
                    <form action="" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-lg-3">
                                <label>EMAIL ADDRESS OR PHONE *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="email" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>ACCOUNT PASSWORD *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="password" />
                            </div>
                        </div>
                        <div class="place-order text-center btn-block">
                            <button type="submit" name="login" class="btn-common width-180">L O G I N</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="order-details mt-30 sm-mt-50">
                    <h4>Your Order</h4>
                    <div class="order-details-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>GROUNDNUTS</td>
                                <td><strong>$200.00</strong></td>
                            </tr>

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--checkout-area end-->


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
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

</html>
<?php
if (isset($_POST['login'])){
    include "inc/db.php";
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=mysqli_real_escape_string($conn,$_POST['password']);

    $q="SELECT * FROM users WHERE password='$pass' AND email='$email'";

    if (mysqli_num_rows(mysqli_query($conn,$q))==1){
        echo "<script>alert('Don')</script>>";
    }else{
        echo "<script>alert('Invalid logins')</script>>";
    }
}
?>