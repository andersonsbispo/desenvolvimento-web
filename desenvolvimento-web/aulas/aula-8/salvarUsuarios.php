<?php 

    $conexao = mysqli_connect ("localhost", "root", "","bancoaula")
    or die ("Conexão não efetuada");

    $nome=$_POST["txt_nome"];
    $email=$_POST["txt_email"];
    $login=$_POST["txt_login"];
    $senha=$_POST["txt_senha"];

    $sql = "INSERT INTO usuarios 
        (Nome, Email, Login, Senha) VALUES 
        ('".$nome."','".$email."',
        '".$login."','".$senha."')";
    $resultado = mysqli_query($conexao, $sql);

    header('location: frontaula12.php');
?>