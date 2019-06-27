<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/logstyle.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
	<span class="icon-bar"></span>
		<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	</button>
      <a class="navbar-brand" href="#">INFINITI SOFTWARE SOLUTIONS</a>
    </div>
	<div id="MyNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home_page1.php"><i class="	glyphicon glyphicon-home"> HOME</i></a></li>
      <li class="disabled"><a href="#"><i class="	glyphicon glyphicon-lock"> ARTICLES</i></a></li>
      <li class="active"><a href="login.php"><i class="	glyphicon glyphicon-log-in"> LOGIN</i></a></li>
    </ul></div>
  </div>
</nav>
<?php
$email= $_POST['email'];
$psw= $_POST['psw'];
$pswr= $_POST['psw-repeat'];
$connection=mysqli_connect("localhost","root","","article");
if(!$connection)
{
 die ("connection failed". mysql_error());
}
if($psw==$pswr)
{
$sql="INSERT INTO `account_details`(`name`, `password`, `repeatpassword`) VALUES ('$email','$psw','$pswr')";
$result=mysqli_query($connection,$sql);
if(!$result)
{
die("error occured" . mysql_error());
}
else
{
	echo "account created succesfully";
}
}
else
{

	header("Location: createaccount.html");
}
?>
<div class="container">
<div class="row">
  <div class="col-md-4">
   </div>
   <div class="col-md-4">
	<form action="login.php">
		    <button type="submit" class="btn">Go To Login Page</button> 
   </div></div>
	</form>

	<br><br>
	
	<div class="col-md-3">
  </div>
</body>
</html>