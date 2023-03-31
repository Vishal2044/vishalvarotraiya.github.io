<?php
include "connection.php";
$id = $_POST['id'];
$name =$_POST['name'];
$enroll = $_POST['enroll'];
$email = $_POST['email'];

if(isset($_POST['sub']))
{
    $sql = "INSERT INTO `student`(`Id`,`name`,`enrollment`,`email`) VALUES('$id','$name','$enroll','$email')";

    $query=mysqli_query($con,$sql);

    if($query)
    {
        header("Location:update.php");
    }
    else
    {
        echo"<script>alert('erorr');</script>";
    }
}

?>