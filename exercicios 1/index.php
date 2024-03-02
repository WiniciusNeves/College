<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="" method="post">
        <div class="faltas">
            <h1>Exercise 1 - A</h1>
            <label for="faltas">Total de Faltas</label>
            <input type="text" name="faltas">
            <label for="aulas">Total de Aulas</label>
            <input type="text" name="aulas">
            <input class="button" type="submit" name="submit" value="Verificar">


            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['faltas']) && isset($_POST['aulas'])) {
                    $falta = $_POST['faltas'];
                    $aula = $_POST['aulas'];

                    if ($falta == '' || $aula == '') {
                        echo 'Preencha todos os campos';
                    } else {
                        $total = ($falta / $aula) * 100;
                        if ($total >= 25) {
                            echo 'Reprovado por falta';
                        } else {
                            echo 'Aprovado';
                        }
                    }
                } else {
                    echo 'Preencha todos os campos';
                }
            }
            ?>
        </div>
    </form>

    <form action="" method="post">
        <div class="numero">
            <h1>Exercise 1 - B</h1>
            <label for="numero">Informe um Numero</label>
            <input type="text" name="num">
            <input class="button" type="submit" name="submit" value="Verificar">

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['num'])) {
                    $num = $_POST['num'];

                    if ($num > 0) {
                        echo 'Positivo';
                    } else if ($num < 0) {
                        echo 'Negativo';
                    } else if ($num == 0) {
                        echo 'Zero';
                    }
                } else {
                    echo 'Preencha todos os campos';
                }
            }
            ?>
        </div>
    </form>


    <form action="" method="post">
        <div class="genero">
            <h1>Exercise 1 - C</h1>
            <label for="genero">Informe seu Gênero</label><br>
            <input type="radio" name="genero" value="M" id="masculino" checked>
            <label for="masculino">Masculino</label><br>
            <input type="radio" name="genero" value="F" id="feminino">
            <label for="feminino">Feminino</label><br>
            <input class="button" type="submit" name="submit" value="Verificar">

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['genero'])) {
                    $genero = $_POST['genero'];
                    if ($genero == 'M') {
                        echo 'Masculino';
                    } else if ($genero == 'F') {
                        echo 'Feminino';
                    }
                } else {
                    echo 'Preencha todos os campos';
                }
            }
            ?>

        </div>
    </form>

    <form action="" method="post">
        <div class="nota">
            <h1>Exercise 1 - D</h1>
            <label for="nota">Informe a sua média da nota</label>
            <input type="text" name="nota">
            <input class="button" type="submit" name="submit" value="Verificar">

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['nota'])) {
                    $nota = $_POST['nota'];
                    if ($nota == '') {
                        echo 'Preencha todos os campos';
                    } else if ($nota >= 6) {
                        echo 'Aprovado';
                    } else if ($nota < 3) {
                        echo 'Reprovado';
                    } else if ($nota >= 3 && $nota < 6) {
                        echo 'Recuperação';
                    }
                }
            }
            ?>
        </div>
    </form>





</body>

</html>