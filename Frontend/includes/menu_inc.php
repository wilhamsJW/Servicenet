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
                        <a class="nav-link" href="index.php" id="nav1"><i class="fas fa-user-check"></i>&nbsp;Cadastrar Cliente<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login2.php" id="nav2"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
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