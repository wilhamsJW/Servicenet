<?php include_once 'includes/header_inc.php' ?>
<?php include_once 'includes/menu_inc.php' ?>
<?php include_once '../Backend/Database/read.php' ?>

<?php
if (!isset($_SESSION["user"])) {
  header("location:login.php");
}

?>

<?php
if (isset($_SESSION["user"])) {
?>
  <div class="container" id="saudacao" style="margin-top: 10px; font-weight:bold;">
    <h3><?php echo "Bem Vindo(a)" . " " . $_SESSION["user"] . "!" ?></h3>
  </div>

<?php } ?>


<div class="container">
  <h5 style="color: black;font-weight:bold;margin-top:20px">Lista de Clientes</h5>

  <table class="table table-striped">
    <thead>
      <tr>

        <th scope="col"><i class="fas fa-user"></i>&nbsp;Nome</th>
        <th scope="col"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</th>
        <th scope="col"><i class="fas fa-address-card"></i>&nbsp;Endereço</th>
        <th scope="col"><i class="fas fa-list-ol"></i>&nbsp;Número</th>
        <th scope="col"><i class="fas fa-city"></i>&nbsp;Cidade</th>
        <th scope="col"><i class="fas fa-flag"></i>&nbsp;Estado</th>
        <th scope="col"><i class="fas fa-flag-usa"></i>&nbsp;País</th>
        <th scope="col"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</th>
        <th scope="col"><i class="fas fa-pen-nib"></i>&nbsp;Ação</th>


      </tr>
    </thead>
    <tbody>

      <?php
      while ($array = mysqli_fetch_assoc($query)) {
        $id = $array['id'];
      ?>


        <tr>

          <td><?php echo $array['nome1'] ?></td>
          <td><?php echo $array['telefone'] ?></td>
          <td><?php echo $array['endereco'] ?></td>
          <td><?php echo $array['numero'] ?></td>
          <td><?php echo $array['cidade']  ?></td>
          <td><?php echo $array['estado']  ?></td>
          <td><?php echo $array['pais'] ?></td>
          <td><?php echo $array['cep'] ?></td>
          <!-- Button to active modal Edite -->
          <td><a class="btn btn-sm" data-toggle="modal" href="editar.php?id=<?php echo $id ?>" data-target="#ExemploModalCentralizado1" style="color:white;background-color:#9a78e2" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a></td>
          <!-- Button to active modal Delete -->
          <td>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExemplo" style="color:white;">
              <i class="far fa-trash-alt"></i>&nbsp;Excluir
            </button>
          </td>

        </tr>

      <?php } ?>
    </tbody>
  </table>




  <!-- Modal Edite-->
  <div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="TituloModalCentralizado">Edição de Cadastro de Clientes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do cliente</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do cliente">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;Endereço</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-list-ol"></i>&nbsp;Número</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-city"></i>&nbsp;Cidade</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-flag"></i>&nbsp;Estado</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-flag-usa"></i>&nbsp;País</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CEP">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
            <a type="submit" role="button" href="../Backend/Database/update.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</a>
          </div>
        </div>
      </div>
    </div> <!-- End Modal Edite -->



    <!-- Modal to activate modal delete -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
            <a class="btn btn-sm btn-secondary" href="clientes.php" role="button"><i class="fas fa-times-circle"></i>&nbsp;Não!</a>
            <a class="btn btn-sm btn-danger" class="btn btn-primary" href="../Backend/Database/delete.php?id=<?php echo "3" ?>"><i class="far fa-trash-alt"></i>&nbsp;Sim, quero excluir!</a>
          </div>
        </div>
      </div>
    </div> <!-- End Modal Delete -->
  </div>
</div>
</div>
</div>
</td>
</tr>
</tr>

</div>

</div>


<!--<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
  <a type="submit" role="button" href="../Backend/Database/update.php?id=<?php echo $id ?>" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</a>
</div>-->
<?php include_once 'includes/footer_inc.php' ?>

<!--  <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
              </tr>
            </thead>

            <tbody>
            < ?php
              while ($array = mysqli_fetch_assoc($query)) {
                $id = $array['id'];
              ?>

                 <tr> 
                <td><button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button></td>
                <td><a type="submit" role="button" href="../Backend/Database/update.php?id=< ?php echo $id ?>" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</a></td>
                 </tr>

              < ?php } ?>
            </tbody>  -->