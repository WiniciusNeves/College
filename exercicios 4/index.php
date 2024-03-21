<?php
include("connect.php");

if(isset($_POST['submit'])){
    $nomeSetor = $_POST['setor'];
    $sede = $_POST['sede'];


    $query = "INSERT INTO empresa (nomeSetor,sede) VALUES ('$nomeSetor', '$sede')";
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
            <h1>Empresa</h1>
            <label for="setor">Nome do Setor</label>
            <input type="text" name="setor" id="setor" placeholder="Informe seu nome o nome do setor">
            <br><label for="sede">Numero da Sede</label>
            <input type="text" name="sede" id="sede" placeholder="informe o numero do setor">
            <h4>*1 principal;<br>2 filial*</h4>
            <input type="submit" name="submit" value="Cadastrar">
        </div>
    </form>
</body>

</html>
