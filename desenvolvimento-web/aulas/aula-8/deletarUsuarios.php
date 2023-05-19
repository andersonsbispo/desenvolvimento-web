<?php 

    $conexao = mysqli_connect ("localhost", "root", "","bancoaula")
    or die ("Conexão não efetuada");

    $id=$_GET["id"];

    $sql = "DELETE FROM usuarios WHERE ID = " . $id;
    $resultado = mysqli_query($conexao, $sql);

    header('location: frontaula12.php');
?>