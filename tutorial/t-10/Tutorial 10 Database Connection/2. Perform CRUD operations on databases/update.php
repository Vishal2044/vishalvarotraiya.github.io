<?php
include "connection.php";
$id = $_POST['id'];
$name =$_POST['name'];
$enroll = $_POST['enroll'];
$email = $_POST['email'];

if(isset($_POST['update']))
{
    $sql ="UPDATE `student` SET `Id`='$id',`name`='$name',`enrollment`='$enroll',`email`='$email' WHERE `Id`='$id'";
        
    $query=mysqli_query($con,$sql);

        if($query)
        {
            header("Location:index.php");
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color:#ff7f50;font-family:'Courier New', Courier, monospace;margin-left: 60px;">Student Infomation</h1>
    <form action="" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="number" placeholder="Enter Name" require="" name="id" class="input"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" placeholder="Enter Name" require="" name="name" class="input"></td>
        </tr>
        <tr>
            <td>Enrollment</td>
            <td><input type="text" placeholder="Enter Name" require="" name="enroll" class="input"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" placeholder="Enter Name" require="" name="email" class="input"></td>
        </tr>
        
    </table>
    <input type="submit" name="update" class="btn" value="Update" style="position: absolute;left: 250px;top: 632px;">

    </form>
    <a href="insert.php"><input type="submit" name="sub" class="btn" value="Insert"></a>

</body>
</html>

<table border='0.5' class="cls">
<?php
include "connection.php";

    $query = "SELECT * FROM student";
  
    // FETCHING DATA FROM DATABASE
    $result = $con->query($query);
    
      if ($result->num_rows > 0) 
      {
          
          echo "<tr>";
          echo "<th>ID</th>";
          echo "<th>Name</th>";
          echo "<th>Enrollment</th>";
          echo "<th>Email</th>";
          echo "<th>Action</th>";
          // OUTPUT DATA OF EACH ROW
          while($row = $result->fetch_assoc())
          {
            echo "<tr>";
            echo "<td>" . $row['Id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['enrollment'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>";?>
            <a href="delete.php?Id=<?php echo $row["Id"]; ?>" style="text-decoration: none; color:red">Delete</a>
            <?php
            echo "</td>";
            echo "</tr>";
          }
    }
    echo "</table>";


?>