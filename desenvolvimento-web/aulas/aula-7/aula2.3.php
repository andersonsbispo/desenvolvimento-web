<?php
    $nomes [0][0] = "Anderson";
    $nomes [0][1] = "Santos";
    $nomes [0][2] = "Bispo";
    $nomes [1][0] = "Mike";
    $nomes [1][1] = "Santana";
    $nomes [2][0] = "Jose";
    $nomes [2][1] = "Silvaniro";
    $nomes [2][2] = "Pereira";
    $nomes [2][3] = "Bispo";
    $nomes [3][0] = "Josefa";
    $nomes [3][1] = "Ribeiro";
    $nomes [3][2] = "Santos";
    $nomes [4][0] = "Alexandre";
    $nomes [4][1] = "Viana";


    for($i = 0; $i < count($nomes); $i++) {
        
        for($j = 0; $j < count($nomes[$i]); $j++) {
            echo $nomes[$i][$j] . " ";
        }
        echo "<br />";
    }

    echo "<hr />";

    foreach($nomes as $linha) {
        
        foreach($linha as $coluna) {
            echo $coluna . " ";
        }
        echo "<br />";
    }
?>
