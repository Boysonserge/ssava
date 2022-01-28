<?php
include 'inc/db.php';

if (isset($_GET['d'])){
    $id=$_GET['d'];
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
	<title>Ssava farms</title>
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

    <link rel="icon" href="assets/images/logo.png">
    <link rel="icon" href="images/favicon.ico">

    <style>
        .headText{
            text-align: center;
        }
        .headText h2{
            color: #1c7430;
            font-family: "Gotham Thin",sans-serif;
        }
        .downloadButton a{
            padding: 10px;
            border-radius: 3px;
            background-color: #71dd8a;
            color: white;
            margin-left: 100px;
            font-size: larger;

        }
        .borderedContent{
            padding:70px;
            border-bottom:1px solid #eaeaea;
            border-top:1px solid #eaeaea;

        }
        .insideDiv{
            text-align: center;
            background-color: whitesmoke;
            padding: 20px;
            border: 1px solid #e7e7e7

        }
        .insideDiv h3, .insideDiv-center h3{
            color:#1c7430 ;
            font-family: "Gotham Thin",sans-serif;
        }

        .insideDiv-center{
            text-align: center;
            background-color: whitesmoke;
            padding: 20px;
            border: 1px solid #e7e7e7
        }

    </style>
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  	<!--header-area start-->
    <?php include 'inc/header.php'; ?>
  	<!--header-area end-->
	
	<!--page-banner-area start-->
	<div class="page-banner-area bg-5">
		<div class="container">
			<div class="row align-items-center height-400">
				<div class="col-lg-12">
					<div class="page-banner-text text-center text-white">
						<h2 style="font-family: 'Raleway', sans-serif">More health benefits. More alternative investment options. <?php echo $show['cName'];?> farming.
                        </h2>
						<ul class="site-breadcrumb">
							<li><a href="#">Join us to grow your income today.</a> <span>.</span></li>
							<li>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--page-banner-area end-->
	
	<!--service-details start-->
	<div class="service-details-area mt-100 sm-mt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12" style="padding-left: 80px;padding-right: 80px">

					<h3 style="font-family: 'Gotham XLight'; text-align: center">Invest in  <?php echo $show['cName'];?> on large-scale  farm</h3>
                    <h4>About This Farm Sponsorship</h4>
                    <p>
                        <?php echo $show['details'];?>

                    </p>
                    <div class="col-md-12">
                        <img src="images/<?php echo $show['main_pic'];?>" alt="">
                    </div>

                    </p>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="headText">
                        <h2><?php echo number_format($show['cost']);?>RWF</h2>
                        <p>Per tree</p>
                    </div>
                    <div class="downloadButton">
                        <a href="checkout-invest.php?invest=<?php echo $show['commodity_id'] ?>" class="btn-download">INVEST IN THIS COMMODITY</a>
                    </div>
                    <div class="mt-20"></div>
                    <div class="downloadButton">
                        <a href="checkout-order.php?order=<?php echo $show['commodity_id'] ?>" class="btn-download">Order this comodity</a>
                    </div>
				</div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="borderedContent">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="insideDiv">
                                    <h3><?php echo $show['range'];?></h3>
                                    <p>average profit over the investment term</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="insideDiv-center">
                                    <h3><?php echo $show['investment_term'];?> Years</h3>
                                    <p>investment term</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="insideDiv">
                                    <h3><?php echo number_format($show['cost']);?> RWF</h3>
                                    <p>Minimum investment</p>
                                </div>
                            </div>

                        </div>

                </div>

			</div>


		</div>
	</div>
	<!--service-details end-->
	


	<?php
    include_once 'inc/footer.php';
    ?>
  
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
