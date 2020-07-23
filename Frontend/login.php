<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Servicenet</title>
  </head>
<body id="B">
<div class="container py-5" style="margin-top: 40px;">
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <form action="banco_de_dados/create.php" method="POST" class="py-">
                    <fieldset class="formulario">
                        <h1 class="text-center" id="font">Login</h1>
                        <div class="form-group row" style="30px">
                            <label for="inputEmail3" id="font" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" id="font" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" name="senha2" class="form-control" id="inputPassword3" placeholder="Senha">
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <input class="btn" id="button" type="submit" value="Entrar">
                        </div>
                        <div><a href="index.php">Cadastrar nova conta</a></div>
                    </fieldset>
                </form>
            </fieldset>
        </div>
    </div>
</div>
</span>
</body>
<?php include_once 'includes/footer_inc.php' ?>