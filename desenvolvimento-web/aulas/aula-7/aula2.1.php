<?php
    $nomes [0] = "Anderson";
    $nomes [1] = "Mike";
    $nomes [2] = "Joao";
    $nomes [3] = "Jose";
    $nomes [4] = "Josefa";
    $nomes [5] = "Aline";
    $nomes [6] = "Alexandre";
    
    /*
    for($i = 0; $i <= 6; $i++) {
        echo $nomes[$i];
        echo "<br />";
    }
    */

    for($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i];
        echo "<br />";
    }

    echo "<hr />";

    foreach($nomes as $nome) {
        echo $nome;
        echo "<br />";
    }
?>
