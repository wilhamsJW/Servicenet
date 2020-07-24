<?php 

$utf8 = header("Content-Type: text/html; charset=utf-8");
$conecta = new mysqli('localhost', 'root', '', 'db_lista_clientes');
$conecta->set_charset('utf8');

?>