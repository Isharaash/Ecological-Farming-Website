<?php
   include 'navbar.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
if (count($_POST) > 0) {
    session_start();
    include 'connection.php';

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $sql = "SELECT email, role, fname, lname FROM register WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User authentication successful
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname']; // Assuming 'role' is the column for user roles

        // Redirect based on the user's role
        if ($row['role'] === 'Admin') {
          
        
            header("location: Admin.php"); 
        }

     else if ($row['role'] === 'Field Officers') {
        header("location: Field Officers.php");
     }

      else if ($row['role'] === 'Farmers') {
         header("location: Farmers.php");

} 
    } else {
        $msg = "Your Login Name or Password is invalid";
    }

    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>





<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
	
	
	
</head>
	

<body>
	

<div class="login">
<h1> Login Form </h1>
	</div>
	<div class="login-form">
	<form id="login" method="post" action=""  onSubmit="">

  
   <p> User Name:</p>
      <input type="text" name="email" placeholder="Username"/>
    
 
  
    <p>Password:</p>
      <input type="password" name="password" placeholder="Password"/>
		

   <div class="button">
    <input type="Submit" name="Login" value="Login" />

</form>
	</div>
	
</body>
</html>