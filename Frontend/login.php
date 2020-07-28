<?php include_once 'includes/header_inc.php'; ?>
<?php include_once 'includes/login_inc.php'; ?>
<?php include_once 'includes/footer_inc.php'; ?>

<!-- Aviso: Não se coloca link de leitura com o banco de dados na página de login, o ideal é enviar pelo form action, e muito menos não se deve fazer isso se a session for iniciada por lá, pq dessa forma irá ficar smepre startando a session
link: < ?php include_once '../Backend/Database/read.php'; ?> -->