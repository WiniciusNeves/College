<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="/exercicios 5/public/css/model.css">
    <link rel="stylesheet" href="/exercicios 5/public/css/style.css">
</head>

<body>
    <?php
    include('config.php');

    if (isset($_POST['botao']) && $_POST['botao'] == "Confirmar") {

        $stmtPet = $con->prepare("INSERT INTO Pet (nome_pet, tipo_pet, raca_pet, idade_pet, dono_pet) VALUES (?, ?, ?, ?, ?)");
        $stmtPet->bind_param("sssis", $_POST['nome_pet'], $_POST['tipo_pet'], $_POST['raca_pet'], $_POST['idade_pet'], $_POST['dono_pet']);

        $stmtDono = $con->prepare("INSERT INTO Dono (dono_pet, telefone, email) VALUES (?, ?, ?)");
        $stmtDono->bind_param("sss", $_POST['dono_pet'], $_POST['telefone'], $_POST['email']);

        $resultInserePet = $stmtPet->execute();
        $resultInsereDono = $stmtDono->execute();

        if ($resultInserePet && $resultInsereDono) {
            echo "<h2>Pet inserido com sucesso!!!</h2>";
            echo "<script> alert('Pet inserido com sucesso!'); window.location.href = '/exercicios 5/index.html'; </script>";
        } else {
            echo "<h2>Não consegui inserir!!!</h2>";
            echo "<script> alert('Erro ao inserir o pet. Tente novamente.'); </script>";
        }

        $stmtPet->close();
        $stmtDono->close();
    }
    ?>




    <form action="cadastro.php" method="POST" name="cadastro">
        <div class="container-criar">
            <h1>Cadastro de Pet</h1>
            <label for="name_pet">Nome do pet:</label>
            <input type="text" name="nome_pet" id="nome_pet" required>
            <label for="tipo_pet">Tipo do pet:</label>
            <input type="text" name="tipo_pet" id="tipo_pet" required>
            <label for="raca_pet">Raça do pet:</label>
            <input type="text" name="raca_pet" id="raca_pet" required>
            <label for="idade_pet">Idade do pet:</label>
            <input type="text" name="idade_pet" id="idade_pet" required>
            <label for="dono_pet">Nome do dono:</label>
            <input type="text" name="dono_pet" id="dono_pet" required>
            <label for="telefone">Telefone do dono:</label>
            <input type="text" name="telefone" id="telefone" required>
            <label for="email">Email do dono:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <input type="submit" name="botao" value="Confirmar">
            <a href="/exercicios 5/index.html"><input type="button" value="Voltar"></a>
        </div>
    </form>

</body>

</html>