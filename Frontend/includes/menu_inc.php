<?php include_once 'includes/header_inc.php' ?>

<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img width="200px" height="50px" src="img/logo_menu.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" data-toggle="modal" data-target="#ExemploModalCentralizado" href="#" id="nav1"><i class="fas fa-user-check"></i>&nbsp;Cadastrar Cliente<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Modal Register-->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastrar Novo Cliente</h5>
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
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i>&nbsp;Fechar</button>
                                    <button type="button" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Modal Register -->

                    <li class="nav-item">
                        <a class="nav-link" href="login.php" id="nav2"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
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