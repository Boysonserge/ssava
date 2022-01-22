<?php
include "../inc/db.php";
include "includes/login-check.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Anzuza app login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        
        <div class="account-pages">
            
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 offset-lg-1">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="p-2">
                                    <h4 class="text-muted float-right font-18 mt-4">LOGIN</h4>
                                    
                                    <div>
                                        <a href="index.html" class="logo logo-admin"><img src="assets/images/logo_dark.png" height="28" alt="logo"></a>
                                    </div>
                                </div>

        
                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" action="" method="POST">
            <?php
            if (isset($_POST['login'])){
                echo $msg;
            }?>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="username" class="form-control" type="text" required="" placeholder="username">
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input name="password" class="form-control" type="password" required="" placeholder="password">
                                            </div>
                                        </div>
        
                                        
        
                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button name="login" class="btn btn-success btn-block waves-effect waves-light" type="submit">L O G I N</button>
                                            </div>
                                        </div>
        

                                          
                                        </div>
                                    </form>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html

