<?php
    $valor1=rand(1,10);
    $valor2=rand(2,10);
    $valor3=rand(3,10);
    $valor4=rand(4,10);
    $num1= $_POST["num".$valor1];
    $num2= $_POST["num".$valor2];
    $num3= $_POST["num".$valor3];
    $num4= $_POST["num".$valor4];
    echo "Valores obtidos foram: <br>";
    echo "<h3>".$num1."</h3>";
    echo "<h3>".$num2."</h3>";
    echo "<h3>".$num3."</h3>";
    echo "<h3>".$num4."</h3>";
    $soma= $num1+$num2+$num3+$num4;
    echo "A soma dos valores é: ".$soma. "<br>";
    $media=$soma/4;
    echo "A media dos numeros é: ".$media;
?>
