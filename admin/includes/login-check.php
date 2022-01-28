<?php 
if (isset($_POST['login'])) {
    $msg="";
    session_start();
    
    $uname=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $q=mysqli_query($conn,"SELECT * FROM admin WHERE password='$password' AND username='$uname'");

    if (mysqli_num_rows($q)==1) {

       $_SESSION['admin']=$uname;
       header("location: index2.php");
       
    }else{
         $msg="<script>alert('Invalid credentials')</script>";
    }

}
 ?>