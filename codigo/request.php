<?php
include("conexao.php");

$nome = $_POST['nomec'];
$email = $_POST['emailc'];
$senha = $_POST['senhaclient'];
$senhac = $_POST['senhac'];
//puxar dados do html 
$db = "INSERT INTO login(Nome, Email, Senha) VALUES('$nome','$email','$senha')";
if(!mysqli_query($mysqli, $db)){ 
    die("erro na transferencia: ");
}
//inserção de dados do html na tabela criada anteriormente
echo "funciona";
mysqli_close($mysqli);
header('location:../index.html');
?>
