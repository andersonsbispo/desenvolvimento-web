<?php
$conexao = mysqli_connect("localhost", "root", "", "cadastro") or die("Conexão não efetuada");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexao, $sql);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS--ZfTG-t5pQAm8Gp9gHb0Ruld7Ro77l-y-g&usqp=CAU" type="image/x-icon">
    
    <style>
      body {
        background-color: #eff2f4;
      }
      .navbar {
        margin-bottom: 60px;
      }
      .card {
        box-shadow: 3px 6px 8px 3px rgba(100, 100, 100, 0.3);
      }
      iframe {
        width: 100%;
        height: 445px;
      }
    </style>
    
    <title>Cadastro de Usuários</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #8be4e2;" data-bs-theme="light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Cadastro de Usuários</b></a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Cadastro de Usuários</h1>
                        <form method="post" action="salvarUsuarios.php">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input class="form-control" type="text" name="txt_nome" id="nome" placeholder="Digite o seu nome" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <input class="form-control" type="tel" name="txt_telefone" id="telefone" placeholder="(xx) xxxxx-xxxx" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" type="email" name="txt_email" id="email" placeholder="Digite o seu email" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input class="form-control" type="password" name="txt_senha" id="senha" placeholder="Digite sua senha" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gênero:</label> <br>
                                <select class="form-select" id="gender" name="txt_gender">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-secondary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <table id="usuarios" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Senha</th>
                                    <th scope="col">Gênero</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                while ($linha = mysqli_fetch_array($resultado)) {
                                    echo "<tr>";
                                    echo "<td>".$linha["id"]."</td>"
                                    . "<td>".$linha["nome"]."</td>"
                                    . "<td>".$linha["telefone"]."</td>"
                                    . "<td>".$linha["email"]."</td>"
                                    . "<td>".$linha["senha"]."</td>"
                                    . "<td>".$linha["gender"]."</td>"
                                    . "<td><a href='deletarUsuarios.php?id=".$linha["id"]."'>x</a></td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container">
        <footer class="py-3 my-4">
            <p class="text-center text-muted">Anderson Santos Bispo RA:11200269</p>
        </footer>
    </div>
</body>
</html>