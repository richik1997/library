<?php 
           include "db_connect.php";
            session_start(); 

        if(!(isset($_SESSION['admin'])))
            {
                header('location: login_page.php');
            }
            ?>

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
  </head>

  <body style="background-image: url('Books.jpg')">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand white_text" href="library.php"><b>LIBRARY</b></a>
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

    <div class="row">
     <div class="col-md-2"></div>
      <div class="col-md-4 col-sm-12">
        <a href="search_by_issue_no.php" class="btn btn-success btn-block">Search by Issue no</a>
      </div>
      <div class="col-md-4 col-sm-12">
          <a href="search_by_book_name.php" class="btn btn-warning btn-block">Search by Book Name</a>
      </div>
      <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form" action="book_name_search.php" method="POST">
                      <br><br>
                      <label class="text-white">Book Name</label><br>
                      <input type="text" name='book_name' class="form-control"  required><br><br>
                      <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
                      </form>
        </div>
        <div class="col-md-4"></div>
    </div>

