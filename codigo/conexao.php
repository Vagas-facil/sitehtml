<?php

$hostname = "localhost";
$bancodedados = "login";
$usuario = "root";
$senha = "";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bancodedados) or die( "Falha ao conectar");
mysql_select_db( $database ) or die( 'Erro na seleção do banco' );
