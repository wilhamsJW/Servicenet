<?php 
include_once 'connection.php';

if (isset($_POST["nome"])) {

    if (!empty($_POST) AND (empty($_POST['nome']) OR empty($_POST['email']) OR empty($_POST['senha']))) {
        header("Location:../../Frontend/index.php"); exit;
    }
      
    
    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $senha    = $_POST["senha"];
    

    $sql = "INSERT INTO usuario"; 
    $sql .= "(nome, email, senha ) "; 
    $sql .= "VALUES ";
    $sql .= " ('$nome', '$email', '$senha')"; 

    $query = mysqli_query($conecta, $sql);
    
    //$icrement = mysqli_fetch_assoc($query);
    //$id_user = $icrement["id"];
     
    
    if (!$query) {
        die("Error no banco de dados ou email já cadastrado");
      
    } else {
        header("location:../../Frontend/login.php");
    }

}
?>