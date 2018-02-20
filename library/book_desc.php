<?php
include "db_connect.php";
session_start();

$book_no=$_GET['book_no'];

$query="SELECT * FROM `booklist` WHERE `book_no` LIKE '$book_no'";

$result=mysqli_query($connection, $query);

$row=mysqli_fetch_assoc($result);

$book_name=$row['book_name'];
$category=$row['category'];
$isbn=$row['isbn'];
$publisher=$row['publisher'];
$author=$row['author'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Departmental Library | Computer Science and Engineering</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image/x-icon" href="Logo_of_JGEC.jpg">

    
</style>
  </head>
<body style="background-image: url('library_001.jpg')">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand white_text" href="library.php"><b>CSE LIBRARY</b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a href="add_items.php" class="btn btn-info white_text"><b>Add Books</b></a></li>
            <li><a href="search_page.php" class="btn btn-info white_text"><b>Search</b></a></li>
            <li><a href="book_issue.php" class="btn btn-info white_text"><b>Book Issue</b></a></li>
            <li><a href="book_return.php" class="btn btn-info white_text"><b>Book Return</b></a></li>
            <li><a href="logout.php" class="btn btn-danger white_text"><b>Log Out</b></a></li>
          </ul>
            
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12">
            </div>
            <div class="col-md-8 col-sm-12 text-center " id="main_body" style="color: white">
                <h1><b><?php echo $book_name; ?></b></h1>
                <p><h4><b>Category : </b><?php echo $category; ?></h4></p>
                <p class="padding-5"><h4><b>Author :</b><?php echo $author; ?></h4></p>
                <p><h4><b>Publisher : </b><?php echo $publisher; ?></h4></p>
                <p><h4><b>ISBN : </b><?php echo $isbn; ?></h4></p>
                <table class="table table-bordered text-white" id="main_body">
                <thead>
                  <tr>
                  <th>Issue No</th>
                    <th>Date of Issue</th>
                    <th>Borrower's Roll No</th>
                    <th>Borrower's Name</th>
                    <th>Last Date of Submission</th>
                    <th>Submission Status</th>
                  </tr>
                </thead>
                <?php

            $query="SELECT * FROM `bookissue` WHERE `book_no` = '$book_no'";

            $result=mysqli_query($connection,$query);

            while($row=mysqli_fetch_assoc($result))
                {
                  echo '<tbody>
                          <tr>
                          <td>'.$row['issue_no'].'</td>
                            <td>'.$row['date_of_issue'].'</td>
                            <td>'.$row['student_roll'].'</td>
                            <td>'.$row['student_name'].'</td>
                            <td>'.$row['last_date_of_submission'].'</td>
                            <td>'.$row['submitted'].'</td>
                          </tr>
                        </tbody>';   
                }
            ?>
            </div>
            <div class="col-md-2 col-sm-12">
            </div>
		</div>
	</div>
    <br><br><br><br>
</body>
</html>
