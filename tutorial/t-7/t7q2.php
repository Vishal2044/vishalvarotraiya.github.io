<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
      $num1=20;
      $num2=15;
      $num3=22;
      if($num1>$num2 && $num1>$num3){
        echo "Num1 is big {$num1}";
      }
      else{
        if($num2>$num1 && $num2>$num3){
            echo "Num1 is big {$num2}";
        }
        else
        echo "Num1 is big {$num3}";
      }
?>


</body>
</html>