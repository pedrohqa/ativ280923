<?php
    $num1 = 2;
    $num2 = 4;
    $num3 = 6;
    $num4 = 8;

    //Resultado igual a 3
    $resposta1 = ++$num2 - $num1;
    echo $resposta1;
    echo "<br>";

    //Resultado igual a 8
    $resposta2 = $num3-- + $num1;
    echo $resposta2;
    echo "<br>";

    //Resultado igual a 9
    $resposta3 = --$num1 + $num4;
    echo $resposta3;
    echo "<br>";
?>
