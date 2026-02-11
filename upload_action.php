<?php

$target_dir = "uploads/";

$file_name = $_FILES["file"]["name"];
$temp_name = $_FILES["file"]["tmp_name"];

$new_name = time() . "_" . $file_name;
$target_file = $target_dir . $new_name;

if(move_uploaded_file($temp_name, $target_file)) {
    echo "File uploaded successfully!<br>";
    echo "<a href='download.php?file=$new_name'>Download File</a>";
} else {
    echo "Upload failed!";
}

?>
