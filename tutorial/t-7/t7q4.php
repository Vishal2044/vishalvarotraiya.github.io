<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input name="unit" type="number" placeholder="Enter unit">
        <button name="btn">Click</button>
    </form>


    <?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $unit = $_POST['unit'];

        if($unit<50){
            echo "Unit Price is ";
            echo $unit * 3.5;
        }else if(($unit >50 ) && ($unit<100)){
            echo "Unit Price is ";
            echo $unit * 5;
        }else if(($unit > 100 ) && ($unit<250)){
            echo "Unit Price is ";
            echo $unit * 6.5;
        }else{
            echo "Please Enetr unit number";
        }

}

?>

</body>
</html>