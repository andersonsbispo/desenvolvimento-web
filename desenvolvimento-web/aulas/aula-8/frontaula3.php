<?php 
    $conexao = mysqli_connect ("localhost", "root", "","bancoaula")
    or die ("Conexão não efetuada");

    $sql = "select * from usuarios";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class='col-md-6'>
            <form method='post' action='salvarUsuarios.php'>
                <label class='form-label'>Nome: </label>
                <input type='text' name='txt_nome' class='form-control'/><br />
                <label class='form-label'>Email: </label>
                <input type='text' name='txt_email' class='form-control'/><br />
                <label class='form-label'>Login: </label>
                <input type='text' name='txt_login' class='form-control' /><br />
                <label class='form-label'>Senha: </label>
                <input type='password' name='txt_senha' class='form-control' /><br />
                <input type='submit' value='Salvar' class="btn btn-success" />
            </form>
        </div>
        <table class='table'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Login</th>
                <th>acao</th>
            </tr>
            <?php 
            while ($linha = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$linha["ID"]."</td>"
                . "<td>".$linha["Nome"]."</td>"
                . "<td>" . $linha["Email"] ."</td>"
                . "<td>" . $linha["Login"] ."</td>"
                ."<td>
                <a href='deletarUsuarios.php?id=".$linha["ID"]."'>x</a>
                </td>";
                echo "</tr>";
            }
            ?>
        </table>
        
    </body>
</html>