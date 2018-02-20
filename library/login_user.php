<?php

include "db_connect.php";
session_start();
//fetchdata
$name=$_POST['user_name'];
$password=$_POST['user_password'];

$query= "SELECT * FROM `admins` WHERE `admin` LIKE '$name' AND `password` LIKE '$password' ";

$result=mysqli_query($connection, $query);

$num_rows=mysqli_num_rows($result);

if($num_rows==1)
{
	$row=mysqli_fetch_assoc($result);

	$_SESSION['admin']=$row['admin'];
	$_SESSION['admin_id']=$row['admin_id'];
	header('location: library.php');
}
else
{
	header('location: login_page.php');
}
?>