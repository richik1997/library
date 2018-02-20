<?php

//connect to the db
include "db_connect.php";
session_start();

//fetch user data
$book_no=$_POST['book_no'];
$book_name=$_POST['book_name'];
$category=$_POST['category'];
$author=$_POST['author'];
$publisher=$_POST['publisher'];
$isbn=$_POST['isbn'];
$query1="INSERT INTO `booklist` (`book_no`,`book_name`, `isbn`, `category`, `author`, `publisher`) VALUES ( '$book_no','$book_name', '$isbn', '$category', '$author', '$publisher')";

if(mysqli_query($connection, $query1))
{
//redirect
header('location: add_items.php?msg2=1');
}
else
{
header('location: add_items.php?msg2=0');
}

?>