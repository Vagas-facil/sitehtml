<?php
    include("conexao.php");
    
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Origin-Header: Content-Type, Accept');
    header('Content-Type: application/json');

    $json = file_get_contents('php://input');
    //echo $json;

    $dados = json_decode($json);
    print_r($dados);

    //puxar dados do html 
    if($_POST['nomec'] != NULL){
        $nome = $_POST['nomec'];
        $email = $_POST['emailc']; //or $json['email']) ;
        $senha = $_POST['senhaclient']; //or $json['password']);
        $senhac = $_POST['csenha']; //or $json['password']);
    
        if($senhac == $senha){
            $db = "INSERT INTO login(Nome, Email, Senha) VALUES('$nome','$email','$senha')";
            if(!mysqli_query($mysqli, $db)){ 
                die("erro na transferencia: ");
            }
            //inserção de dados do html na tabela criada anteriormente
            echo "funciona";
            mysqli_close($mysqli);
            header('location:../index.html');
        } 
    }
    else if($dados != NULL) {
        // Pegando os dados da requisição e enviando para o DB
        $nomef = $dados->username; 
        $senhaf = $dados->password; 
        $senhacf = $dados->password; 
        $emailf = $dados->email; 

        $db = "INSERT INTO login(Nome, Email, Senha) VALUES('$nomef','$emailf','$senhaf')";
        if(!mysqli_query($mysqli, $db)){ 
            die("Erro na transferencia: ");
        }
        //inserção de dados do html na tabela criada anteriormente
        echo "Funciona Flutter";
        mysqli_close($mysqli);
    }
    else{
        echo "Algo errado ocorreu ao cadastrar";
    }
?>
