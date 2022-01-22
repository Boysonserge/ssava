<?php 

session_start();
unset($_SESSION['village']);
unset($_SESSION['leader']);
unset($_SESSION['my_village']);
echo "<script>window.location.replace('login');</script>"; ?>