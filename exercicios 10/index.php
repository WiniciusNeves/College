<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animal</title>
</head>

<body>
    <form action="" method="post">
        <h1>Animal</h1>
        <label for="nome">Nome: <input type="text" id="nome" name="nome" required></label>
        <label for="especie">Especie: <input type="text" id="especie" name="especie" required></label>
        <label for="dt_nasc">Data de nascimento: <input type="date" id="dt_nasc" name="dt_nasc" required></label>
        <label for="sexo">Sexo: <input type="text" id="sexo" name="sexo" required></label>
        <label for="cor">Cor: <input type="text" id="cor" name="cor" required></label>
        <input type="submit" name="enviar" value="enviar">
      <a href="arquivo.php"><input type="button" value="ler"></a>
    </form>

    <?php
    include 'config.php';
    if (isset($_POST['enviar'])) {

        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $dt_nasc = $_POST['dt_nasc'];
        $sexo = $_POST['sexo'];
        $cor = $_POST['cor'];


        $stmt = $con->prepare("INSERT INTO pets (nome, especie, dt_nasc, sexo, cor) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nome, $especie, $dt_nasc, $sexo, $cor);

        if ($stmt->execute()) {

            $txt = fopen("arquivo.txt", "a+");


            fwrite($txt, "Nome: $nome | Especie: $especie | Data de nascimento: $dt_nasc | Sexo: $sexo | Cor: $cor" . PHP_EOL);


            fclose($txt);

            echo "Dados inseridos com sucesso";
        } else {
            echo '<script>alert("Erro ao inserir dados")</script>';
        }


        $stmt->close();
        $con->close();
    }
    ?>

</body>

</html>