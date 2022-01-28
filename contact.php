<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SSAVA FARMS - Contact Us</title>
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
<div class="page-banner-area bg-7 overlay">
    <div class="container">
        <div class="row align-items-center height-400">
            <div class="col-lg-12">
                <div class="page-banner-text text-white text-center">
                    <h2>Contact Us</h2>
                    <ul class="site-breadcrumb">
                        <li><a href="index.php">Home</a> <span>></span></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--page-banner-area end-->

<!--contact-area start-->
<div class="contact-area mt-100 sm-mt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="contact-info">
                    <h3>Keep In Touch</h3>
                    <div class="single-contact-info">
                        <h4><i class="fa fa-map-marker"></i>Address</h4>
                        <p>Kigali Rwanda </p>
                    </div>
                    <div class="single-contact-info">
                        <h4><i class="fa fa-phone"></i>Phone</h4>
                        <p ><a style="color: black" href="tel:+250788531643">+250 788 531 643</a></p>
                    </div>
                    <div class="single-contact-info">
                        <h4><i class="fa fa-envelope"></i>Emai</h4>
                        <p>ssavafarms@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 sm-mt-75">
                <div class="contact-form style-3">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name" name="name"  />
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email" name="email" />
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder="Subject" name="subject" />
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message" name="message"></textarea>
                            </div>
                            <div class="col-lg-4">
                                <button name="send" type="submit" class="btn-common">Send message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact-area end-->


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

<?php
include "inc/db.php";
if (isset($_POST['user'])){
    $names=mysqli_real_escape_string($conn,$_POST['names']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    $q="INSERT INTO `contact` (`contact_id`, `names`, `email`, `subject`, `message`) VALUES (NULL, '$names', '$email', '$subject', '$message')";
    if (mysqli_query($conn,$q)){
        echo "<script>alert('MEssage sent , Thanks!')</script>";
    }


}
?>