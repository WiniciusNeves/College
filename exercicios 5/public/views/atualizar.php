<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="/exercicios 3/public/css/model.css">
    <link rel="stylesheet" href="/exercicios 3/public/css/style.css">
</head>

<body>
    <?php
    include('config.php');

    if (isset($_GET['id'])) {
        $id_pet = mysqli_real_escape_string($con, $_GET['id']);

        $stmt_pet = $con->prepare("SELECT * FROM Pet WHERE id = ?");
        $stmt_pet->bind_param("i", $id_pet);
        $stmt_pet->execute();
        $result_pet = $stmt_pet->get_result();
        $pet = $result_pet->fetch_assoc();

        $stmt_dono = $con->prepare("SELECT * FROM Dono WHERE nome_pet = ?");
        $stmt_dono->bind_param("s", $pet['nome_pet']);
        $stmt_dono->execute();
        $result_dono = $stmt_dono->get_result();
        $dono = $result_dono->fetch_assoc();

        $nome_pet = $pet['nome_pet'];
        $tipo_pet = $pet['tipo_pet'];
        $raca_pet = $pet['raca_pet'];
        $idade_pet = $pet['idade_pet'];
        $dono_pet = $pet['dono_pet'];

        $stmt_pet->close();
        $stmt_dono->close();
    }

    if (isset($_POST['submit']) && $_POST['submit'] == "Atualizar") {
        $stmt_pet_update = $con->prepare("UPDATE Pet SET nome_pet = ?, tipo_pet = ?, raca_pet = ?, idade_pet = ?, dono_pet = ? WHERE id = ?");
        $stmt_pet_update->bind_param("sssssi", $_POST['nome_pet'], $_POST['tipo_pet'], $_POST['raca_pet'], $_POST['idade_pet'], $_POST['dono_pet'], $_POST['id']);
        $result_pet_update = $stmt_pet_update->execute();



        if ($result_pet_update ) {
            echo "<script>alert('Pet e dono atualizados com sucesso!'); window.location.href = 'consultar.php';</script>";
        } else {
            echo "<script>alert('Erro ao atualizar o pet e/ou dono, tente novamente');</script>";
        }

        $stmt_pet_update->close();
    }
    ?>
    <form action="atualizar.php" method="POST" name="atualizar">
        <div class="container-atualizar">
            <h1>Atualizar Cadastro</h1>
            <label for="id">ID do pet:</label>
            <input type="text" name="id" id="id" value="<?php echo $id_pet; ?>" required>
            <label for="nome_pet">Nome do pet:</label>
            <input type="text" name="nome_pet" id="nome_pet" value="<?php echo $nome_pet; ?>" required>
            <label for="tipo_pet">Tipo do pet:</label>
            <input type="text" name="tipo_pet" id="tipo_pet" value="<?php echo $tipo_pet; ?>" required>
            <label for="raca_pet">Raça do pet:</label>
            <input type="text" name="raca_pet" id="raca_pet" value="<?php echo $raca_pet; ?>" required>
            <label for="idade_pet">Idade do pet:</label>
            <input type="text " name="idade_pet" id="idade_pet" value="<?php echo $idade_pet; ?>" required>
            <label for="dono_pet">Nome do dono:</label>
            <input type="text" name="dono_pet" id="dono_pet" value="<?php echo $dono_pet; ?>" required>
            <br>
            <input type="submit" name="submit" value="Atualizar">
</body>

</html>