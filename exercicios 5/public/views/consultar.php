<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pet</title>
    <link rel="stylesheet" href="/exercicios 5/public/css/model.css">
    <link rel="stylesheet" href="/exercicios 5/public/css/style.css">
</head>

<body>
    <form action="consultar.php" method="POST" name="consultar">
        <div class="container-listar">
            <h1>Consultar Pet</h1>
            <label for="dono_pet">Nome do dono:</label>
            <input type="text" name="dono_pet" id="dono_pet">
            <label for="nome_pet">Nome do pet:</label>
            <input type="text" name="nome_pet" id="nome_pet">
            <label for="raca_pet">Raça do pet:</label><input type="text" name="raca_pet" id="raca_pet"></label>
            <br>
            <input type="submit" name="submit" id="submit" value="Consultar">
            <a href="/exercicios 5/index.html"><input type="button" value="Voltar"></a>
        </div>
    </form>

    <?php
    include('config.php');

    if (isset($_POST['submit']) && $_POST['submit'] == "Consultar") {

        $nome_pet = mysqli_real_escape_string($con, $_POST['nome_pet']);
        $dono_pet = mysqli_real_escape_string($con, $_POST['dono_pet']);
        $raca_pet = mysqli_real_escape_string($con, $_POST['raca_pet']);

        $query = "SELECT * FROM Pet WHERE 1=1";
        $query .= ($dono_pet ? " AND dono_pet LIKE '%$dono_pet%' " : "");
        $query .= ($nome_pet ? " AND nome_pet = '$nome_pet' " : "");
        $query .= ($raca_pet ? " AND raca_pet = '$raca_pet' " : "");
        $query .= " ORDER BY id";

        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
               
                echo '<table width="95%" border="1" align="center">';
                echo '<tr bgcolor="#9999FF">';
                echo '<th width="5%">ID</th>';
                echo '<th width="30%">Nome do pet</th>';
                echo '<th width="15%">Tipo do pet</th>';
                echo '<th width="15%">Raça do pet</th>';
                echo '<th width="15%">Idade do pet</th>';
                echo '<th width="15%">Dono do pet</th>';
                echo '<th width="5%">Ação</th>'; 
                echo '</tr>';

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row["id"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["nome_pet"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["tipo_pet"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["raca_pet"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["idade_pet"]) . '</td>';
                    echo '<td>' . htmlspecialchars($row["dono_pet"]) . '</td>';
                    echo '<td><a href="./atualizar.php?pag=atualizar&id=' . $row['id'] . '">editar</a></td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo "Nenhum pet encontrado.";
            }
        } else {
            echo "Erro na consulta: " . mysqli_error($con);
        }
    }
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: whitesmoke;
            position: fixed;
            top: 20rem
        }
        table td a {
            color: whitesmoke;
            text-decoration: none;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: transparent
        }

        th {
            background-color: teal;
            color: white;
        }
    </style>




</body>

</html>