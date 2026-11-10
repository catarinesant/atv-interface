<?php

require_once "FuncionarioInterface.php";

class FuncionarioCLT implements FuncionarioInterface {

    public function contratar() {
        echo "Funcionário CLT contratado!<br>";
    }

    public function demitir() {
        echo "Funcionário CLT demitido!<br>";
    }

}