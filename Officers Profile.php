<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'Farmers' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Field Officers') {
    
    // Redirect to the login page if the user is not logged in or not a Farmer
    header("location: Login.php");
    exit(); // Terminate script execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer's Page</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?> (Farmers)!</h1>
<p>First Name: <?php echo $_SESSION['fname']; ?> </p>
<p>Last Name: <?php echo $_SESSION['lname']; ?> </p>

<p>E-mail: <?php echo $_SESSION['email'];?> </p>


</body>
</html>
