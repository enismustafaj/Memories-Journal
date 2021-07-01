<?php

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost','root','','chatbox');


mysqli_query($con,"INSERT INTO logs (`username`, `msg`) VALUES ('$uname', '$msg')");

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<b><span class='msg'>" . $extract['username'] . "</span></b>: <span class='msg'>" . $extract['msg'] . "</span><br />";
}