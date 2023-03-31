
<?php
function f1(&$a) // here $a is a formal parameter
{
    $a.="SOE";
}
$b="RK university ";
f1($b);
echo $b;
        ?>

