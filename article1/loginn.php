
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
$email= $_POST['em'];
$psw= $_POST['pw'];
$connection=mysqli_connect("localhost","root","","article");
if(!$connection)
{
 die ("connection failed". mysql_error());
}
$sql="select password from account_details WHERE name='$email'";
$result=mysqli_query($connection,$sql);
if(!$result)
{
die("error occured" . mysql_error());
}
while($row=mysqli_fetch_array($result)){
 if($row["password"]!=$psw)
 {
	echo "email or password is wrong";
 }
else
{
	header("Location: userhome.php");
}
}
?>
<div class="container">
  <div class="col-md-3">
  </div>
  <div class="col-md-6" style="background-color:#e7e7e7">
  <h4 class="text-center"><b>USER LOGIN</b></h4>
  <br>
  <form action="loginn.php" method="POST">
  <div class="row">
        <label>  EMAIL:</label>
   </div>
    <div class="row">
        <input type="text" placeholder=" Enter Email" id="un" name="em" required>
   </div>
   <br>
     <div class="row">
        <label>  PASSWORD:</label>
   </div>
    <div class="row">
        <input type="password" placeholder="Enter Password" id="ps" name="pw" required>
   </div>
   <a href="#" class="for">Forgot password?</a>
	<br>
	<div class="row">
		    <button type="submit" class="btn">Login</button> 
   </div>
	</form>

	<br><br>
	
	
	
	
	
    If you Do not have an existing account<a href="createaccount.html" class="psw">Create an account</a>
	
	<br><br>
	  <div class="col-md-12 well">
	  <p style="color:red">Access restricted....Only for authorised person<a href="adminLogin.php"> ADMIN LOGIN</a></p>
	
	</div>
	</div>
	<br><br>
	
	<div class="col-md-3">
  </div>
  </body>
</html>