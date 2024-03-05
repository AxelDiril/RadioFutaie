<?php 

$mp3 = ($_FILES['mp3']['name']);

$target = "mp3/"; 
$target = $target . basename( $_FILES['mp3']['name']); 

if(move_uploaded_file($_FILES['mp3']['tmp_name'], $target)) 
 {  header("Status: 200"); } 
 else
 { echo "no";}

?>
