<?php

// $conn = new mysqli('localhost','root','','shivendra');

// if($conn){
//     // echo "Connection Successfull !";
// }
// else{
//     die(mysqli_error($conn));
// }

include 'connect.php';

$id = $_GET['updateid'];
$sql = "select * from `shivendradb` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$message = $row['message'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $sql = "update `shivendradb` set `name`='$name', `email`='$email', `phone`='$phone', `message`='$message' where id=$id";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Updated Succsessfully !";
        header('location:display.php'); // to dispaly data 
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
  <body>
    <div class="container py-5">
        <form method="post">
            <div class="my-3">
                <label>Name</label>
                <input type="text" name="name" autocomplete="off" value="<?php echo $name; ?>" class="form-control" placeholder="Name..." required>
            </div>

            <div class="my-3">
                <label>Email</label>
                <input type="email" name="email" autocomplete="off" value="<?php echo $email; ?>" class="form-control" placeholder="Email..." required>
            </div>

            <div class="my-3">
                <label>Phone No</label>
                <input type="text" name="phone" autocomplete="off" value="<?php echo $phone; ?>" class="form-control" placeholder="Phone..." required>
            </div>

            <div class="my-3">
                <label>Message</label>
                <input type="text" name="message" autocomplete="off" value="<?php echo $message; ?>" class="form-control" placeholder="..." required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>