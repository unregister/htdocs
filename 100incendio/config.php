<?php/*
 * Arquivo: config.php
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Configuracoes da conexao com o BD
 * Parametros: host, user, password, name
 */?>
 
<?php
//CONEXAO BD
define('HOST', 'localhost');
define('BD_USER', 'root'); 
define('BD_PASS', 'root'); 
define('BD_NAME', 'users'); 

mysql_connect(HOST, BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>