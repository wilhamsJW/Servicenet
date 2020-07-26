<?php include_once 'includes/header_inc.php'; ?>

<?php 
  if ( !isset($_SESSION["user"])) {  
    header("location:login.php");
  }                               

?>

<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="https://www.servicenet.com.br/" target="blank"><img width="200px" height="50px" src="img/logo_menu.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="modal" data-target="#ExemploModalCentralizado" href="#" id="nav1"><i class="fas fa-user-check"></i>&nbsp;Cadastrar Novo Cliente<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Modal Register-->
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

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do cliente</label>
                                        <input type="text" class="form-control" name="nome1" min="4" max="20" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome do cliente">
                                        <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
                                        <input type="text" class="form-control" name="telefone" min="9" max="30" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
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
                                        <input type="text" class="form-control" name="cep"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="CEP">
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
                    </div> <!-- End Modal Register -->

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" id="nav2"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="minhaarea2.php"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>




<?php include_once 'includes/footer_inc.php' ?>