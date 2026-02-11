<?php
$conn=mysqli_connect("localhost","root","sowmya2007","google");
if(!$conn){

  die("connection failed:" . mysqli_connect_error());
}


if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql= "INSERT INTO register (name,email,password) VALUES ('$name','$email','$password')";
    
    if(mysqli_query($conn,$sql))
    {
       header("Location: wt2.html");
       exit();
    }
    else
    {
        echo "Error:" . mysqli_error($conn);
    }
}


?>