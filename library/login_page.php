<!DOCTYPE html>
<html>
<head>
	<title>Departmental Library | Computer Science and Engineering</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="Logo_of_JGEC.jpg">

  <style>
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>

</head>
<body id="grad">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <marquee behavior="alternate" direction="up" width="135%"><marquee direction="right"><a class="navbar-brand white_text text-white text-center" href="http://jgec.ac.in/php/cse/index.php?od=1"><b class="heading">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</b></a></marquee></marquee>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav pull-right white text">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <script type="text/javascript">
        var i=0;
        var txt = 'Department of Computer Science and Engineering - Jalpaiguri Government Engineering College';
        var speed=100;
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
    </p>
    <p style="color: white"><h3>Departmental Library</h3></p>
    </div>
		<div class="container" id="main_body">
            <div class="row">
            	<div class="col-md-7">
            		<img src="480864928.jpg">
            	</div>
                <div class="col-md-4 .margin-top-50">
                    <h1 class="text-white text-center">Login here to continue</h1><br>
                    <form class="form" action="login_user.php" method="POST">
                        <label class="text-white">Name</label><br>
                        <input type="name" name="user_name" class="form-control" placeholder="Enter username" required><br>
                        <label class="text-white">Password</label><br>
                        <input type="password" name="user_password" class="form-control" required><br>
                        <input href="login_user.php" type="submit" value="Submit" class="btn btn-danger btn-block btn-lg">
                    </form>
                </div>
            </div>
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
</body>
</html>