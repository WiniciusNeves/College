<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $login = $_POST['email'];
    $senha = md5($_POST['password']);

    $query = "INSERT INTO usuario (nome, login, senha) VALUES ('$name', '$login', '$senha')";
    $result = mysqli_query($con, $query);

    if(!$result) {
        echo mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="post">
        <div class="login">
            <h1>Cadastro</h1>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Informe seu nome">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Informe seu email">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Informe sua senha">
            <input type="submit" name="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>
