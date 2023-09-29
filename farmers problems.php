<?php
include("Farmers.php")
?>


<!DOCTYPE html>
<html>
<head>
    <title>Employee Questions</title>
    <link rel="stylesheet" href="forms.css">

   
</head>
<body>
  

    <section class="container">
        <header>Problems</header>
        <form  action="question.php" method="post" class="form">

          <div class="input-box">
            <label>Your Name</label>
            <input type="text" name="name"  value="<?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?>" readonly>
          </div>
          <div class="input-box">
            <label>Email</label>
            <input type="email" name="email">
          </div>

          <div class="input-box">
            <label> Question:</label>
            <textarea name="question_text" rows="4" cols="50" placeholder="Enter Problems Here. . . . . . . . ."></textarea><br><br>
          </div>

         <button type="submit">Submit</button>
       
        </form>
      </section>




</body>
</html>
