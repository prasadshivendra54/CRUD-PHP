<?php

// $conn = new mysqli('localhost','root','','shivendra');

// if($conn){
//     // echo "Connection Successfull !";
// }
// else{
//     die(mysqli_error($conn));
// }

include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql = "INSERT INTO `shivendradb`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')"; 

    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Submited Succsessfully !";
        header('location:display.php'); // to dispaly sata 
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body background = img/background.jpg>
    <div class="container py-5">
        <form method="post">
            <div class="my-3">
                <label>Name</label>
                <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Name..." required>
            </div>

            <div class="my-3">
                <label>Email</label>
                <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Email..." required>
            </div>

            <div class="my-3">
                <label>Phone No</label>
                <input type="text" name="phone" autocomplete="off" class="form-control" placeholder="Phone..." required>
            </div>

            <div class="my-3">
                <label>Message</label>
                <input type="text" name="message" autocomplete="off" class="form-control" placeholder="..." required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>