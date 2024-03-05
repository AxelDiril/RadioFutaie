<?php
require 'connect.php';
$db = new PDO(DNS, LOGIN, PASSWORD, $options);
$sql ='SELECT pathname_track FROM `RF_TRACK` WHERE id_track = 1';
$statement = $db->prepare($sql);
$statement->execute();
$row=$statement->fetch();
echo $row['pathname_track'];
echo '<audio src=../'.$row["pathname_track"]. ' controls> </audio>';	

?> 

