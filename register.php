<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "sowmya2007", "userdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$email     = $_POST['email'];
$contact   = $_POST['contact'];
$password  = password_hash($_POST['password'], PASSWORD_DEFAULT);
$address   = $_POST['address'];
$gender    = $_POST['gender'];

// Insert query
$sql = "INSERT INTO users
        (firstname, lastname, email, contact, password, address, gender)
        VALUES
        ('$firstname', '$lastname', '$email', '$contact', '$password', '$address', '$gender')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Registration Successful</h2>";
    echo "<p>Thank you, $firstname!</p>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>