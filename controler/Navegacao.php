<?php

    if(!isset($_SESSION)){
        session_start();
        require_once './Model/CalculadoraModel.php';
        $c = new CalculadoraModel();
        $c -> setNum1(0);
        $c -> setNum2(0);
        $c -> setVisor(0);
        $_SESSION['calculadora'] = serialize($c);
    }

    switch($_GET){

        case isset($_GET[null]):
            if($_SERVER['REQUEST_URI'] == "/calculadora/"){
        
                include_once "./View/calculadoraview.php";

            } else {
                header ("location:../");
            }
                break;
        }  

    function numero($visor, $valorBtn){
        require_once "./Controler/CalculadoraControler.php";
        $cControler = new CalculadoraControler();
        $cControler = -> inserirNumero($visor, $valorBtn);
        include_once "./View/CalculadoraView.php";
    }
?>