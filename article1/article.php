<?php
$serviceType = $_POST['serviceType'];

if($serviceType == 'creatArticle'){
	
	$title= $_POST['title'];
	$author= $_POST['author'];
	$category= $_POST['category'];
	$tag= $_POST['tag'];
	$image= $_FILES['image'];
	$content= $_POST['content'];
	$status= $_POST['status'];
	$connection=mysqli_connect("localhost","root","","article");
	$fileName = $_FILES['image']['name'];
	
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="INSERT INTO article (title, author,category,tag,date,content,status,image) VALUES ('$title','$author','$category','$tag',CURDATE(),'$content','$status','$fileName')";

	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
	die("error occured" . mysql_error());
	}
	else{
		$sql2='SELECT LAST_INSERT_ID() as lid';
		$result2=mysqli_query($connection,$sql2);
		if ($result2->num_rows > 0) {
		// output data of each row
			while($row = $result2->fetch_assoc()) {
				echo $row['lid'];
				mysqli_close($connection);
				mapimage($row['lid']);
				header("Location: admin.html");
			}
		}
		
	}
	
}else if($serviceType == 'getArticle'){
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="SELECT * FROM article";
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
	else if( $serviceType == 'singleRecord'){
	$id= $_POST['id'];
	$articles = array();
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="SELECT * FROM article WHERE id = '$id'";
	$articles = new class {};
	$result=mysqli_query($connection,$sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$articles->article = $row; 
		}
	}
	
	$articles->images = array();
	$sql2="SELECT * FROM article_images WHERE article_id = '$id'";
	$result_2=mysqli_query($connection,$sql2);
	if ($result_2 && $result_2->num_rows > 0) {
		while($row_2 = $result_2->fetch_assoc()) {
			array_push($articles->images , $row_2); 
		}
	}
	$articles->comments = array();
	$sql3="SELECT * FROM article_coments WHERE article_id = '$id'";
	$result_3 = mysqli_query($connection,$sql3);
	if ($result_3 && $result_3->num_rows > 0) {
		while($row_3 = $result_3->fetch_assoc()) {
			array_push($articles->comments , $row_3); 
		}
	}
	
	mysqli_close($connection);
	echo json_encode($articles); die;
}else if( $serviceType == 'updateContent'){
	$id= $_POST['id'];
	$content= $_POST['content'];
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="UPDATE article SET content = '$content',status='Published' WHERE id='$id'";

	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
	die("error occured" . mysql_error());
	}else{
		echo 'success';
	}
} else if( $serviceType == 'addComment'){
	$id= $_POST['id'];
	$comment= $_POST['coment'];
	$name= $_POST['user'];
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="INSERT INTO article_coments (article_id,coments,date,user) VALUES ('$id','$comment',CURDATE(),'$name')";

	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
	die("error occured" . mysql_error());
	}else{
		echo 'success';
	}
}
else if( $serviceType == 'addImage'){
	$id= $_POST['id'];
	$fileName = $_FILES['image']['name'];
	$connection=mysqli_connect("localhost","root","","article");
	if(!$connection)
	{
	 die ("connection failed". mysql_error());
	}
	$sql="INSERT INTO article_images (article_id,image) VALUES ('$id','$fileName')";

	$result=mysqli_query($connection,$sql);
	if(!$result)
	{
	die("error occured" . mysql_error());
	}else{
		move_uploaded_file($_FILES['image']["tmp_name"], 'image/'.$_FILES['image']['name']);
		echo 'success';
	}
}

function mapimage($artId){
		$connection=mysqli_connect("localhost","root","","article");
		$fileName = $_FILES['image']['name'];
		$sql3="INSERT INTO article_images (article_id, image) VALUES ('$artId','$fileName')";
		$result=mysqli_query($connection,$sql3);
		if(!$result)
		{
			die("error occured" . mysql_error());
		}else{
			echo 23232323;
			echo $_FILES['image']["tmp_name"];
			move_uploaded_file($_FILES['image']["tmp_name"], 'image/'.$_FILES['image']['name']);
		}
	}

?>