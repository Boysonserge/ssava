<?php 
include 'includes/session.php';
include_once 'includes/db.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    if (mysqli_query($conn,"UPDATE registry SET status=1 WHERE md5(registry_id)='$id'")) {
        echo "<script>window.location.replace('ubusabe');</script>";
    }
    
}

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Anzuza app | Ibyakozwe</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

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

        <?php include "includes/header.php"; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Ubusabe</h4>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Ubusabe bwose hamwe</h4>
                               

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Umushyitsi</th>
                                        <th>Nyir'urugo</th>
                                        <th>Telefone yakoreshejwe</th>
                                        <th>Igihe yaziye</th>
                                        <th>Igihe azagendera</th>
                                        <th>Emeza</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    <?php 
                                    
                                    $a=1;
                                    $q=mysqli_query($conn,"SELECT * FROM registry JOIN citizen WHERE registry.owner_id=citizen.citizen_id AND registry.leader_id='$_SESSION[leader]' ORDER BY registry.registry_id desc");
                                    while ($row=mysqli_fetch_array($q)) {
                                        ?>
                                     <tr>
                                        <td><?php echo $a; ?></td>
                                         
                                         <td>
                                            <?php 
                                            $show=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM citizen where citizen_id='$row[visitors_id]'"));
                                            echo $show['fname']." ".$show['lname']."<br>(".$show['idno'].")";
                                            ?>
                                              
                                          </td>
                                         <td><?php echo $row['fname']." ".$row['lname']."<br>(".$row['idno'].")"; ?></td>
                                         <td><?php echo $row['registry_phone']; ?></td>
                                         <td><?php echo date("d/m/Y",$row['date_registered']); ?></td>
                                         <td><?php echo date("d/m/Y",$row['departure_date']); ?></td>
                                         <td>
                                             <?php if ($row['status']==0) {
                                                echo "<span class='badge badge-danger'>Ubusabe Ntago buremezwa</span>";
                                             }else{
                                                echo "<span class='badge badge-success'>Ubusabe bwaremewe</span>";
                                             } ?>

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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
