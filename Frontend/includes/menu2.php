<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="https://www.servicenet.com.br/" target="blank"><img width="200px" height="50px" src="img/logo_menu.jpg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="clientes.php" id="nav1"><i class="fas fa-user-check"></i>&nbsp;Lista de Clientes<span class="sr-only">(current)</span></a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="nav-link" href="clientes.php" id="nav2"><i class="fas fa-hand-point-left"></i>&nbsp;Voltar</a>
                    </li>-->    
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" id="nav2"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </li>         
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--
<srcipt type="text/javascript" src="js/mask_jquery.js"></srcipt>
<script type="text/javascript" src="js/mask.js"></script> -->

<!-- Foi obrigatório colocar o include footer, pois o Jquery precisa ser iniciado tanto no menu como na página clientes.php para que o modal delete consiga enviar a $id para o db -->

<?php include_once 'footer_inc.php'; ?>