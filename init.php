<?php
$nome = "joaquim";

echo "Nome: " . $nome . "<br>";
$idade = 19;
echo "idade: " . $idade;


?>

<?php

$nome = "2 cerveja";
$idade = "19";

echo $nome . " " . $idade;


?>

<?php
$nome = $_GET['nome'];
$senha = $_GET['senha'];
$sexo = $_GET['sex'];
?>

<div class="container-php">
    <label for="nome">digite seu nome: </label>
    <input type="text" name="nome" id="name" placeholder="name">
    <br>
    <label for="senha">Digite sua senha:</label>
    <input type="text" name="senha" id="password" placeholder="password">
    <br>
    <label for="sex">Digite seu sexo:</label>
    <input type="redio" name="sexo" id="sex" placeholder="sex">masculino
    <input type="redio" name="sexo" id="sex" placeholder="sex">feminino"
    <br>
    <section>
        <option value="pr">Paraná</option>
        <option value="sc">Santa Catarina</option>
    </section>
    <textarea name="text" id="" cols="30" rows="10">tudo nosso nada dele</textarea>
    <input type="submit" value="enviar">

</div>
