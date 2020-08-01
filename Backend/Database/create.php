<?php
include_once 'connection.php';

// Register User
//session_start();

if (!empty($_POST) and (empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha']))) {
    $msg1 = "Preencha todos os campos!";
    //header("location:../Frontend/index.php");
}


if (isset($_POST["nome"])) {

    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $senha    = $_POST["senha"];


    $sql = "INSERT INTO usuario";
    $sql .= "(nome, email, senha ) ";
    $sql .= "VALUES ";
    $sql .= " ('$nome', '$email', '$senha')";

    $query = mysqli_query($conecta, $sql);

    if (!$query) {
        $msg2 = "Opss!!! Este e-mail já está cadastrado!";
    } else {
        $msg3 = "Cadastro realizado com sucesso!";
    }
} //End register user
?>



<!-- Regsiter clientes -->


<?php
include_once 'connection.php';

//Verificação se o campo tá vazio
if (isset($_POST["nome1"])) {

    if (!empty($_POST) and (empty($_POST['nome1']) or empty($_POST['telefone']) or empty($_POST['endereco']) or empty($_POST['numero']) or empty($_POST['cidade']) or empty($_POST['estado']) or empty($_POST['pais']) or empty($_POST['cep']))) {
    }
    
    
    $nome1 = $_POST['nome1'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $cep = $_POST['cep'];
    $id = $_POST['id'];
    

    $sql = "INSERT INTO clientes";
    $sql .= "( nome1, telefone, endereco, numero, cidade, estado, pais, cep, id ) ";
    $sql .= "VALUES ";
    $sql .= " ( '$nome1', '$telefone', '$endereco', '$numero', '$cidade', '$estado', '$pais', '$cep', '$id' )";

    $query = mysqli_query($conecta, $sql);

    if (!$query) {
        die("Error no servidor ou dados não conferem!");
    } else {
        header("location:../../Frontend/clientes.php");
    }
}
?>