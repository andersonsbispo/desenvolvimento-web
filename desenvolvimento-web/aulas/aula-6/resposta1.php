<?php

$num1 = $_POST["txt_num1"];
$num2 = $_POST["txt_num2"];
//$resp = $num1 + $num2;
//echo $resp;

for($c = 0; $c<=$num2; $c++){
    $resp = $num1 * $c;
    echo $num1 . " X " . $c . " = " . $resp . "<br />";
}

?>