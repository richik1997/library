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

  <body style="background-image: url('library_001.jpg');">
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
    <div class = "wrapper">
    <div class="row">
        <script type="text/javascript">
        var i=0;
        var txt = 'Welcome Admin';
        var speed=200;
      function typeWriter() {

      if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
      }
    }
    </script>
    <div style="text-align: center; font-family: 'Courier' ; color: white;">
    <p id="demo"><h3 style="color: white"><script type="text/javascript">
      typeWriter();
    </script>      
       </h3> 
        
    </div>
        
        <div class="container padding-25" id="main_body">
        <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered text-white">
            <thead>
              <tr>
                <th>BOOK NO</th>
                <th>BOOK NAME</th>
                <th>AUTHORS</th>
                <th>PUBLISHERS</th>
                <th>View Details</th>
              </tr>
            </thead>
            <?php

            $query="SELECT * FROM `booklist`";

            $result=mysqli_query($connection,$query);

            while($row=mysqli_fetch_assoc($result))
                {
                  echo '<tbody>
                          <tr>
                            <td>'.$row['book_no'].'</td>
                            <td>'.$row['book_name'].'</td>
                            <td>'.$row['author'].'</td>
                            <td>'.$row['publisher'].'</td>
                            <td><a href="book_desc.php?book_no='.$row['book_no'].'" class="btn btn-info btn-block">View Details</a></td>
                          </tr>
                        </tbody>';   
                }
            ?>
             </table>
             </div>
            </div>
            </div>
       </div> 
          
        
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

