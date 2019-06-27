<?php
$serviceType = $_POST['serviceType'];
if($serviceType == 'getArticle'){
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="SELECT * FROM article WHERE status='Published'";
	$articles = array();
	$result=mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($articles,$row);
		}
	}
	mysqli_close($connection);
	echo json_encode($articles); die;
	}
	?>