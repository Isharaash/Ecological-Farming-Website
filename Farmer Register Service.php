<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
</head>
<body>
    
<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in and has the 'admin' role
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'Farmers') {
    // Redirect to the login page if the user is not logged in or not an admin
    header("location: Login.php");
    exit(); // Terminate script execution
}
$selectedServiceName = urldecode($_GET['servicename']);
?>

    <form id="form1" name="createservice" method="post" action="Service Register.php" onSubmit="return formValidation();">
        <ul>
     <label for="name"> Your Name:</label>
     <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly><br><br>
     
     <label for="descrip"> Program Name:</label>
     <input type="text" name="proname" placeholder=" Programe name" value="<?php echo htmlspecialchars($selectedServiceName); ?>" readonly><br><br>
     
    <label for="address">Your Address</label>
     <input type="text" name="address" placeholder="Enter Your Address"/><br><br>
     
    <label for="mail">E-mail</label>
     <input type="text" name="mail" placeholder="Your E-mail" /><br><br>

     <label for="phone">Phone</label>
     <input type="tel" name="phone" placeholder="Enter Your Phone"/><br><br>
     
     
     <input type="submit" name="submit" value="Submit" />     </div>
     </ul>
     
        
     
     </form>



</body>
</html>
