<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo</title>
</head>

<body>
    <form action="salvar_arquivo.php" method="post">


        <?php
        include 'config.php';


        $myfile = fopen("arquivo.txt", "r") or die("Unable to open file!");
        echo fread($myfile, filesize("arquivo.txt"));
        fclose($myfile);

        ?>

    </form>
    <a href="./index.php"><button>Voltar</button></a>


</body>

</html>