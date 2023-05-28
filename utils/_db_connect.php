<?php 

$server = "localhost";
$uname = "root";
$pwd = "";
$db = "site";

$conn = mysqli_connect($server,$uname,$pwd,$db);
if (!$conn){
    echo "nsdfs";
    die("Error".mysqli_connect_error());
}

?>
