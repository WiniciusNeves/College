<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            border-radius: 5px;
            border: 1px solid #7952b3;
            outline: none;
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

    <form action="login.php" method="POST">
        <label for="Email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="Senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>

        <input type="submit" id="button" value="Login" name="login">

        <a href="cadastrar.php"><input id="button"type="button" value="Cadastrar"></a>

    </form>
    <?php
    include "config.php";

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $con->query($sql);
        
        if ($result->num_rows > 0) {
            header("Location: relatorio.php");
        } else {
            header("Location: cadastrar.php");
        }

    }
    ?>
</body>
</html>

