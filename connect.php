<?Php

$servername = ['localhost'];
$username = ['root'];
$password = [''];
$database = ['shivendra'];

$conn = new mysqli('localhost','root','','shivendra');

if($conn){
    // echo "Connection Successfull !";
}
else{
    die(mysqli_error($conn));
}

?>