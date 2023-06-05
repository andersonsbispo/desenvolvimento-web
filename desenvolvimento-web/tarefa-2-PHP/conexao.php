<?php 

$conexao = mysqli_connect ("localhost", "root", "","cadastro")
or die ("Conexão não efetuada");

$sql = "select * from usuarios";
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_array($resultado)){
    echo $linha["nome"] . " - " . $linha["email"] . "<br />";
}

?>