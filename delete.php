<?php
include ("connect.php");

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `shivendradb` where id=$id"; // This is a sql query
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "Deleted Successfully";
        header('location:display.php'); // to dispaly sata
    }
    else{
        die(mysqli_error($conn));
    }
}
?>