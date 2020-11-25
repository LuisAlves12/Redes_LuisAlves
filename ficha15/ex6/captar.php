<?php
    $num1 = $_POST["num1"];
    $descontos=$num1 * 0.15;
    $cantina=$num1 * 0.10;
    $transporte=$num1 * 0.05;
    $liquido=$num1 - $descontos - $cantina - $transporte;
    echo "O salario bruto do trabalhador é ".$num1. "<br>";
    echo "Descontos do trabalhador é de ".$descontos. "<br>";
    echo "Cantina do trabalhador é ".$cantina. "<br>";
    echo "Transporte do trabalhador é ".$transporte. "<br>";
    echo "Liquido do trabalhador é ".$liquido. "<br>";
?>
