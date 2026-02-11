<<<<<<< HEAD
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
=======
<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "sowmya2007", "userdb");

if (!$conn) {
    die("Database connection failed");
}

// Get form data
$email = trim($_POST['email']);
$password = $_POST['password'];

// Fetch user by email
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

// Check user exists
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verify password
    if (password_verify($password, $row['password'])) {
        echo "<h2>Login Successful</h2>";
        echo "<p>Welcome, " . $row['firstname'] . "</p>";
    } else {
        echo "<h3>Invalid Password</h3>";
    }
} else {
    echo "<h3>User not found</h3>";
}

mysqli_close($conn);
?>
>>>>>>> c5a86bdd218df540874533f3f05fc43300b3374a
