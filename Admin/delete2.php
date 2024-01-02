<?php
include("../connection.php");
include("users.php");
include("session.php");


$ids = $_GET['id'];

$query = "DELETE FROM student where student . id = '$ids'";

$result = mysqli_query($conn,$query);

if($result){
    echo"
    <script>
    alert('your data has been delete $ids');
    window.location='index.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('your data has been delete $ids');
    window.location='index.php';
    </script>
    ";
}





?>