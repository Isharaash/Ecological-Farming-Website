<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
</head>
<body>
  
    <?php

    if(isset($_POST['submit'])){
        include("connection.php");
        
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
       $address=$_POST['address'];
       $email=$_POST['email'];
       $password=md5($_POST['password']);
       $role=$_POST['role'];
       
       $sql="INSERT INTO register". "(fname,lname,address, email, password, role)" . "VALUES('$fname','$lname','$address', '$email','$password','$role')";
        
       $results= mysqli_query($conn, $sql);
        
     if(!$results){
           die('Could not enter dara:'.mysql_error($conn));
            header("location:Add new Admin.php");
       }
       else
       {
           echo "Entered data successfully\n";
            header("location:Add new Admin.php");
       }
       
    } else{
        echo "Your form is not submitted yet please fill the form and visit again";
        
    }
    
    
    ?>
    




</body>
</html>