<?php
include 'dbconnect.php';
$id=$_GET['id'];
$query= "DELETE FROM product WHERE id = $id";
$result=mysqli_query($conn, $query);
if($result){
    header("Location: index.php");
}

?>