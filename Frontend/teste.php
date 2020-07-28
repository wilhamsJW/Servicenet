<?php include_once 'includes/header_inc.php';?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Falar com @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Falar com @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Falar com @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova mensagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Destinatário:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mensagem:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botão que acionou o modal
  var recipient = button.data('whatever') // Extrai informação dos atributos data-*
  // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
  // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
  var modal = $(this)
  modal.find('.modal-title').text('Nova mensagem para ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<!-- Modal Register 
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <form action="../Backend/Database/create.php" method="POST">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Novo Cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-title" style="text-align: center;">
                                        <p>(Após colocar o cep, tecle a tecla Tab e alguns campos e o mapa são carregados automaticamente.)</p>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do cliente</label>
                                            <input type="text" class="form-control" name="nome1" min="4" max="20" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do cliente">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
                                            <input type="text" id="telefone2" class="form-control" name="telefone" min="9" max="30" aria-describedby="emailHelp" placeholder="Telefone">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;Endereço</label>
                                            <input type="text" class="form-control" name="endereco" min="4" max="50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-list-ol"></i>&nbsp;Número</label>
                                            <input type="text" class="form-control" name="numero" min="1" max="10" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-city"></i>&nbsp;Cidade</label>
                                            <input type="text" class="form-control" name="cidade" min="4" max="20" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-flag"></i>&nbsp;Estado</label>
                                            <input type="text" class="form-control" name="estado" min="1" max="20" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-flag-usa"></i>&nbsp;País</label>
                                            <input type="text" class="form-control" name="pais" min="2" max="20" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</label>
                                            <input type="text" class="form-control" name="cep" id="cep2" aria-describedby="emailHelp" placeholder="CEP">
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                                    </div>
                                   
                                </div>
                            </div>

                        </form>
                    </div>  End Modal Register -->

  

<?php include_once 'includes/footer_inc.php' ?>