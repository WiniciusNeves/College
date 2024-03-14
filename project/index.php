<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
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
        <?php
        for ($var = 0; $var < 5; $var++) {
            if ($var % 2 == 0) {
                echo $var."<br>";
            } else {
                echo "";
            }
        }
        ?>
        </div>
    </form>

    <form action="#" method="post">
        <div class="quadrados">
        <?php
        for ($var = 0; $var < 5; $var++) {
          
                echo $var."<br>";
            }
        echo"<br> sua quadrantes<br><br>";
            for ($var = 0; $var < 5; $var++) {
                echo $var*$var."<br>";
            }
        ?>
        </div>
    </form>

    <form action="#" methon="post">
        <div class="quadro">
        <?php
        for ($var = 0; $var <= 20; $var++) {
            if($var % 4 ==0){
                echo $var."<br>";
            }
            }
        ?>
        </div>
    </form>]

    <form action="#" method="post">
        <div class="limite">
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
            if(isset($_POST['submit'])){
                if (isset($_POST['linfe']) && isset($_POST['lsupe'])) {
                    $linfe = $_POST['linfe'];
                    $lsupe = $_POST['lsupe'];
                    if ($linfe == '' || $lsupe == '') {
                        echo 'Preencha todos os campos.';
                    } else if($linfe<lsupe){
                        echo 'Preencha todos os campos.';
                      }else if($linfe==lsupe){
                        echo 'Preencha todos os campos.';
            }
        }

            
            ?>
        </div>
    </form>

</body>
</html>
