<?php
    for($i=0;$i<15;$i++){
        $numero=rand(1,100);
        $vetor[$i]=$numero;
    }
    for($i=0;$i<15;$i++){
        echo "A posição do ".$vetor[$i]. " é ".$i."<br>";
        if($vetor[$i] % 2 == 0){
            echo "Número par <br><br><br>";
        }
        else{
            echo "Número impar <br><br><br>";
        }
    }
?>