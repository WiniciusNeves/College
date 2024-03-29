<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cadastro</title>
    <link rel="stylesheet" href="/exercicios 5/public/css/model.css">
    <link rel="stylesheet" href="/exercicios 5/public/css/style.css">
</head>
<body>
    <?php
    include('config.php');

    if (isset($_GET['id'])) {
        $id_pet = mysqli_real_escape_string($con, $_GET['id']);
        $stmt = $con->prepare("DELETE FROM Pet WHERE id = ?");
        $stmt->bind_param("i", $id_pet);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Pet excluído com sucesso!'); window.location.href = 'consultar.php';</script>";
    }
    ?>

    <form action="excluir.php" method="GET" name="excluir">
        <div class="container-excluir">
            <h1>Excluir Cadastro</h1>
            <label for="id">ID do pet:</label>
            <input type="text" name="id" id="id" >
            <br>
            <input type="submit" name="submit" value="Excluir">
            <a href="/exercicios 5/index.html"><input type="button" value="Voltar"></a>
        </div>
    </form>
    
</body>
</html>