<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Link dos ícones (Usado em Botões) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">


    <title>Servicenet</title>
</head>

<body id="B">

    <div class="container py-5" style="margin-top: 40px;">
        <div class="container py-5">
            <div class="col-md-6 container clearfix">
                <fieldset id="formu">
                    <form action="banco_de_dados/create.php" method="POST" class="py-">
                        <fieldset class="formulario">
                            <h1 class="text-center" id="font">Cadastro</h1>
                            <div class="form-group row" style="margin-top: 30px">
                                <div class="col-sm-12">
                                    <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-user-alt"></i></span>
                                        <input type="name" name="name" id="inpu" class="form-control" placeholder="Nome do usuário">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-sm-12">
                                    <div class="input-group-prepend"><span class="input-group-text bg-white px-4 border-md border-right-0"><i class="fas fa-unlock-alt"></i></span>
                                        <input type="password" name="senha2" class="form-control" id="inputPassword3" placeholder="Senha">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-primary btn-block py-2 ">
                                    <span class="font-weight-bold">Cadastrar</span>
                                </a>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-primary btn-block py-2">
                                    <span class="font-weight-bold" id="font"><i class="fab fa-facebook"></i>&nbsp;Continue com Facebook</span>
                                </a>
                            </div>

                            <div id="font">Tem um conta?&nbsp;<a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;Conecte-se</a></div>
                        </fieldset>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
    </span>