<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="#" method="post">
        <div class="tabuada">
            <h1>Tabuada</h1>
            <label for="num">Informe um número, vou mostrar a tabuada dele:</label>
            <input type="text" name="num">
            <label for="num2">Informe até que número vai a tabuada:</label>
            <input type="text" name="num2">
            <input type="submit" name="submit" value="Mostrar Tabuada"><br>

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['num']) && isset($_POST['num2'])) {
                    $num = $_POST['num'];
                    $num2 = $_POST['num2'];

                    if ($num == '' || $num2 == '') {
                        echo 'Preencha todos os campos.';
                    } else {
                        for ($var = 0; $var < $num2; $var++) {
                            echo $num . ' × ' . $var . ' = ' . ($num * $var) . "<br>";
                        }
                    }
                } else {
                    echo 'Preencha todos os campos.';
                }
            }
            ?>
        </div>
    </form>

    <form action="#" method="post">
        <div class="pares">
            <h1>Exercicio 1</h1>
            <?php
            for ($var = 0; $var < 5; $var++) {
                if ($var % 2 == 0) {
                    echo $var . "<br>";
                }
            }
            ?>
        </div>
    </form>

    <form action="#" method="post">
        <div class="quadrados">
            <h1>Exercicio 2</h1>
            <?php
            for ($var = 0; $var < 5; $var++) {
                echo $var . "<br>";
            }
            echo "<br>Sua quadrantes<br><br>";
            for ($var = 0; $var < 5; $var++) {
                echo $var * $var . "<br>";
            }
            ?>
        </div>
    </form>

    <form action="#" methon="post">
        <div class="quadro">
            <h1>Exercicio 3</h1>
            <?php
            for ($var = 0; $var <= 20; $var++) {
                if ($var % 4 == 0) {
                    echo $var . "<br>";
                }
            }
            ?>
        </div>
    </form>

    <form action="#" method="post">
        <div class="limite">
            <h1>exercicio 4</h1>
            <label for="linfe">
                Informe o Limite inferior
            </label>
            <input type="text" name="linfe">
            <label for="lsupe">
                Informe o Limie superior
            </label>
            <input type="text" name="lsupe">
            <input type="submit" name="submit" value="Verificar">

            <?php
            if (isset($_POST['submit'])) {
                if (isset($_POST['linfe']) && isset($_POST['lsupe'])) {
                    $linfe = $_POST['linfe'];
                    $lsupe = $_POST['lsupe'];
                    if ($linfe == '' || $lsupe == '') {
                        echo 'Preencha todos os campos.';
                    } else if ($linfe > $lsupe) {
                        echo 'Nao pode ter limite inferior maior que o limite superior.';
                    } else if ($linfe == $lsupe) {
                        echo 'Preencha todos os campos.';
                    } else {
                        for ($var = $linfe; $var <= $lsupe; $var++) {
                            if ($var % 2 == 0) {
                                echo $var . "<br>";
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </form>

    <form action="#" method="post">
            <div class="imparsoma">
                <h1>exercicio 5</h1>
                <?php
                for ($var = 0; $var < 12; $var++) {
                    if ($var % 2 != 0) {
                        echo $var . "<br>";
                    }
                }
                echo "media<br>"
                ?>
                <?php
                $soma = 0;
                for ($var = 0; $var < 12; $var++) {
                    $soma += $var;
                }
                echo $soma / 12
                ?>
            </div>
    </form>

</body>

</html>