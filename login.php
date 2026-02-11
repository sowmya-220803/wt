<?php
$conn = mysqli_connect("localhost", "root", "sowmya2007", "google");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql =  "SELECT * FROM register 
            WHERE name='$name' AND email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        header("Location: wt.html");
        exit();
    } else {
        echo "Invalid login details";
        echo "<br><a href='login.html'>Try Again</a>";
        echo "<br><a href='signin.html'>sign up</a>";
    }
}
    
?>
