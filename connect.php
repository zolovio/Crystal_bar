<?php 
$con = mysqli_connect('localhost','root','', 'crystalbar');
if(!$con){
	die("Database Connection Failed". mysqli_error($con));
}
$select_db = mysqli_select_db($con, 'crystalbar');
if (!$select_db){
	die("Database Selection Failed".mysqli_error($con));
}
?>