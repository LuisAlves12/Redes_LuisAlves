<?php
    $idade = $_POST["idade"];
    if($idade>0){
        if($idade <18){
            echo "Você tem ".$idade. " anos - é MENOR de idade.";
        }
        else if($idade >= 18 && $idade <=100){
            echo "Você tem ".$idade. " anos - é Maior de idade.";
        }
        else if($idade>100){
            echo "Você é um Dinossauro";
        }
    }
    else{
        echo "Caso impossivel";
    }
?>
