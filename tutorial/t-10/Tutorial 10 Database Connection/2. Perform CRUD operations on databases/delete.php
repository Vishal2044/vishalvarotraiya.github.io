<?php
include "connection.php";

    $sql = "DELETE FROM student WHERE Id='" . $_GET["Id"] . "'";

    if (mysqli_query($con, $sql)) {
        header("Location:index.php");


    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
    mysqli_close($conn);
    



?>