<?php

//fetch_fourth_level_category.php

include('includes/database_connection.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 $query = "
 SELECT * FROM cell 
 WHERE sector_id IN ('".$id."')
 "; 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["cell_id"].'">'.$row["cell_name"].'</option>';
 }
 echo $output;
}




?>