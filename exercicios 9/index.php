<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form action="#" method="post">
        <label for="id">RA:</label>
        <input type="text" name="id" id="id" required minlength="1" maxlength="6">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required minlength="3" maxlength="10">

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" required min="1" max="150">

        <label for="Mensalidade">Mensalidade:</label>
        <input type="number" name="Mensalidade" id="Mensalidade" required min="100" max="10000">

        <label for="Altura">Altura (cm):</label>
        <input type="number" name="Altura" id="Altura" required min="50" max="300">

        <label for="Peso">Peso (kg):</label>
        <input type="number" name="Peso" id="Peso" required min="1" max="500">

        <input type="submit" name="submit" value="Cadastrar">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            $id = htmlspecialchars($_POST['id']);
            $nome = htmlspecialchars($_POST['nome']);
            $idade = intval($_POST['idade']);
            $Mensalidade = intval($_POST['Mensalidade']);
            $Altura = intval($_POST['Altura']);
            $Peso = intval($_POST['Peso']);

            function completeNome($nome)
            {
                return str_pad($nome, 10, " ", STR_PAD_RIGHT);
            }

            function completeIdade($idade)
            {
                return str_pad($idade, 6, "0", STR_PAD_LEFT);
            }
            function completeMensalidade($Mensalidade)
            {
                return str_pad($Mensalidade, 5, "0", STR_PAD_LEFT);
            }

            $id = completeIdade($id);
            $nome = completeNome($nome);
            $idade = completeIdade($idade);
            $Mensalidade = completeMensalidade($Mensalidade);


            $texto = $id . "|" . $nome . "|" . $idade . "|" . $Mensalidade . "|" . $Altura . "|" . $Peso . "\n";

            $arquivo = fopen("cadastro.txt", "a");
            if ($arquivo) {
                fwrite($arquivo, $texto);
                fclose($arquivo);
            } else {
                echo "<p>Erro ao abrir o arquivo de cadastro.</p>";
            }
        }
        ?>
    </form>
</body>

</html>