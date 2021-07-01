<?php
?>

<html>
<head>
<title>Chat Box</title>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.uname.value == '' || form1.msg.value == '') {
		alert("ALL FIELDS ARE MANDATORY!!!");
		return;
	}
	var uname = form1.uname.value;
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});

</script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <a href="http://localhost/project/main.php"><button>Back to Homepage</button></a>
<div id="form">
<form name="form1">
<b>Enter Your Chatname:</b> <input type="text" name="uname" style="border-style:solid;border-radius: 5px; " /> <br />
<b>Your Message:</b> <br />
<textarea name="msg" cols="80" rows="10" style="border-style: solid;border-radius: 10px"></textarea><br />
<a href="#" onclick="submitChat()"><button id="but">Send</button></a><br /><br />
</form>
</div >
<hr>
<div border="10" style="position: right">
<div id="chatlogs" style="border-style: solid;border-radius: 10px;overflow:scroll;">

</div>
</div>

</body>
</html>