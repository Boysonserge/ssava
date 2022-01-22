<?php

//fetch_fifth_level_category.php

include('includes/database_connection.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 $query = "
 SELECT * FROM village 
 WHERE cell_id IN ('".$id."')
 "; 
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["village_id"].'">'.$row["village_name"].'</option>';
 }
 echo $output;
}




?>