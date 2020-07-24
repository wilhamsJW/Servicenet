<?php
include_once 'connection.php';
session_start();

//verficando se os campos estão vazios
if (!empty($_POST) and (empty($_POST['nome']) or empty($_POST['senha']))) {
    header("Location:../../Frontend/login.php");
    //exit;
    $mensagem = "Preencha os campos";
}

//verificação de email e senha
if (isset($_POST["email"])) {

    $email  = $_POST["email"];
    $senha = $_POST["senha"];

    $login = "SELECT * "; 
    $login .= " FROM usuario ";
    $login .= " WHERE email = '{$email}' and senha = '{$senha}'  "; 

    $acesso = mysqli_query($conecta, $login); 
    if (!$acesso) { 
        die("Falha na consulta");
    }

    $informacao = mysqli_fetch_assoc($acesso); 

    if (empty($informacao)) { 
        $mensagem = "Verifique se senha e email estão corretos!";
        //header("location: ../login2.php");   
    } else {
        //Rotina de saudação iniciada aqui
        $_SESSION["user"] = $informacao["id"];
        header("location:../../Frontend/clientes.php");
    }
}

?>