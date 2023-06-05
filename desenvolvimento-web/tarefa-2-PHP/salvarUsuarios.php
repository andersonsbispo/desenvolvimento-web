<?php 

$conexao = mysqli_connect ("localhost", "root", "","cadastro")
or die ("Conexão não efetuada");

$nome=$_POST["txt_nome"];
$telefone=$_POST["txt_telefone"];
$email=$_POST["txt_email"];
$senha=$_POST["txt_senha"];
$genero=$_POST["txt_gender"];

$sql = "INSERT INTO usuarios 
    (nome, telefone, email, senha, gender) VALUES 
    ('".$nome."','".$telefone."','".$email."',
    '".$senha."','".$genero."')";
$resultado = mysqli_query($conexao, $sql);

header('location: front.php');
?>