<?php
    $booleano1 = true;
    $booleano2 = false;
    $booleano3 = true;

    if ($booleano1 and $booleano2) { 
        echo "Verdadeiro";
        echo "<br>";
    } else {
        //Resultado falso pois os valores das vari@veis so diferentes
        echo "Falso";
        echo "<br>";
    }

    if ($booleano1 or $booleano2) {
        //Resultado verdadeiro pois uma das variveis verdadeira
        echo "Verdadeiro";
        echo "<br>";
    } else {
        echo "Falso";
        echo "<br>";
    }

    if ($booleano1 xor $booleano3) { 
        echo "Verdadeiro";
        echo "<br>";
    } else {
        //Resultado é falso pois os valores de ambas as variveis so verdadeiras 
        echo "Falso";
        echo "<br>";
    }

    if (!$booleano2) {
        //Resultado verdadeiro pois o valor da vari vel falso
        echo "Verdadeiro";
        echo "<br>";
    } else {
        echo "Falso";
        echo "<br>";
    }

    if ($booleano1 && $booleano3) {
    //Resultado é verdadeiro pois ambos os valores das variaveis são veradeiras
        echo "Verdadeiro";
        echo "<br>";
    } else {
        echo "Falso";
        echo "<br>";
    }

    if (!$booleano1 || $booleano3) {
        echo "Verdadeiro";
        echo "<br>";
    } else {
        //Resultado é falso, pois o valor de ambas as variaveis foram invertidas para falso
        echo "Falso";
        echo "<br>";
    }
?>