<?php
    include('conexao.php');

    $db = "SELECT Nome, Email, Senha from login";
    
    if ($result = mysqli_query($mysqli, $db))
    {
 
     while($row = $result->fetch_object())
     {
         foreach($row as $key => $col){
            $col_array[$key] = utf8_encode($col);
         }
         $row_array[] =  $col_array;
     }
 
     echo json_encode($row_array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
 }
 mysqli_close($mysqli);
 ?> 