<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/logstyle.css">
  <script>
  function log()
  {
  window.open("home_page1.php");
  }
  </script>
</head>
<body>
<?php
$connection=mysqli_connect("localhost","root","","artcle");
if(!$connection)
{
 die ("connection failed". mysql_error());
}
else
{
echo ("connected succesfully");
}

$sql="INSERT INTO `artcledetails`(`title`, `author`,`date`) VALUES ('$title1','$author1','$date1')";
$result=mysqli_query($connection,$sql);
if(!$result)
{
die("error occured" . mysql_error());
}
else{
	echo "inserted";
}
window.location.href = "adminarticles.php";
 ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
	<span class="icon-bar"></span>
		<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	</button>
      <a class="navbar-brand" href="#">ADMIN INFINITI SOFTWARE SOLUTIONS</a>
    </div>
	<div id="MyNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home_page1.php"><i class="	glyphicon glyphicon-home"> HOME</i></a></li>
      <li class="active"><a href="adminarticles.php"><i class="	glyphicon glyphicon-lock"> ARTICLE</i></a></li>>
      <li><a href="login.php"><i class="	glyphicon glyphicon-log-in"> LOGIN</i></a></li>
    </ul></div>
  </div>
</nav>
  
<div class="container">
  <div class="col-md-3">
  </div>
  <div class="col-md-6" style="background-color:#e7e7e7">
  <h4 class="text-center"><b>ADD NEW ARTICLE</b></h4>
  <br>
  <form action="" method="POST" style="border:1px solid #ccc">
    <hr>

    <label for="title"><b>TITLE</b></label>
    <input type="text" placeholder="Enter Title" name="title" required>

    <label for="author"><b>AUTHOR</b></label>
    <input type="text" placeholder="Author Name" name="author" required>

    <label for="date"><b>DATE</b></label>
    <input type="date" placeholder="date" name="date" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
    </label>
    
    

    <div class="clearfix">
   
      <button type="submit" class="btn">PUBLISH</button>
    </div>
  </div>
  </div>
</form>
	<div class="col-md-3">
  </div>
  </body>
</html>