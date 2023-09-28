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

if (isset($_GET['id'])) {
    $packageId = $_GET['id'];

    // Fetch the package details using the ID
    $query = "SELECT * FROM service WHERE id = $packageId";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_array($result)) {
        // The package details are available, you can use them for updating
        $servicename = $row['servicename'];
        $escrip = $row['descrip'];
        $place = $row['place'];
        $date = $row['date'];
        $time = $row['time'];
        $phone = $row['phone'];

        // Add a form for updating the package
        echo '<form method="POST" action="update_process.php">';
        echo '<input type="hidden" name="id" value="' . $packageId . '">';
        echo 'Service Name: <input type="text" name="servicename" value="' . $servicename . '"><br>';
        echo 'Description: <textarea name="descrip">' . $escrip . '</textarea><br>';
        echo 'Place: <input type="text" name="place" value="' . $place . '"><br>';
        echo 'Date: <input type="date" name="date" value="' . $date . '"><br>';
        echo 'Time: <input type="time" name="time" value="' . $time . '"><br>';
        echo 'Phone: <input type="text" name="phone" value="' . $phone . '"><br>';
        
        echo '<input type="submit" value="Update">';
        echo '</form>';
    } else {
        echo 'Package not found.';
    }
} else {
    echo 'Package ID not provided.';
}

mysqli_close($conn);
?>


<body>
</body>
</html>