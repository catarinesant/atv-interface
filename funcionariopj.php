<?php

require_once "FuncionarioInterface.php";

class FuncionarioPJ implements FuncionarioInterface {

    public function contratar() {
        echo "Funcionário PJ contratado!<br>";
    }

    public function demitir() {
        echo "Funcionário PJ demitido!<br>";
    }

}