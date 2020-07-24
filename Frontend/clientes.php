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
        <th scope="col"><i class="fas fa-location-arrow"></i>&nbsp;Ação</th>


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
      <!-- Button to acrtive modal Edite -->
      <td><a class="btn btn-sm" data-toggle="modal" data-target="#ExemploModalCentralizado" style="color:white;background-color:#9a78e2" href="editar.php?id=<?php ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>

        <!-- Modal Edite-->
        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Edição de Cadastro de Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                <form class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom01">Nome</label>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="Mark" required>
                      <div class="valid-feedback">
                        Tudo certo!
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustom02">Telefone</label>
                      <input type="text" class="form-control" id="validationCustom02" placeholder="Telefone" value="Otto" required>
                      <div class="valid-feedback">
                        Tudo certo!
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationCustomUsername">Endereço</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <input type="Endereço" class="form-control" id="validationCustomUsername" placeholder="Endereço" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Por favor, escolha um número.
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom05">Número</label>
                      <input type="number" class="form-control" id="validationCustom05" placeholder="Número" required>
                      <div class="invalid-feedback">
                        Por favor, informe um CEP válido.
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom03">Cidade</label>
                      <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                      <div class="invalid-feedback">
                        Por favor, informe uma cidade válida.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom04">Estado</label>
                      <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                      <div class="invalid-feedback">
                        Por favor, informe um estado válido.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom04">País</label>
                      <input type="text" class="form-control" id="validationCustom04" placeholder="País" required>
                      <div class="invalid-feedback">
                        Por favor, informe País.
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="validationCustom05">CEP</label>
                      <input type="text" class="form-control" id="validationCustom05" placeholder="CEP" required>
                      <div class="invalid-feedback">
                        Por favor, informe um CEP válido.
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">Enviar</button>
                </form>



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar mudanças</button>
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