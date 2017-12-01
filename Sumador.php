<?php

class sumar {

    function sumar() {
        $val1 = $_REQUEST["a"];
        $val2 = $_REQUEST["b"];
        $v1 = $val1 + $val2;
        echo "El resultado es:";
        for ($i = 0; $i < $v1 + 1; $i++) {
            echo $v1 . '<br>';
        }
    }

}

$miobjeto = new Procesador();
$miobjeto->procesar();
?>


