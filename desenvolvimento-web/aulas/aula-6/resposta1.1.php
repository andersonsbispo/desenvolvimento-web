<?php

$num1 = $_POST["txt_num1"];
/*
de 0 a 1000, comissao de 3%
acima de 1000 a 3000 comissao de 6%
acima de 3000 a 6000 comissao de 8%
acima de 6000 comissao de 10%
*/

// if (gettype($num1) == "string"){
//     die;
// }
    if (($num1 > 0) && ($num1 <=1000))
    {
        $resp = $num1 * 0.03;
    }
    else if (($num1 > 1000) && ($num1 <=3000))
    {
        $resp = $num1 * 0.06;
    }
    else if(($num1 > 3000)&&($num1 <= 6000))
    {
        $resp = $num1 * 0.08;
    }
    else if ($num1 > 6000)
    {
        $resp = $num1 * 0.10;
    }
    else
    {
        $resp = 0;
    }
    echo "Comissao: " . $resp;
}
?>