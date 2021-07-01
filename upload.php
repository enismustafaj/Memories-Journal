<?php
$msg="";
if(isset($_POST['upload'])){
	$target = "images/" . basename($_FILES['image']['name']);
	
	$db=mysqli_connect("localhost", "root","","photos");
	$image = $_FILES['image']['name'];
	$text = $_POST['text'];
	
	$sql = "INSERT INTO images (image, text) VALUES ('$image','$text')";
	
	mysqli_query($db,$sql);
	if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
		$msg="Success";
		
		}else{
			$msg="There is a problem";
		}
	
}


?>



<html>
<head>
	<style type="text/css">
		#content{
			width:100%;
			margin: 20px auto;
			border: 5px solid #cbcbcb;
			border-radius: 10px;
			background-color : #efefea;

		}
		form{
			width: 50%;
			margin: 20px auto;
		}
		form div{
			margin-top: 5px;
		}
		#img_div{
			
			max-width:50%;
			padding: 5px;
			margin: 15px auto;
			border: 5px solid #cbcbcb;
			border-radius: 15px;
				
			
			
		}
		#img_div:after{
			content: "";
			display: block;
			clear: both;
		}
		img{
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		}
		textarea{
			outline: none;
			max-width: 100%;
			border:3px black solid ;
			border-radius: 20px;
		}
	
	</style>

</head>
<body>
<div id="content">
<?php
$db=mysqli_connect("localhost", "root","","photos");

$sql="SELECT * FROM images";
$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_array($result)){
	echo "<div id='img_div'>";
	echo "<img src='images/". $row['image']."' width='350px' height='350px'>";
	echo "<p>". $row['text']."</p>";
	echo "</div>";
	}
?>
<form method="post" action="upload.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="10000000">
<div>
<input type="file" name="image">
</div>

<div>
<textarea name="text" cols="60" rows="10" placeholder="Write something about the image"></textarea>
</div>
<div>
<input type="submit" name="upload" value="Upload">
</div>



</form>
</div>

</body>
</html>