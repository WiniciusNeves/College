
<?php
$con = mysqli_connect('127.0.0.1:3307','root','');
$database = mysqli_select_db($con,'aula_php');

if(!$con|| !$database) echo mysqli_error($con);



?>