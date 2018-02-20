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
      <div class="col-md-12 col-sm-12">
        <?php
          if(isset($_GET['msg2']))
          {
            if($_GET['msg2']==1)
            {
              echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Book Added successfully to the Library.');";
            echo "</script>";
            }
            else
            {
              echo "<script language='javascript' type='text/javascript'>";
            echo "alert('Try Again! Some error occurred!! ');";
            echo "</script>";
            }
          }


          ?>
      </div>
      <h1 class="text-center" style="color: white"><b>Add Details</b></h1>
        <div class="row">
            <?php

            $query="SELECT * FROM `booklist`";

            $result=mysqli_query($connection,$query);

            while($row=mysqli_fetch_assoc($result))
                {
                }
            ?>
            <div class="col-md-4"></div>
            <div class="col-md-4 col-md-8" id="main_body">
                <form class="form" action="add_books.php" method="POST">
                      <br><br>
                      <label class="text-white">Book No</label><br>
                      <input type="text" name='book_no' class="form-control"  required><br><br>
                      <label class="text-white">Book Name</label><br>
                      <input type="text" name='book_name' class="form-control"  required><br>
                      <label class="text-white">ISBN</label><br><br>
                      <input type="text" class="form-control" name='isbn' required><br>    
                          <label class="text-white">Category</label><br><br>
                          <input type="text" class="form-control" name='category' required><br>
                          <label class="text-white">Author</label><br><br>
                          <input type="text" class="form-control" name='author' required><br>
                          <label class="text-white">Publisher</label><br><br>
                          <input type="text" class="form-control" name='publisher' required><br>
                      <input type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
                      </form>
            </div>
            <div class="col-md-4"></div>
        </div>

        <br><br><br><br><br><br><br>
        <footer id="main_body">
          <div class="row">
          <div class="col-md-2 col-sm-12"></div>
              <div class="col-md-6 col-sm-12">
                <p>
                  <h3 class="text-white text-center">
                    <b>Computer Science and Engineering Department</b>
                    <b>Jalpaiguri Government Engineering College (Autonomous)</b>
                  </h3>
                </p>
              </div>
                <div class="col-md-4 col-sm-12">
                  <p>
                  <h4 class="text-white text-center"><b>Contact</b></h4><br>
                  <h5 class="text-white text-center">
                    <b>Jalpaiguri Government Engineering College</b><br>
                    <b>Jalpaiguri,West Bengal, India</b>
                  </h5>
                </p>
              </div>
          </div>
        </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

