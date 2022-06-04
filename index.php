<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Implementation</title>
</head>
<body>

    <h1>Product Name</h1>
    <form action="add.php" method="POST">
        <p><input type="text" name="name" placeholder="Name" required></p>
        <p><input type="number" name="price"placeholder="Price" required></p>
        <input type="Submit" value="submit" name="submit">

    </form>
    <br>
    <table border= "2px solid black;">
        <tr>
           <th>Name</th>
           <th>Price</th>
           <th>Status</th>
        </tr>

        <?php
        include 'dbconnect.php';
        $query="Select * from product";
        $result=mysqli_query($conn, $query);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['Name'];
                $product=$row['Price'];
            
           
            
        ?>
        <tr>
        <td><?php echo $name?></td>
        <td><?php echo "Rs." .$product?></td>
        <td>
            <a href="update.php?id=<?php echo $id?>">Update</a>
            <a href="delete.php?id=<?php echo $id?>">Delete</a>
        </td>
        </tr>
    <?php
    }
}
?>


    </table>
    
</body>
</html>