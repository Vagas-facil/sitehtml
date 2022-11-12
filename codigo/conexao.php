<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = 'login';

$mysqli = mysql_conect($servername,$username,$password, $db) or die( "Falha ao conectar");

$conn->close();