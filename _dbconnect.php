<?php
$server="localhost";
$username="root";
$password="";
$database="users2001";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
//     echo "success";
// }

    die("error".mysqli_connect_error());
}

?>