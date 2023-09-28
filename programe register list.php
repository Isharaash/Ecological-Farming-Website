


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>packages list</title>
    <link rel="stylesheet" href="service with register.css">
</head>

<body>

    <?php
    include 'connection.php';

    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $query = "SELECT * FROM program WHERE proname LIKE '%$search%'";
        $result = mysqli_query($conn, $query);
    } else {
        // If no search query is provided, retrieve all records
        $result = mysqli_query($conn, "SELECT * FROM program");
    }

    ?>

    <h1>Packages</h1>
    
    <form method="GET" action="">
    <label for="search">Search by Program Name:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search">
</form>


    <table border="1">
        <tr>
            <th>Farmer Name</th>
            <th>Program Name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Phone</th>
           
        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {
            $name = $row['name'];
            $proname = $row['proname'];
            $address = $row['address'];
            $mail = $row['mail'];
            $phone = $row['phone'];
           
        ?>

            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $proname; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $phone; ?></td>
                
            </tr>

        <?php
        } //end of while
        mysqli_close($conn);
        ?>

    </table>

</body>

</html>
