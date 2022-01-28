<?php
include 'inc/db.php';

if (isset($_GET['invest'])){
    $id=$_GET['invest'];
}elseif (isset($_GET['order'])){
    $id=$_GET['order'];
}else{
    echo "<script>window.location.replace('index.php')</script>>";
}
$q=mysqli_query($conn,"SELECT * FROM commodity WHERE commodity_id='$id'");
$show=mysqli_fetch_array($q);


?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ssava farms - Checkout</title>
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
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!--header-area start-->
<?php include "inc/header.php"; ?>
<!--header-area end-->

<!--page-banner start-->
<div class="page-banner-area bg-5 overlay">
    <div class="container">
        <div class="row align-items-center height-200">
            <div class="col-sm-12">
                <div class="page-banner-text text-white text-center">
                    <h2>Commodity investment: </h2>
                    <ul class="site-breadcrumb text-muted">
                        <li><?php echo $show['cName']?></li>
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

        <div class="row mt-10">
            <div class="col-lg-8">
                <div class="billing-form">
                    <h4>Your Info</h4>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <label>NAMES</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="names" required />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-3">
                                <label>EMAIL ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="email"  required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>PHONE *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="phone" placeholder="Start with 078xxxxxx" required/>
                            </div>
                        </div>


                        <div class="place-order text-center btn-block">
                            <button type="submit" name="send" class="btn-common width-180">Confirm investment</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="order-details mt-30 sm-mt-50">
                    <h4>Commodity info</h4>
                    <div class="order-details-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th><?php echo $show['cName'] ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Cost</td>
                                <td><strong><?php echo number_format($show['cost']) ?> RWF</strong></td>
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
if (isset($_POST['send'])){
    include "inc/db.php";
    $names=mysqli_real_escape_string($conn,$_POST['names']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);

    $cId=$show['commodity_id'];
    $test=mysqli_query($conn,"SELECT * FROM invests WHERE email='$email' OR phone='$phone'");
    $dd="SELECT * FROM invests WHERE email=$email OR phone=$phone";
    if (mysqli_num_rows($test)>0){
        echo "<script>alert('Email or phone already exists!')</script>>";
    }else{
        $num=mysqli_num_rows($test);
        $q="INSERT INTO `invests` (`invest_id`, `names`, `phone`, `email`, `commodity_id`) VALUES (NULL, '$names', '$phone', '$email', '$cId')";

        if (mysqli_query($conn,$q)){
            $msg="Thank for sponsoring this, we will reach you soon with more info";
            $phone="+25".$phone;
            include_once 'inc/sms.php';
            echo "<script>alert('Success! Thank you $phone')</script>";
        }
    }


}
?>