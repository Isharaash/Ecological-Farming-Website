


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





     <section class="container">
        <header>Problems</header>
        <form id="form1" name="createservice" method="post" action="Service Register.php">

          <div class="input-box">
            <label>Your Name</label>
            <input type="text" name="name"  value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
          </div>

          <div class="input-box">
            <label>Program Name:</label>
            <input type="text" name="proname" placeholder=" Programe name" value="<?php echo htmlspecialchars($selectedServiceName); ?>" readonly>
     
          </div>

          <div class="input-box">
            <label>Your Adress:</label>
            <input type="text" name="address" placeholder="Enter Your Address"/>
     
          </div>


          <div class="input-box">
            <label>E-mail</label>
            <input type="text" name="mail" placeholder="Your E-mail" />
          </div>

          <div class="input-box">
            <label> Question:</label>
            <input type="tel" name="phone" placeholder="Enter Your Phone"/>
          </div>

         <button input type="submit" name="submit" value="Submit">Submit</button>
       
        </form>
      </section>





</body>
</html>
