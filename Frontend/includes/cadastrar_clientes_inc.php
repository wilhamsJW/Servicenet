<?php include_once 'includes/header_inc.php'; ?>
<?php include_once 'includes/menu.php'; ?>
<?php include_once 'includes/cadastrar_clientes_inc.php'; ?>
<?php include_once 'includes/footer_inc.php'; ?>
<?php
session_start(); 
if (!isset($_SESSION['user'])) {
  header("location:login.php");
}
?>

<form action="../Backend/Database/create.php" method="POST">
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 style="margin-top: 10px;">Cadastro novo cliente</h3>
            <p>(Após colocar o cep, tecle a tecla Tab e alguns campos e o mapa são carregados automaticamente.)</p>
            <form action="../Backend/Database/update.php" method="POST">


                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do Cliente</label>
                        <input type="text" name="nome1" class="form-control" aria-describedby="emailHelp" placeholder="Nome do cliente">
                        <small id="emailHelp" class="form-text text-muted"></small>
                        <input name="id" value="<?php echo $id ?>" style="display:none">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
                        <input type="text" id="telefone" name="telefone"  class="form-control" aria-describedby="emailHelp" placeholder="Telefone">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;Endereço</label>
                        <input type="text" name="endereco"  class="form-control" id="rua" aria-describedby="emailHelp" placeholder="Endereço">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-list-ol"></i>&nbsp;Número</label>
                        <input type="number" name="numero" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-city"></i>&nbsp;Cidade</label>
                        <input type="text" name="cidade"  class="form-control" id="cidade" aria-describedby="emailHelp" placeholder="Cidade">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-flag"></i>&nbsp;Estado</label>
                        <input type="text" name="estado"  class="form-control" id="uf" aria-describedby="emailHelp" placeholder="Estado">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-flag-usa"></i>&nbsp;País</label>
                        <input type="text" name="pais"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</label>
                        <input type="text" name="cep"  class="form-control" id="cep" aria-describedby="emailHelp" placeholder="CEP">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <div class="modal-footer">
                        <a href="clientes.php" type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-hand-point-left"></i>&nbsp;Voltar</a>
                        <button type="submit" role="button" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                    </div>

               
            </form>
        </div>
        <!-- Mapa -->
        <div class="col-md-7 border" style="margin-top: 13px;">
            <h3 style="text-align: center;">Google Maps</h3>
            <div class="form-group" id="map-view" style="text-align:center;">
            </div>
        </div>

    </div>
</div>