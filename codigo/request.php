<?php
include("conexao.php");

$nome = $_POST['nomec'];
$email = $_POST['emailc'];
$senha = $_POST['senhaclient'];
$senhac = $_POST['senhac'];


$query = "SELECT $nome,$email,$senha,$senhac FROM login"; 
mysqli_query($conn, $mysqli) or die("erro na transferencia");
mysqli_close($conn);
?>
