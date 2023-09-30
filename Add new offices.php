<?php
include("Admin.php")
?>


<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <link rel="stylesheet" href="forms.css">
</head>
<body>
  
     <section class="container">
        <header>Add Officers</header>
        <form  action="offices register.php"  method="post" class="form">

          <div class="input-box">
            <label>First Name:</label>
            <input type="text" name="fname" >
          </div>


          <div class="input-box">
            <label>Last Name:</label>
            <input type="text" name="lname" >
          </div>
          
          <div class="input-box">
            <label>Address:</label>
            <input type="text" name="address" >
          </div>


          <div class="input-box">
            <label>Email:</label>
            <input type="email" name="email">
          </div>

          <div class="input-box">
            <label>Password:</label>
            <input type="password" name="email">
          </div>
          <div class="input-box">
            <label>Confirm Password:</label>
            <input type="conpassword" name="email">
          </div>
          <input type="hidden" id="role" value="Field Officers">
         <button type="submit" name="submit" value="Submit" >Submit</button>
       
        </form>
      </section>

</body>
</html>