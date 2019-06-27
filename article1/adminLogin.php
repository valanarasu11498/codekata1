<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN</title>
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
  
<div class="container">
  <div class="col-md-3">
  </div>
  <div class="col-md-6" style="background-color:#e7e7e7">
  <br>
  <div class="col-md-12 well">
	  <p style="color:red">This login is only for admin....User please login with user login<a href="login.php"> USER LOGIN</a></p>
	
	</div>
  <h4 class="text-center"><b>ADMIN LOGIN</b></h4>
  <br>
  <form onsubmit="login()" action="admin.html">
  <div class="row">
        <label>  USERNAME:</label>
   </div>
    <div class="row">
        <input type="text" placeholder=" Enter Username" id="adun" required>
   </div>
   <br>
     <div class="row">
        <label>  PASSWORD:</label>
   </div>
    <div class="row">
        <input type="password" placeholder="Enter Password" id="adps" required>
   </div>
	<br>
	<div class="row">
		    <button type="submit" class="btn">Login</button> 
   </div>
	</form>

	
	<br><br>
	  
	</div>
	<br><br>
	
	<div class="col-md-3">
  </div>
  </body>
</html>