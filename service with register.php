<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>packages list</title>
<link rel="stylesheet" href="service with register.css">
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
<br/>	<p style="color: #FF1014">For one day and one person(Price)</p><br/>
<p style="font-size: 30px">Rs.<?php echo($row['servicename']);?></p><br/>
<p>Locations:<br/><?php echo($row['descrip']);?></p><br/>
<p>Hotel Details:<br/><?php echo($row['place']);?></p><br/>
<p>Description:<br/><?php echo($row['time']);?></p>
<p>Description:<br/><?php echo($row['phone']);?></p>

<a href="data.html"> <button>Register</button></a>


	
</div>
</div>
	
<?php
  }//end of while

	
mysqli_close($conn);	

?>	
	

<body>
</body>
</html>