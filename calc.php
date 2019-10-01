<?php
    if(!empty($_GET['num_1']) && !empty($_GET['num_2']) && !empty($_GET['operacao'])){
        $num_1 = floatval($_GET['num_1']);
        $num_2 = floatval($_GET['num_2']);
        $operacao = $_GET['operacao'];

        switch ($operacao) {
            case '+':
                $resultado = $num_1 + $num_2;
                echo $num_1. " + " .$num_2 ." = " .$resultado;
                break;
            
            case '-':
                $resultado = $num_1 - $num_2;
                echo $num_1. " - " .$num_2 ." = " .$resultado;
                break;

            case '*':
                $resultado = $num_1 * $num_2;
                echo $num_1. " * " .$num_2 ." = " .$resultado;
                break;

            case '/':
                $resultado = $num_1 / $num_2;
                echo $num_1. " / " .$num_2 ." = " .$resultado;
                break;
        }
    } else {
        header("Location: index.php");
    }
?>