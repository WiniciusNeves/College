<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatório</title>

    <style>
        h1 {
            text-align: center;
            color: black;
        }

        body {
            background-color: #7952b3;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    $usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Usuário não definido";
    ?>
    <h1>Relatório - <?php echo $usuario; ?></h1>
    <h1>Bem-vindo, aqui está o relatório de todos os usuários: </h1>

    <div style="background-color: #fff; width: 50%; margin: 0 auto; padding: 10px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">

        <?php
        include "config.php";
        $sql = "SELECT usuario, email FROM usuarios";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "Usuário: " . $row["usuario"] . "<br>";
                echo "Email: " . $row["email"] . "<br>";
                echo "<br>";
                echo "<hr>";
                echo "<br>";
            }
        } else {
            echo "Nenhum registro encontrado";
        }
        ?>
    </div>



</body>

</html>
