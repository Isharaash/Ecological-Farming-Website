<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>packages list</title>
<style type="text/css">
	*{
	padding:0px;
	margin:0px;	
}
	body{
font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		background:url(6.jpg);
}
		h1{
			text-align: center;
			font-size: 36px;
			color: #FFFFFF;
			
		}
	.cards{
	width:25%;
	display: inline-block;
	background-color: aliceblue;
	border-radius:5px;
	margin:40px;
	box-shadow: 2px 2px 10px black;
	
		
}
	.title h1{
	text-align:center;
	font-size: 40px;
		color: #0013EB;
		font-weight: 600;
}
.des{
	text-align:center;
	padding: 4px;
	font-weight: 600;
}

	
	
	
	</style>
</head>

<body>
	

<?php
	
	include 'connection.php';	

	
	$result = mysqli_query($conn,"SELECT * FROM service");

?>
<h1>Packages</h1>
	<?php
while($row = mysqli_fetch_array($result))
  {
	  
	   $servicename=$row['servicename'];
	 $escrip= $row['descrip'];
	$place=$row['place'];
	$date=$row['date'];
		$time=$row['time'];
		$phone=$row['phone'];
	?>

	
<div class="cards">

<div class="title">
  <h1 ><?php echo($row['place']);?></h1>
	
</div>
<div class="des">
<br/>	<p style="color: #FF1014"></p><br/>
<p style="font-size: 30px">Rs.<?php echo($row['servicename']);?></p><br/>
<p><br/><?php echo($row['descrip']);?></p><br/>
<p><br/><?php echo($row['place']);?></p><br/>
<p><br/><?php echo($row['time']);?></p>
<p><br/><?php echo($row['phone']);?></p>

<a href="Farmer Register Service.php?servicename=<?php echo urlencode($servicename); ?>"> <button>Register</button></a>



	
</div>
</div>
	
<?php
  }//end of while

	
mysqli_close($conn);	

?>	
	

<body>
</body>
</html>