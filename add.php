<?php
    include 'dbconnect.php';
    $name=$_POST['name'];
    $product=$_POST['price'];
    $query="INSERT INTO product(Name, Price) VALUES ('$name','$product')";
    $result=mysqli_query($conn,$query);
    if($result){
        header("Location: index.php");
    }

?>