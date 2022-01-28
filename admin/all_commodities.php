<?php 
include 'includes/session.php';
include_once '../inc/db.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    if (mysqli_query($conn,"")) {
        echo "<script>alert('Deleted');</script>";
    }
    
}

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SSAVA FARMS | ADMIN</title>

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">


    </head>


    <body>



        <?php include "includes/header.php"; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">

                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Available commodities</h4>
                               

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Cost</th>
                                        <th>Range</th>
                                        <th>Pic</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php 
                                    
                                    $a=1;
                                    $q=mysqli_query($conn,"SELECT * FROM commodity ");
                                    while ($row=mysqli_fetch_array($q)) {
                                        ?>
                                     <tr>
                                        <td><?php echo $a; ?></td>
                                         
                                         
                                         <td><?php echo $row['cName']; ?></td>
                                         <td><?php echo $row['cost']; ?></td>
                                         <td><?php echo $row['range']; ?></td>
                                         <td><a target="_blank" href="../images/<?php echo $row['main_pic'];?>">View image</a></td>
                                         <td>
                                             <div class="btn-group mo-mb-2">
                                                 <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     Action
                                                 </button>
                                                 <div class="dropdown-menu">
                                                     <a onclick="return confirm('Sure to delete?')" class="dropdown-item" href="?del=<?php echo $row['commodity_id']?>">Delete</a>
                                                     <a class="dropdown-item" href="#">Update</a>
                                                     <div class="dropdown-divider"></div>
                                                 </div>
                                             </div>
                                         </td>

                                     </tr>


                                     <?php $a++;} ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

               

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

        <!-- Required datatable js -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/datatables.init.js"></script>
        <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>


        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
