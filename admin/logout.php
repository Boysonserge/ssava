<?php 

session_start();
unset($_SESSION['admin']);
echo "<script>window.location.replace('login');</script>"; ?>