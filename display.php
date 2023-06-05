<?php
include "connect.php"; //this is a connection file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>

        <table class="table">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Mesaage</th>
      <th scope="col">Opration</th>
    </tr>
    <?php

    $sql = "Select * from `shivendradb`";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $message = $row['message'];
            echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$message</td>
            <td>
                <button class='btn btn-primary'><a class='text-light' href= 'update.php? updateid=$id' >Update</a></button>
                <button class='btn btn-danger'><a class='text-light' href='delete.php? deleteid=$id'>Delete</a></button>
                </td>  
            </tr>";

        }
    }
    ?>
    </table>
    </div>
    
</body>
</html>