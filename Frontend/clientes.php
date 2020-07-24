<?php include_once 'includes/header_inc.php' ?>
<?php include_once 'includes/menu_inc.php' ?>

<div class="container" style="margin-top: 40px;">
  <h2 id="font">Lista de Clientes</h2>

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
    <tr>

    <tr>

      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <td><?php   ?></td>
      <!-- Button to active modal Edite -->
      <td><a class="btn btn-sm" data-toggle="modal" data-target="#ExemploModalCentralizado1" style="color:white;background-color:#9a78e2" href="editar.php?id=<?php ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>

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
                

                




              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
                <button type="button" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
              </div>
            </div>
          </div>
        </div> <!-- End Modal Edite -->


        <!-- Button to activate modal delete -->
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExemplo" style="color:white;">
          <i class="far fa-trash-alt"></i>&nbsp;Excluir
        </button>
        <!-- Modal -->
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
</table>
</div>


<?php include_once 'includes/footer_inc.php' ?>