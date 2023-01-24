<?php
  // configuracoes
  ini_set('default_charset','UTF-8');
  ini_set ( 'display_errors' , 0);
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  error_reporting(E_ALL);

// includes
include './Views/Container-inicio.php';
include './Routes/rotas.php';
/* include './Config/conexao.php'; */

#caso escolha uma das opções manda pra pagina especifica.
getRotas(@$_REQUEST["pagina"]);


?>
