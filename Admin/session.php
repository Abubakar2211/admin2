<?php 

include("../connection.php");

session_start();
if($_SESSION['admin'] == null){
    header("Location:../index.php");
}



?>