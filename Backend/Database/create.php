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

<?php
include_once 'connection.php';
 
// Retrieve POST data and convert JSON to PHP array 
//if(isset($_POST['userData'])){

$userData = json_decode($_POST['userData']); 
 var_dump($userData);
if(!empty($userData)){ 
    $oauth_provider = $_POST['oauth_provider']; 
    $link = !empty($userData->link)?$userData->link:''; 
    $gender = !empty($userData->gender)?$userData->gender:''; 
     
    // Check whether user data already exists in database 
    $prevQuery = "SELECT id FROM users WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$userData->id."'"; 
 
    $prevResult = $db->query($prevQuery); 
    if($prevResult->num_rows > 0){  
        // Update user data if already exists 
        $query = "UPDATE users SET first_name = '".$userData->first_name."', last_name = '".$userData->last_name."', email = '".$userData->email."', gender = '".$gender."', picture = '".$userData->picture->data->url."', link = '".$link."', modified = NOW() WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$userData->id."'"; 
        $update = $db->query($query); 
        header("location:../../Frontend/clientes.php");
    }else{ 
        // Insert user data 
        $query = "INSERT INTO users SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$userData->id."', first_name = '".$userData->first_name."', last_name = '".$userData->last_name."', email = '".$userData->email."', gender = '".$gender."', picture = '".$userData->picture->data->url."', link = '".$link."', created = NOW(), modified = NOW()"; 
        $insert = $db->query($query); 
        header("location:../../Frontend/clientes.php");
    } 
} 
//}

?>
