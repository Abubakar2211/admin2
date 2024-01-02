<?php
include("../connection.php");
include("session.php");

include("index.php");


$ids = $_GET['id'];

$query = "DELETE FROM users where users . id = '$ids'";
$result = mysqli_query($conn,$query);

if($result){
    echo"
    <script>
    alert('your data has been delete $ids');
    window.location='users.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('your data has been delete $ids');
    window.location='users.php';
    </script>
    ";
}





?>