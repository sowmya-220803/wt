
<?php
echo"<body style='background-color:aqua;'></body>";
$appName = "Student Registration System";
$college = "RGUKT Engineering College";

$name = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $name  = trim($_POST['name']);   
$email = trim($_POST['email']);

$name  = stripslashes($name);  
$email = stripslashes($email);
$name = ucwords(strtolower($name));
$username = strtolower($name);      
$username = str_replace(" ", "", $username); 
if (strlen($name) < 3) {
    $errors[] = "Name must be at least 3 characters long";
}

if (strlen($email) < 5) {
    $errors[] = "Email must be at least 5 characters long";
}

if (strlen($username) < 5) {
    $errors[] = "Username must be at least 5 characters long";
}


}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Source Example</title>
</head>
<body >

    <h2><?php print $appName; ?></h2>
    <p>College: <?php print $college; ?></p>

    <hr>


    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        <input type="submit" value="Register">
    </form>

    <hr>

    
    <?php if ($name != "" && $email != "") { ?>
        <h3>Entered Details</h3>
        Name: <?php echo $name; ?><br>
        Email: <?php echo $email; ?>
    <?php } ?>

</body>
</html>


<?php

echo "TASK B3: MANDATORY STRING FUNCTIONS<br><br>";

$str  = "hello world welcome to php";
$str2 = "HELLO WORLD WELCOME TO PHP";

echo "Original String: $str<br><br>";

echo "Basic String Functions:<br>";
echo "strlen(): " . strlen($str) . "<br>";
echo "str_word_count(): " . str_word_count($str) . "<br>";
echo "strrev(): " . strrev($str) . "<br><br>";

echo "Case Conversion:<br>";
echo "strtoupper(): " . strtoupper($str) . "<br>";
echo "strtolower(): " . strtolower($str2) . "<br>";
echo "ucfirst(): " . ucfirst($str) . "<br>";
echo "ucwords(): " . ucwords($str) . "<br><br>";

echo "Search & Replace:<br>";
echo "strpos('world'): " . strpos($str, "world") . "<br>";
echo "str_replace(): " . str_replace("php", "PHP Language", $str) . "<br><br>";

$trimStr = "   Hello PHP   ";
echo "Substring & Trimming:<br>";
echo "substr(): " . substr($str, 6, 5) . "<br>";
echo "Original with spaces: '$trimStr'<br>";
echo "trim(): '" . trim($trimStr) . "'<br>";
echo "ltrim(): '" . ltrim($trimStr) . "'<br>";
echo "rtrim(): '" . rtrim($trimStr) . "'<br><br>";

echo "String Comparison:<br>";
echo "strcmp(): " . strcmp($str, $str2) . "<br>";
echo "strcasecmp(): " . strcasecmp($str, $str2) . "<br><br>";

$special = "<h1>Hello PHP</h1>";
echo "Special Characters & Security:<br>";
echo "Original: $special<br>";
echo "htmlspecialchars(): " . htmlspecialchars($special) . "<br>";
echo "addslashes(): " . addslashes("I'm learning PHP") . "<br>";

?>
