<?php 

    $conexao = mysqli_connect ("localhost", "root", "","bancoaula")
    or die ("Conexão não efetuada");

    $sql = "select * from usuarios";
    $resultado = mysqli_query($conexao, $sql);

    //mysqli_data_seek($resultado,0);
    //$ret = mysqli_fetch_assoc($resultado);
    //echo $ret["Nome"] . " - " . $ret["Email"];

    while ($linha = mysqli_fetch_array($resultado)){
        echo $linha["Nome"] . " - " . $linha["Email"] . "<br />";
    }

?>