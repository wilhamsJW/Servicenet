<?php include_once 'includes/header_inc.php' ?>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Falar com @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Falar com @fat</button>

<!-- Modal Editar -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="../Backend/Database/update.php" method="POST">
         <textarea name="id" ></textarea>


 


          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do Cliente</label>
              <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nome do cliente">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;Endereço</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-list-ol"></i>&nbsp;Número</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-city"></i>&nbsp;Cidade</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-flag"></i>&nbsp;Estado</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-flag-usa"></i>&nbsp;País</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</label>
              <input type="text" class="form-control" id="cep" aria-describedby="emailHelp" placeholder="CEP">
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
              <button type="submit" role="button"  class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
            </div>
          </div>
        </form>
     
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
  modal.find('.modal-title').text('Altere os dados do cliente ' + recipient)
  modal.find('.modal-body textarea').val(recipient)
})
</script>


<?php include_once 'includes/footer_inc.php' ?>