<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <h1>Car List</h1>
        
    </head>

    <body> 

<?php 
require_once "settings.php";
$dbconn = mysqli_connect($host, $user, $pwd, $sql_db);
if ($dbconn) {

    $query = "SELECT * FROM cars";
    $result = mysqli_query($dbconn, $query);
    if ($result) {
        echo "<table border='1'>";
        echo "<tr><th>Car ID</th><th>Car Name</th><th>Car Model</th><th>Car Price</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
        die("There are no cars to display." . mysqli_error($dbconn));
    }

    mysqli_close($dbconn);
}else echo "<p>Unable to connect to the db.</p>"; 


?> 

    </body> 
</html>