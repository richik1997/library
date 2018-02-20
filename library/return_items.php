<?php

//connect to the db
include "db_connect.php";
session_start();

//fetch user data
$issue_no=$_POST['issue_no'];
$student_roll=$_POST['student_roll'];
$date_of_submission=$_POST['date_of_submission'];
$query1="SELECT * FROM `bookissue` WHERE `issue_no` = '$issue_no'";
$result=mysqli_query($connection,$query1);
if($row=mysqli_fetch_assoc($result))
{
$submitted=$row['submitted'];
if($submitted == 'NO')
{
$query="UPDATE `bookissue` SET `submitted` = 'YES' WHERE `bookissue`.`issue_no` = '$issue_no'";
if(mysqli_query($connection, $query))
{
//redirect
header('location: book_return.php?msg1=1');
}
else
{
header('location: book_return.php?msg1=0');
}
}
else
{
	header('location: book_return.php?msg1=2');
}
}
?>