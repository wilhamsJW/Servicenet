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

<div class="container py-5" style="margin-top: 40px;" >
    <div class="container py-5">
        <div class="col-md-6 container clearfix">
            <fieldset id="formu">
                <form action="banco_de_dados/create.php" method="POST" class="py-">
                    <fieldset class="formulario">
                        <h1 class="text-center" id="font">Cadastro</h1>
                        <div class="form-group row" style="margin-top: 30px">
    
                            <div class="col-sm-12">
                                <input type="name" name="name" id="inpu" class="form-control" placeholder="Nome do usuário">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            
                            <div class="col-sm-12">
                                <input type="password" name="senha2" class="form-control" id="inputPassword3" placeholder="Senha">
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-lg btn-block" id="button" type="submit" value="Cadastrar">
                        </div>
                        <div style="margin-top: 5px;">
                            <input class="btn btn-lg btn-block" id="button" type="submit" value="Cadastrar com Facebook">
                        </div>
                        <div><a href="login.php">Tem uma conta? Conecte-se</a></div>
                    </fieldset>
                </form>
            </fieldset>
        </div>
    </div>
</div>
</span>
