<?php

require_once "FuncionarioCLT.php";
require_once "FuncionarioPJ.php";

// Criando os funcionários
$clt = new FuncionarioCLT();
$pj = new FuncionarioPJ();

// Testando CLT
$clt->contratar();
$clt->demitir();

// Testando PJ
$pj->contratar();
$pj->demitir();

?>