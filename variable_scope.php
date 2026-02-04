<?php
echo"<body style='background-color:aqua;'>";
echo"<h1 style='font-style:italic; text-align:center;'>php datatypes</h1>";
//strings
$name="mario";
echo "<p style='text-align:center;'><b>string datatypes:</b>The value of the string variable is $name</p>";

//integers
$age=25;
echo "<p style='text-align:center;'><b>integer datatypes:</b>The value of the integer variable is $age</p>";

//float
$salary=25000.0;
echo "<p style='text-align:center;'><b>float datatypes:</b>The value of the float variable is $salary</p>";

//boolean
$isstudent=true;
if ($isstudent) {
    $studentstatus="i am a student";
} else {
    $studentstatus="i am not a student";
}
echo "<p style='text-align:center;'><b>boolean datatypes:</b>The value of the boolean variable is $isstudent and the student status is $studentstatus</p>";

//array

//indexbased array

$friuts=array("mango","banana","apple");
echo "<p style='text-align:center;'><b>indexed array datatypes:</b>values $friuts[0], $friuts[1], and $friuts[2]</p>";

//associative array
$person=array("name"=>"mario","age"=>25,"city"=>"new york");
echo "<p style='text-align:center;'><b>associative array datatypes:</b>The names ".$person['name'].", age: ".$person['age'].", city: ".$person['city']."</p>";

//multidimensional array
$cars=array(
    array("volvo",22,18),
    array("bmw",15,13),
    array("saab",5,2)
);  
echo "<p style='text-align:center;'><b>multidimensional array datatypes:</b>The car ".$cars[0][0]." has ".$cars[0][1]." cars available and ".$cars[0][2]." cars sold.</p>";

//variable scope
echo "<h1 style='font-style:italic; text-align:center;'>variable scope in php</h1>";

//local scope
echo "<h3 style='font-style:italic; text-align:center;'>local scope</h3>";
function sayhello(){
    $person="mario";
    $greeting="good morning";
    echo "<p style='text-align:center;'><b>local scope:</b>Hello $person, $greeting!</p>";

}
sayhello();
//global scope
echo "<h3 style='font-style:italic; text-align:center;'>global scope</h3>";
$country="usa";
function displaycountry(){
    global $country;
    echo "<p style='text-align:center;'><b>global scope:</b>I live in $country.</p>";
}
displaycountry();

//static scope
echo "<h3 style='font-style:italic; text-align:center;'>static scope</h3>";
function counter(){
    static $count=0;
    $count++;
    echo "<p style='text-align:center;'><b>static scope:</b>Counter value: $count</p>";
}

counter();
counter();
counter();
?>
