<?php

session_start();
if(session_destroy()){
	echo'<h1>You Have been Successfully Logout</h1>';
	header("location:Login.php");
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
</body>
</html>