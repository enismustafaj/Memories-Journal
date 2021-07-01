<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#main {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin:auto;
    width:500px;
    margin-top: 50px;
   
}
body{
    background-color: white;


}

#head{
font-size: 25px;
font-weight: bold;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
</style>
<body>

<div id="head">Sign Up </div>
<div style="text-align: center;font-size: 26px"><b>My Memories Journal</b></div>
<?php include('errors.php'); ?>

<div id ="main">
<div class="imgcontainer">
    <img src="download.jpg" alt="Avatar" class="avatar">
  </div>
  <form action="up.php" method="post">
     <label for="username">Username</label>
    <input type="text" id="uname" name="username" placeholder="Your username..">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">

   
    <label for="password">Password</label>
    <input type="password" id="pass" name="password_1" placeholder="Your password..">
    <label for="password">Confirm Password</label>
    <input type="password" id="pass" name="password_2" placeholder="Your password  again..">
  
    <input type="submit" name="register" value="Sign Up">
  </form>
</div>

</body>
</html>