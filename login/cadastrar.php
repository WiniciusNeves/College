<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
<style>
    body {
            background-color: #7952b3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        form {
            background-color: white;
            width: 17%;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 5px 5px 10px gray;
        }
        
        input {
            width: 15rem;
            padding: 10px;
            margin-bottom: 10px;
        }

        a{
            text-decoration: none;
            color: #7952b3;
            font-weight: bold;
        }
        a:hover{
            text-decoration: underline;
        }
        #button{
            align-items: center;
            background-color: #7952b3;
            color: white;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
</style>
</head>

<body>

    <form action="cadastrar.php" method="POST">
        <label for="usuario">Nome:</label>
        <input type="text" name="usuario" id="usuario" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>

        <input type="submit" id="button" value="Cadastrar" name="cadastrar">
      <a href="login.php"><input id="button" type="button" value="Voltar"></a>
    </form>

    <?php
        include "config.php";
        if (isset($_POST["cadastrar"])) {
            $usuario = mysqli_real_escape_string($con, $_POST["usuario"]);
            $email = mysqli_real_escape_string($con, $_POST["email"]);
            $senha = mysqli_real_escape_string($con, md5($_POST["senha"]));

            $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email','$senha')";

            if ($con->query($sql) === TRUE) {
                echo "Cadastrado com sucesso";
                header("Location: login.php");
            } else {
                echo "Erro ao cadastrar: " . $con->error;
            }
        }
    ?>

</body>
</html>

