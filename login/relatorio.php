<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatorio</title>

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

    <h1>Relatório</h1>

    <div style="background-color: #fff; width: 50%; margin: 0 auto; padding: 10px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2);">
        <?php
            include "config.php";
            $sql = "SELECT * FROM usuario";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "Usuário: " . $row["usuario"] . "<br>";
                    echo "Email: " . $row["email"] . "<br>";
                    echo "Senha: " . $row["senha"] . "<br>";
                    echo "<br>";
                }
            } else {
                echo "Nenhum registro encontrado";
            }
        ?>
    </div>


    
</body>
</html>