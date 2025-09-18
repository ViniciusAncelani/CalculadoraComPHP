<?php

class CalculadoraControler{

    public function inicializar(){
        require_once '/Model/CalculadoraModel.php';
        $c = new CalculadoraModel();
        $c -> setNumo1(0);
        $c -> setNumo2(0);
        $c -> setVisor(0);
        $_SESSION['calculadora'] = serialize($c);
    }

    public function inserirNumero($visor, $numero1){
        require_once './Model/CaculadoraModel.php';
        $c -> setNum1(0);
        $c -> setVisor(0);
        $r = $c-> addNumbersToVisor();
        if($r) $_SESSION['calculadora'] = serialize($c);
        return $c;
    }

    public function excluirNumero() {
        require_once './Model/CalculadoraModel.php';
        $c = new CalculadoraModel();
        $c -> setVisor();
        $c -> removerNumeroDoVisor();
        $_SESSION['calculadora'] = serialize($c);
    }

    public function removerUltimoNumero($visor) {

    }
}

?>