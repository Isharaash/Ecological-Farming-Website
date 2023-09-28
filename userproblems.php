
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
    <title>Employee Questions</title>
</head>
<body>
    <h1>Employee Questions</h1>
    
    <!-- Employee Question Form -->
    <h2>Ask a Question</h2>
    <form action="question.php" method="post">
        Employee Name: <input type="text" name="name"  value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly><br>
        Employee Email: <input type="email" name="email"><br>
        Question: <textarea name="question_text"></textarea><br>
        <input type="submit" value="Submit Question">
    </form>

</body>
</html>
