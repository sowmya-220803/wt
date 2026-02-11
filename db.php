<?php
$conn=mysqli_connect("localhost","root","sowmya2007","userdb");
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
echo"connected successfully";
?>