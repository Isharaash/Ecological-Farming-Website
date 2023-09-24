<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Admin') {
    // Redirect to the login page if the user is not logged in or not an admin
    header("location: Login.php");
    exit(); // Terminate script execution
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
<h1>Welcome, <?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?> (Admin)!</h1>
    <p>This is the admin-only page.</p>
    
    <!-- Admin-specific content goes here -->
    
    <a href="logout.php">Logout</a>
</body>
</html>
