<?php include_once '../Backend/Database/connection.php'; ?>
<?php include_once '../Backend/Database/read.php'; ?>
<!-- Proteção das páginas -->
<?php
if (!isset($_SESSION['user'])) {
    header("location:login.php");
}
?>


<div class="container">
    <div class="">

        <!-- Saudação ao usuário -->
        <?php
        if (isset($_SESSION["user"])) {
        ?>
            <div class="container" id="saudacao" style="margin-top: 10px; font-weight:bold;">
                <h3><?php echo "Bem Vindo(a)," . " " . $_SESSION["user"] . "!" ?></h3>
            </div>

        <?php } ?>

        <!-- Inicio da tabela -->
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
                    <th scope="col"></th>

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
                        <td><a class="btn btn-sm" href="editar.php?id=<?php echo $id ?>" data-target="#ExemploModalCentralizado1" style="color:white;background-color:#9a78e2" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a></td>
                        <!-- Button to active modal Delete -->
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $id ?>" style="color:white;">
                                <i class="far fa-trash-alt"></i>&nbsp;Excluir
                            </button>
                        </td>

                    </tr>

                <?php } ?>
            </tbody>
        </table>

        </td>
        </tr>
        </tr>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja excluir?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="../Backend/Database/delete.php" method="POST">
                    <textarea name="id" style="display:none;"></textarea>

                    <div class="modal-footer">
                        <a class="btn btn-sm btn-secondary" href="clientes.php" role="button"><i class="fas fa-times-circle"></i>&nbsp;Não!</a>
                        <button type="submit" class="btn btn-sm btn-danger" class="btn btn-primary" href="../Backend/Database/delete.php?id=<?php echo $id ?>"><i class="far fa-trash-alt"></i>&nbsp;Sim, quero excluir!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Botão que acionou o modal
        var recipient = button.data('whatever') // Extrai informação dos atributos data-*
        // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
        // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
        var modal = $(this)
        modal.find('.modal-body textarea').val(recipient)
    })
</script>