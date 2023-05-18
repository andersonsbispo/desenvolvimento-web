<?php
    $nomes [0]["nome"] = "Anderson";
    $nomes [0]["tel"] = "1234";
    $nomes [1]["nome"] = "Mike";
    $nomes [1]["tel"] = "4321";
    $nomes [2]["nome"] = "Joao";
    $nomes [2]["tel"] = "4789";
    $nomes [3]["nome"] = "Jose";
    $nomes [3]["tel"] = "9874";
    $nomes [4]["nome"] = "Josefa";
    $nomes [4]["tel"] = "1478";
    $nomes [5]["nome"] = "Aline";
    $nomes [5]["tel"] = "8523";
    $nomes [6]["nome"] = "Alexandre";
    $nomes [6]["tel"] = "6984";


    for($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i]["nome"];
        echo " > ";
        echo $nomes[$i]["tel"];
        echo "<br />";
    }

    echo "<hr />";

    foreach($nomes as $nome) {
        echo $nome["nome"];
        echo " > ";
        echo $nome["tel"];
        echo "<br />";
    }
?>
