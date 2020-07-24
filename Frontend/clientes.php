<?php include_once 'includes/header_inc.php' ?>
<?php include_once 'includes/menu_inc.php' ?>

<div class="container" style="margin-top: 40px;">
    <h2 id="font">Lista de Clientes</h2>


    <table class="table table-striped">
        <thead>
            <tr>

                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Número</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">País</th>
                <th scope="col">CEP</th>
                <th scope="col">Ação</th>


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
            <td><a class="btn btn-sm" style="color:white;background-color:#9a78e2" href="edite.php?id=<?php ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
                <a class="btn btn-danger btn-sm" style="color:white;" href="connections_/delete.php?id=<?php  ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
            </td>

        </tr>
        </tr>


    </table>
</div>


<?php include_once 'includes/footer_inc.php' ?>