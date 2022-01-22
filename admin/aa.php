<?php 
include_once 'includes/session.php';

include('includes/database_connection.php');


$query = "
SELECT * FROM province 
ORDER BY province_id ASC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Anzuza app | Anzuza</title>
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
        

        
    </head>
    <body>
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

    

      

                     
                            
                            

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title m-0">Anzuza umushyitsi</h4>
                                    <h8 class="text-info"><b>Icyitonderwa !! </b>Umushyitsi ubaruye ntago ari ngombwa ko umwemerera kuko ari woe ushinzwe kubyemeza!</h8>
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

                                <h4 class="mt-0 header-title">Kwanzuza umushyitsi</h4>
                                

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label">ID ya nyir'urugo:</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text"  id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label">ID y'umushyitsi:</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-number-input" class="col-sm-4 col-form-label">Igihe azamara</label>
                                    <div class="col-sm-">
                                        <select id="first_level" name="first_level[]" multiple class="form-control">
                                         <?php
                                         foreach($result as $row)
                                         {
                                          echo '<option value="'.$row["province_id"].'">'.$row["province_name"].'</option>';
                                         }
                                         ?>
                                         </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label">ID y'umushyitsi:</label>
                                    <div class="col-sm-">
                                        <select id="second_level" name="second_level[]" multiple class="form-control">

                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label">ID y'umushyitsi:</label>
                                    <div class="col-sm-">
                                       <select id="third_level" name="third_level[]" multiple class="form-control">
                                       </select>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end container-fluid -->
        </div>
                        </div>

                        
                        
                   
                </div>
            </div>
        </div>
         <?php include 'includes/footer.php'; ?>

    </body>

</html>
 <script src="assets/js/app.js"></script>
 <script type="text/javascript" src="dist/js/bootstrap-multiselect.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        window.prettyPrint() && prettyPrint();
    });
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#example-legacyFiltering').multiselect({
        enableFiltering: true,
        templates: {
            filter: '<div class="multiselect-filter"><div class="input-group input-group-sm p-1"><div class="input-group-prepend"><i class="input-group-text fas fa-search"></i></div><input class="form-control multiselect-search" type="text" /><div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button"><i class="fas fa-times"></i></button></div></div></div>'
        }
    });
});
</script>

                            
<script>
$(document).ready(function(){

 $('#first_level').multiselect({
    enableFiltering: true,
    includeSelectAllOption: true,
            selectAllJustVisible: false,
  nonSelectedText:'INTARA',
  buttonWidth:'400px',
  onChange:function(option, checked){
   $('#second_level').html('');
   $('#second_level').multiselect('rebuild');
   $('#third_level').html('');
   $('#third_level').multiselect('rebuild');
   var selected = this.$select.val();
   if(selected.length > 0)
   {
    $.ajax({
     url:"fetch_second_level_category.php",
     method:"POST",
     data:{selected:selected},
     success:function(data)
     {
      $('#second_level').html(data);
      $('#second_level').multiselect('rebuild');
     }
    })
   }
  }
 });

 $('#second_level').multiselect({
  nonSelectedText: 'AKARERE',
  buttonWidth:'400px',
  onChange:function(option, checked)
  {
   $('#third_level').html('');
   $('#third_level').multiselect('rebuild');
   var selected = this.$select.val();
   if(selected.length > 0)
   {
    $.ajax({
     url:"fetch_third_level_category.php",
     method:"POST",
     data:{selected:selected},
     success:function(data)
     {
      $('#third_level').html(data);
      $('#third_level').multiselect('rebuild');
     }
    });
   }
  }
 });

 $('#third_level').multiselect({
  nonSelectedText: 'UMURENGE',
  buttonWidth:'400px'
 });

});
</script>

 <?php include 'includes/header.php'; ?>