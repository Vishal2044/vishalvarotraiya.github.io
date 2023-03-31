<?php session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

</style>
</head>
<body>
</body>
</html>

<?php
$val = $_SESSION['email'];
$query = "SELECT * FROM userlog WHERE email='$val'";

  // FETCHING DATA FROM DATABASE
  $result = $con->query($query);
  
    if ($result->num_rows > 0) 
    {
        echo "<table border='0.5'>";
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>Name:</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td>Email:</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Password:</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Age:</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Date:</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>Country:</td>";
            echo "<td>" . $row['Country'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>City:</td>";
            echo "<td>" . $row['City'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>State:</td>";
            echo "<td>" . $row['State'] . "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>File Name:</td>";
            echo "<td>" . $row['file'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

?>