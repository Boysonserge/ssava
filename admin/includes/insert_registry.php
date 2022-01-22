<?php 
include 'db.php';
$msg='';
$intara=$akarere=$umurenge=$akagari=$umudugudu='';



if (isset($_POST['register'])) {
	$id1=$_POST['id1'];
	$id2=$_POST['id2'];
	$igihe=$_POST['igihe'];
	$phone=$_POST['phone'];
	$period=$_POST['period']." years";
	$goal=$_POST['goal'];
	$date=time();

	foreach ($_POST['first_level'] as $value) {
		$intara.=$value.",";
	}
	
	foreach ($_POST['second_level'] as $value) {
		$akarere.=$value.",";
	}
	foreach ($_POST['third_level'] as $value) {
		$umurenge.=$value.",";
	}
	foreach ($_POST['fourth_level'] as $value) {
		$akagari.=$value.",";
	}
	foreach ($_POST['fifth_level'] as $value) {
		$umudugudu.=$value.",";
	}

	$q1=mysqli_query($conn,"SELECT * FROM citizen WHERE idno='$id1'");
	$q2=mysqli_query($conn,"SELECT * FROM citizen WHERE idno='$id2'");

	
	$q="INSERT INTO `impact` (`impact_id`, `impact_name`, `impact_description`, `indicators`, `baseline`, `goal`, `period`, `district_id`, `sector_id`, `cell_id`, `parish_id`, `centrale_id`, `imiryango_id`, `date_created`, `team_id`) VALUES (NULL, '$impact', '$impact_des', '$indicators', '$baseline', '$goal', '$period', '$district', '$sector', '$cell', '$parish', '$centrale', '$imiryango', '$date', '$team')";
	if (mysqli_query($conn,$q)) {
		$msg="Impact successfully created!";
	}else{
		$msg="Impact Not created!";
	}
}


 ?>