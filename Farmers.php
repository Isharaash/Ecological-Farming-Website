<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Farmers') {
    // Redirect to the login page if the user is not logged in or not an admin
    header("location: Login.php");
    exit(); // Terminate script execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="side bar farmer.css">
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?> (Farmers)!</h1>
 
<div class="sidenav">
         
         <a href="#"> profile</a>
         <a href="farmers problems">Probems</a>
         <a href="farmers problems.php">Solve</a>
         <a href="service with register.php">Services</a>
         <a href="logout.php">Logout</a>
      
      
     </div>
    




</body>
</html>
