<?php
include 'dbconnect.php';
$id=$_POST['id'];
$name=$_POST['name'];
$product=$_POST['price'];


$query="UPDATE product SET Name='$name', Price ='$product' where id='$id'";
    
$result=mysqli_query($conn,$query);
if($result){
    header("Location:index.php");
}
?>

