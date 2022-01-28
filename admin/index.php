<?php 
include 'includes/session.php';
include '../inc/db.php';

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SSAVA FARMS |ADMIN</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Serge" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="icon" href="../images/favicon.ico">
        <!-- morris css -->
        <link rel="stylesheet" href="plugins/morris/morris.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>


    <body>



       <?php include 'includes/header.php'; ?>
        <!-- header-bg -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">HoME</h4>

                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                                    <h4 class="mb-3 mt-0 float-right">1,587</h4>
                                </div>


                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                                </div>
                                <p class="font-14 m-0"><a href="" style="color:#ffffff;">View all</a></p>
                            </div>
                        </div>
                    </div>




                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success mini-stat text-white">
                            <div class="p-3 mini-stat-desc">
                                <div class="clearfix">
                                    <h6 class="text-uppercase mt-0 float-left text-white-50">Commodities</h6>
                                    <h4 class="mb-3 mt-0 float-right">1890</h4>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="float-right">
                                    <a href="#" class="text-white-50"><i class="mdi mdi-briefcase-check h5"></i></a>
                                </div>
                                <p class="font-14 m-0"><a href="" style="color:#ffffff;">View all</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- end row -->


            </div> <!-- end container-fluid -->
        </div>
        <!-- end wrapper -->


        <?php include 'includes/footer.php'; ?>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!--Morris Chart-->
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>

        <!-- dashboard js -->
        <script src="assets/pages/dashboard.int.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>