<?php

//connect to the db
include "db_connect.php";
session_start();

//fetch user data
$book_no=$_POST['book_no'];
$student_roll=$_POST['student_roll'];
$student_name=$_POST['student_name'];
$date_of_issue=$_POST['date_of_issue'];
$last_date_of_submission=$_POST['last_date_of_submission'];
$query="SELECT *FROM `bookissue` WHERE `book_no`='$book_no'";
$result=mysqli_query($connection,$query);
$count=substr($student_roll, 0, 4).$book_no.substr($student_roll,9,2);
$flag='YES';
while($row=mysqli_fetch_assoc($result))
{
	$submitted=$row['submitted'];
	if($submitted == 'NO')
	{
		$flag='NO';
		header('location: book_issue.php?msg=2');
	}
}
if($flag == 'YES')
{
$query1="INSERT INTO `bookissue` (`issue_no`,`book_no`, `student_roll`, `student_name`, `date_of_issue`, `last_date_of_submission`,`submitted`) VALUES ( '$count','$book_no', '$student_roll', '$student_name', '$date_of_issue','$last_date_of_submission','NO')";

if(mysqli_query($connection, $query1))
{
//redirect
header('location: book_issue.php?msg=1');
}
else
{
header('location: book_issue.php?msg=0');
}
}
?>

