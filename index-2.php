<?php include "inc/db.php";?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Garden - Home Two</title>
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
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: arial;
        }
        body{
            background: #ecf1f1;
        }

        .wrap-a{
            height: auto;
            display: flex;
            flex-direction: row;
            flex-flow: wrap;
            justify-content: space-around;
        }
        .wrap-b{
            height: auto;
            display: flex;
            flex-direction: row;
            flex-flow: wrap;
            justify-content: space-between;
        }

        .cards-container{
            padding: 50px 20px;
        }
        .cards-container .card-item{
            width: 30%;
            box-sizing: border-box;
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, .15);
            border-radius: 10px;
            margin-bottom: 50px;
        }
        .cards-container .card-item .card-image{
            width: 100%;
            height: 300px;
            box-sizing: border-box;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }
        .cards-container .card-item .card-image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .cards-container .card-item .card-data{
            padding: 30px 20px;
            padding-top: 0;
            background: #fff;
            border-radius: 0 0 10px 10px;
        }
        .cards-container .card-item .card-data .card-data-heading{
            color: #288b43;
            padding: 15px 0;
            font-size: 20px;
            border-bottom: 1px solid #c4d3c8;
            margin-bottom: 20px;
        }
        .cards-container .card-item .card-data .card-data-caption{
            color: #939c96;
            margin-bottom: 10px;
        }
        .cards-container .card-item .card-data .card-data-caption-alt{
            color: #57655b;
            margin-bottom: 10px;
            font-size: 25px;
        }
        .cards-container .card-item .card-data .card-data-btns{
            margin-top: 30px;
        }
        .cards-container .card-item .card-data .card-data-btns .card-data-btn{
            background: #288b43;
            border: 1px solid #288b43;
            color: #fff;
            padding: 10px 30px;
            border-radius: 50px;
            cursor: pointer;
            transition: .3s;
        }
        .cards-container .card-item .card-data .card-data-btns .card-data-btn:hover{
            background: #fff;
            color: #288b43;
        }
        .cards-container .card-item .card-data .card-data-btns .card-data-btn-alt{
            background: #fff;
            border: 1px solid #288b43;
            color: #288b43;
            padding: 10px 30px;
            border-radius: 50px;
            cursor: pointer;
            transition: .3s;
        }
        .cards-container .card-item .card-data .card-data-btns .card-data-btn-alt:hover{
            background: #288b43;
            color: #fff;
        }
        @media(max-width: 1000px){
            .cards-container .card-item{
                width: 47%;
            }
        }
        @media(max-width: 650px){
            .cards-container .card-item{
                width: 100%;
            }
        }
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
<div class="banner-area bg-2">
    <div class="container">
        <div class="row align-items-center height-800">
            <div class="col-sm-12">
                <div class="banner-text style-2 text-black text-center mt-minus-10">
                    <h3>Flower  -  Plant  -  Decoration</h3>
                    <h2>Store Ornamental Green</h2>
                    <h4>Best indoor plants for your home - Since 1997</h4>
                    <a href="#" class="btn-common mt-45">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner-area end-->

<!--products-banner start-->

<!--products-end start-->

<!--products-area start-->
<div class="products-area mt-83 sm-mt-30">
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
                            <span>Cost Per Unit</span><span><b><?php echo number_format($row['cost'])?></b></span>
                        </div>
                        <div class="card-data-caption wrap-b">
                                <span>FARMING START DATE
                                </span><span><b><?php echo $row['start_date']?></b></span>
                        </div>
                        <!--                            <div class="card-data-caption-alt wrap-b">-->
                        <!--                                <span>Cost Per Unit</span><span>ROS</span>-->
                        <!--                            </div>-->
                        <div class="card-data-caption wrap-b">
                                <span>FARMING END DATE
                                </span><span><b><?php echo $row['end_date']?></b></span>
                        </div>
                        <div class="card-data-caption wrap-b">
                            <span>ROS</span><span><b><?php echo $row['range']?></b></span>
                        </div>
                        <div class="card-data-btns wrap-b">
                            <a class="card-data-btn" href="login.php">Sponsor Fam</a>
                            <a class="card-data-btn-alt" href="checkout.php">Read</a>
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

</body>

</html>
