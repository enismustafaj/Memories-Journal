<?php
include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
	
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel='stylesheet' type='text/css'>
		
	
</head>
<style>

body{
        background-color: white;

}
form {
    border: 3px solid #f1f1f1;
    width:500px;
    margin: auto;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}



.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
h2{
    margin: auto;
}
#up{
	    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
}

}



</style>
<body>


<div style="text-align: center;font-size: 26px;font-family: Roboto"><b>My Travelling Book</b></div>
<form action="in.php" method="post">
    <?php include('errors.php');?>
  <div class="imgcontainer">
    <img src="images.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b style="font-family: Roboto">Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b style="font-family: Roboto">Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="log">Login</button>
    <br>
   
   <br>
   <a href="http://localhost/project/up.php">Sign Up</a>
  </div>


</form>

</body>
</html>