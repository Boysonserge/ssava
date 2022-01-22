<?php 
include_once 'includes/session.php';
include_once '../inc/db.php';


$msg='';


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SSAVAFA FARMS</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">


        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="docs/css/bootstrap-example.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/prettify.min.css" type="text/css">
        <link rel="stylesheet" href="docs/css/fontawesome-5.15.1-web/all.css" type="text/css">

        <script type="text/javascript" src="docs/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="docs/js/prettify.min.js"></script>

        <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css">

        <style>

            .wrapper {
                position: relative;
                width: 100%;
                background-color: #ffffff;
                padding: 50px 40px 20px 40px;
                border-radius: 10px;
            }
            .container {
                position: relative;
                width: 100%;
                height: 100px;
                margin-top: 30px;
            }
            input[type="range"] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                width: 100%;
                outline: none;
                position: absolute;
                margin: auto;
                top: 0;
                bottom: 0;
                background-color: transparent;
                pointer-events: none;
            }
            .slider-track {
                width: 100%;
                height: 2px;
                position: absolute;
                margin: auto;
                top: 0;
                bottom: 0;
                border-radius: 5px;
            }
            input[type="range"]::-webkit-slider-runnable-track {
                -webkit-appearance: none;
                height: 1px;
            }
            input[type="range"]::-moz-range-track {
                -moz-appearance: none;
                height: 1px;
            }
            input[type="range"]::-ms-track {
                appearance: none;
                height: 1px;
            }
            input[type="range"]::-webkit-slider-thumb {
                -webkit-appearance: none;
                height: 1em;
                width: 1em;
                background-color: #3264fe;
                cursor: pointer;
                margin-top: -9px;
                pointer-events: auto;
                border-radius: 50%;
            }
            input[type="range"]::-moz-range-thumb {
                -webkit-appearance: none;
                height: 1em;
                width: 1em;
                cursor: pointer;
                border-radius: 50%;
                background-color: #3264fe;
                pointer-events: auto;
                border: none;
            }
            input[type="range"]::-ms-thumb {
                appearance: none;
                height: 1em;
                width: 1em;
                cursor: pointer;
                border-radius: 50%;
                background-color: #3264fe;
                pointer-events: auto;
            }
            input[type="range"]:active::-webkit-slider-thumb {
                background-color: #ffffff;
                border: 1px solid #3264fe;
            }
            .values {
                background-color: #3264fe;
                width: 32%;
                position: relative;
                margin: auto;
                border-radius: 5px;
                text-align: center;
                font-weight: 500;
                font-size: 14px;
                color: #ffffff;
            }
            .values:before {
                content: "";
                position: absolute;
                height: 0;
                width: 0;
                border-top: 15px solid #3264fe;
                border-left: 15px solid transparent;
                border-right: 15px solid transparent;
                margin: auto;
                bottom: -14px;
                left: 0;
                right: 0;
            }

        </style>
        

        
    </head>
    <body>


    

      

                     
                            
                            
<?php include "includes/header.php";?>
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0"></h4>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                        <div class="row">
                     
                            <div class="col-md-6 col-sm-12">
                                <div class="card m-b-30">
                                  
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Adding new commodity</h4>
<!--                                        <div class="form-group row">-->
<!--                                            <div class="wrapper">-->
<!--                                                <div class="values">-->
<!--                                                    <span id="range1">0</span>-->
<!--                                                    <span> &dash; </span>-->
<!--                                                    <span id="range2">100</span>-->
<!--                                                </div>-->
<!--                                                <div class="container">-->
<!--                                                    <div class="slider-track"></div>-->
<!--                                                    <input type="range" min="0" max="100" value="1" id="slider-1" oninput="slideOne()">-->
<!--                                                    <input type="range" min="0" max="100" value="70" id="slider-2" oninput="slideTwo()">-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Commodity name:</label>
                                                <div class="col-sm-8">
                                                    <input name="cname" class="form-control" type="text" id="example-text-input" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Cost:</label>
                                                <div class="col-sm-8">
                                                    <input name="cost" class="form-control" type="number"  id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Start date:</label>
                                                <div class="col-sm-8">
                                                    <input name="start" class="form-control" type="date" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">End date:</label>
                                                <div class="col-sm-8">
                                                    <input name="end" class="form-control" type="date" >
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Range:</label>
                                                <div class="col-sm-4">
                                                    <input placeholder="from" name="from" class="form-control" type="text"  >
                                                </div>
                                                <div class="col-sm-4">
                                                    <input placeholder="to" name="to" class="form-control" type="text"  >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-4 col-form-label">Commodity photo:</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="main_photo" class="form-control" required="">
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-block btn-success" name="save_commodity">SAVE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>



                        
                    </div>



            </div> 

         <?php include 'includes/footer.php'; ?>

    </body>

</html>
 <script src="assets/js/app.js"></script>
<script type="text/javascript">
    window.onload = function () {
        slideOne();
        slideTwo();
    };

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;

    function slideOne() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderOne.value = parseInt(sliderTwo.value) - minGap;
        }
        displayValOne.textContent = sliderOne.value;
        fillColor();
    }
    function slideTwo() {
        if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
            sliderTwo.value = parseInt(sliderOne.value) + minGap;
        }
        displayValTwo.textContent = sliderTwo.value;
        fillColor();
    }
    function fillColor() {
        percent1 = (sliderOne.value / sliderMaxValue) * 100;
        percent2 = (sliderTwo.value / sliderMaxValue) * 100;
        sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3264fe ${percent1}% , #3264fe ${percent2}%, #dadae5 ${percent2}%)`;
    }

</script>



<?php
if (isset($_POST['save_commodity'])){
    include "../inc/db.php";
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $cost=mysqli_real_escape_string($conn,$_POST['cost']);
    $start=mysqli_real_escape_string($conn,$_POST['start']);
    $end=mysqli_real_escape_string($conn,$_POST['end']);
    $from=mysqli_real_escape_string($conn,$_POST['from']);
    $to=mysqli_real_escape_string($conn,$_POST['to']);
    $range=$from."-".$to;

    $mainPhoto=$_FILES['main_photo']['name'];
    $mainPhotos=$_FILES["main_photo"]["tmp_name"];
    $mainPhoto=explode(".","$mainPhoto");
    $mainPhoto=uniqid().".".end($mainPhoto);

    $q="INSERT INTO `commodity` (`cName`, `cost`, `start_date`, `end_date`, `range`, `main_pic`) VALUES ('$cname', '$cost', '$start', '$end','$range','$mainPhoto')";
    if (mysqli_query($conn,$q)){
        move_uploaded_file($_FILES['main_photo']['tmp_name'],"../images/$mainPhoto");
        echo "<script>alert('Added!')</script>";
    }else{
        echo "<script>alert('Failed!')</script>";
    }


}
?>


                            



