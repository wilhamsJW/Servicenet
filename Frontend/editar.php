<?php include_once 'includes/header_inc.php';?>
<?php include_once 'includes/menu.php';?>



<div class="container" style="width: 550px;">
    <h3 style="margin-top: 10px;">Formulário de edição de clientes</h3>
    <form action="../Backend/Database/update.php" method="POST">


        <?php
        $id = $_GET['id'];

        $sql = "SELECT * FROM  `clientes` WHERE id = $id";
        $query = mysqli_query($conecta, $sql);
        while ($array = mysqli_fetch_assoc($query)) {
            $id = $array['id'];
            $nome1 = $array['nome1'];
            $telefone = $array['telefone'];
            $endereco = $array['endereco'];
            $numero = $array['numero'];
            $cidade = $array['cidade'];
            $estado = $array['estado'];
            $pais = $array['pais'];
            $cep = $array['cep'];

        ?>




            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-user"></i>&nbsp;Nome do Cliente</label>
                    <input type="text" name="nome1" value="<?php echo $nome1 ?>" class="form-control" aria-describedby="emailHelp" placeholder="Nome do cliente">
                    <small id="emailHelp" class="form-text text-muted"></small>
                    <input  name="id" value="<?php echo $id ?>" style="display:none">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-phone-square-alt"></i>&nbsp;Telefone</label>
                    <input type="number" name="telefone" value="<?php echo $telefone ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefone">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-address-card"></i>&nbsp;Endereço</label>
                    <input type="text" name="endereco" value="<?php echo $endereco ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-list-ol"></i>&nbsp;Número</label>
                    <input type="number" name="numero" value="<?php echo $numero ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-city"></i>&nbsp;Cidade</label>
                    <input type="text" name="cidade" value="<?php echo $cidade ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Cidade">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-flag"></i>&nbsp;Estado</label>
                    <input type="text" name="estado" value="<?php echo $estado ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Estado">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-flag-usa"></i>&nbsp;País</label>
                    <input type="text" name="pais" value="<?php echo $pais ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="País">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1"><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;CEP</label>
                    <input type="text" name="cep" value="<?php echo $cep ?>" class="form-control" id="cep" aria-describedby="emailHelp" placeholder="CEP">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>

                <div class="modal-footer">
                    <a href="clientes.php" type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-hand-point-left"></i>&nbsp;Voltar</a>
                    <button type="submit" role="button" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar mudanças</button>
                </div>
            </div>
        <?php } ?>
    </form>
</div>
</div>


<?php include_once 'includes/footer_inc.php' ?>