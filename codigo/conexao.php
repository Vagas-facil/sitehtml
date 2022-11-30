<?php

$servername = "localhost:3307"; // 3307 é a porta, se estiver em 3306 deixe apenas localhost que funcionara normalmente
$username = "root";
$password = ""; //senha
$db = 'login';

$mysqli = new mysqli($servername,$username,$password, $db);
if(!$mysqli){
    die("erro ao conectar: ". mysql_error());
}
// conexao com o banco de dados
echo "banco criado com sucesso";
$sql = 'CREATE TABLE IF NOT EXISTS login(
    Nome VARCHAR(50),
    Email VARCHAR(50),
    Senha VARCHAR(50));';
$table = mysqli_query($mysqli,$sql);
mysqli_error($mysqli);
//criação de tabela caso n exista