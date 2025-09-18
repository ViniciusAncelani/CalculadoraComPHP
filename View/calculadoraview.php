<?php

    require_once "/.View/header.php";

?>


    <table class = "Calculator">
            <tr>
                <td colspan="4"><input type="text" id="visor" value = "<?php echo unserialize($_SESSION['Calculadora'])-> getVisor();?>" readonly></td>
            </tr>

            <tr>
                <td><button class="btn" id="btn7">7</button></td>
                <td><button class="btn" id="btn8">8</button></td>
                <td><button class="btn" id="btn9">9</button></td>
                <td><button class="btn" id="btnDiv">/</button></td>
            </tr>

            <tr>
                <td><button class="btn" id="btn4">4</button></td>
                <td><button class="btn" id="btn5">5</button></td>
                <td><button class="btn" id="btn6">6</button></td>
                <td><button class="btn" id="btnMult">*</button></td>
            </tr>

            <tr>
                <td><button class="btn" id="btn1">1</button></td>
                <td><button class="btn" id="btn2">2</button></td>
                <td><button class="btn" id="btn3">3</button></td>
                <td rowspan="2"><button class="btn" id="btnIgual">=</button></td>
            </tr>

             <tr>
                <td><button class="btn" id="btn0">0</button></td>
                <td><button class="btn" id="btnPonto">.</button></td>
                <td><button class="btn" id="btnC">C</button></td>
            </tr>
    </table>
<?php

    /*Required - código obrigatório a ser requisitado, uma vez que a página requerida não exista ou tenha erro de codificação
     a página atual não executa.

    include - inclui o código de uma página em outra se a página contiver erros ou não existir não executa a parte do código
     incluida a página que chamou continua executando.

    parametro opcional - _once: apenas uma vez.
    */

    require_once "./header.php";
    
    require_once "./footer.php";
?>
