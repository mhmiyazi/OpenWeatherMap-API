<?php
//Insert Data will be automatically
//Without Any Refreshing
include('connection.php');

$name=$_POST['city'];
$description=$_POST['description'];
$temperature=$_POST['temperature'];
$humidity=$_POST['humidity'];

//City Selection
$select_city="UPDATE `city_selection` SET `cityname` = '$name' WHERE `city_selection`.`id` = 1;";
$select_city_query = mysqli_query($conn,$select_city);
//query
$display_data="INSERT INTO `search` (`name`, `description`, `temperature`, `humidity`) VALUES ('$name', '$description', '$temperature', '$humidity')";
$res_s_d = mysqli_query($conn,$display_data);
// if ($res_s_d === TRUE) {
//     echo "data inserted";
// }
// else
// {
//     echo "failed";
// }
?>