<!DOCTYPE html>
<html>
<head>
    <title>My HTML Page</title>
</head>
<body>
  
    <?php

    if(isset($_POST['submit'])){
        include("connection.php");
        
       $name=$_POST['name'];
       $proname=$_POST['proname'];
       $address=$_POST['address'];
       $mail=$_POST['mail'];
       $phone=$_POST['phone'];
       
       $sql="INSERT INTO program". "(name, proname, address, mail, phone)" . "VALUES('$name','$proname','$address', '$mail','$phone')";
        
       $results= mysqli_query($conn, $sql);
        
     if(!$results){
           die('Could not enter dara:'.mysql_error($conn));
            header("location:service.html");
       }
       else
       {
           echo "Entered data successfully\n";
            header("location:");
       }
       
    } else{
        echo "Your form is not submitted yet please fill the form and visit again";
        
    }
    
    
    ?>
    




</body>
</html>
