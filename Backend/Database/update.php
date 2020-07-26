<?php include_once 'connection.php';

if (isset($_POST['id'])) {
    $id = $_POST["id"];
    /*
    $id = $_POST['id'];
    $nome1 = $_POST['nome1'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $cep = $_POST['cep'];*/

   
    $id            = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome1   = filter_input(INPUT_POST, 'nome1', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone     = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco     = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
    $numero     = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade    = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
    $estado    = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
    $pais    = filter_input(INPUT_POST, 'pais', FILTER_SANITIZE_SPECIAL_CHARS);
    $cep    = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "UPDATE `clientes` SET `nome1`='$nome1', `telefone`='$telefone', `endereco`='$endereco', `numero`='$numero', `cidade`='$cidade', `estado`='$estado', `pais`='$pais', `cep`='$cep' WHERE id = $id";
    $query = mysqli_query($conecta, $sql);

    /*$info = mysqli_fetch_assoc($query);

    if (!empty($info)) {
        echo "Erro na Alteração!";
        header("location:../../Frontend/erro_editar.php");
    } else {
        $mensagem = "Alterado Com Sucesso";
        header("location:../../Frontend/clientes.php");
    }*/
}

?>