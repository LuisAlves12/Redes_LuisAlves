<?php
    $produto=1;
    $soma=0;
    for($i=0;$i<20;$i++){
        $numero=rand(1,10000);
        $vetor[$i]=$numero;
    }
    for($i=0;$i<20;$i++){
        $produto = $produto * $vetor[$i];
        $soma=$soma+$vetor[$i];
    }
    $media=$soma/20;
    echo "<h4>O maior numero é: ".max($vetor)."<br><br></h4>";
    echo "<h4>O maior numero é: ".min($vetor)."<br><br></h4>";
    echo "<h4>O produto deles é: ".$produto. "<br><br></h4>";
    echo "<h4>A média deles é: ".$media. "<br></h4>";
?>