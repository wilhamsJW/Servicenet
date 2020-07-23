<?php include_once 'includes/header_inc.php' ?>

<div class="container" style="margin-top: 40px;">
  <div style="text-align: right">
    <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
  </div>
  <h2>Lista de Clientes</h2>


  <table class="table table-striped">
    <thead>
      <tr>

        <th scope="col">Número do Produto</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
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
      <td><a class="btn btn-warning btn-sm" style="color:white;" href="edite.php?id=<?php ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:white;" href="connections_/delete.php?id=<?php  ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>

    </tr>
  </tr>


  </table>
</div>


<?php include_once 'includes/footer_inc.php' ?>