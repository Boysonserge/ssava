<?php

//fetch_third_level_category.php

include('includes/database_connection.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 $query = "
 SELECT * FROM sector 
 WHERE district_id IN ('".$id."')
 "; 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["sector_id"].'">'.$row["sector_name"].'</option>';
 }
 echo $output;
}




?>