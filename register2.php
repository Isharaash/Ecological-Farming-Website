<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <?php
    include("navbar.php")
    ?>

    <div class="main">

       <div class="form2">
                <form id="form1" name="registration" method="post" action="Reginsert.php" onSubmit="">
                <h2>SIGN UP HERE</h2>
                <input type="text" name="fname" placeholder="Enter Frist Name Here">
                <input type="text" name="lname" placeholder="Enter Last Name Here">
                <input type="text" name="address" placeholder="Enter Address Here">
                <input type="email" name="email" placeholder="Enter Email Here">
                <input type="password" name="password" placeholder="Enter Password Here">
                <input type="password" name="conpassword" placeholder="Enter Confirm Password Here">
                <input type="hidden" name="role" required value="Farmers">
                
                <button class="btnn" type="submit" name="submit" value="Submit"><a>Register</a></button>
            </form>
             
               
        
          
        
            </div>
        
            </div>
        
        







</body>
</html>
