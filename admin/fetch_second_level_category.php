<?php

//fetch_second_level_category.php

include('includes/database_connection.php');

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 $query = "
 SELECT * FROM district 
 WHERE province_id IN ('".$id."')
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["district_id"].'">'.$row["district_name"].'</option>';
 }
 echo $output;
}

?>