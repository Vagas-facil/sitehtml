<?php
include("conexao.php");

$nome = $_POST['nomec'];
$email = $_POST['emailc'];
$senha = $_POST['senhaclient'];
$senhac = $_POST['senhac'];


$sql = "CREATE TABLE  ximarao(
    id INT(6) NOT NULL PRIMARY KEY,
    nome VARCHAR(50),
    email VARCHAR(50),
    senha VARCHAR(50),
    )";

$db = "INSERT INTO login() VALUES($nome,$email,$senha)";
mysqli_query($mysqli, $db) or die("erro na transferencia");
mysqli_close($mysqli);
?>
