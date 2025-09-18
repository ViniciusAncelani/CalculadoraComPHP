<?php

class CalculadoraModel{
    private $num1;
    private $num2;
    private $visor;

    public function __construct($num1 = null, $num2 = null, $visor = null){
        $this -> num1 = $num1;
        $this -> num2 = $num2;
        $this -> visor = $visor;
    }

    public function getN1(){
        return $this-> num1 = $num1;
    }

     public function getN2(){
        return $this-> num2 = $num2;
    }

     public function getVisor(){
        return $this-> visor = $visor;
    }

    public function setNum1($num1){
        $this -> num1 = $num1;
    }

     public function setNum2($num2){
        $this -> num2 = $num2;
    }

     public function setVisor($visor){
        $this -> visor = $visor;
    }

    public function addNumbersToVisor(){
        if($this -> visor == 0){
            $this -> visor = $this-> num1;
        } else {
            $this -> visor = $this -> $visor.$this -> num1;          
        }
            return 1;
    }
}
?>