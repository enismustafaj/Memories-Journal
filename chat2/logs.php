<?php

$con = mysqli_connect('localhost','root','','chatbox');


$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo "<b><span style='border:5px'>" . $extract['username'] . "</span></b>: <span>" . $extract['msg'] . "</span><br />";
}