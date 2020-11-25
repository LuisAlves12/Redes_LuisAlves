<?php
    $valor = $_POST["chb_valor"];
    if($valor == 1){
        echo "Aluno MAU com nota de 1 valor";
    }
    else if($valor == 2){
        echo "Aluno MEDIOCRE com nota de 2 valor";
    }
    else if($valor == 3){
        echo "Aluno MÉDIO com nota de 3 valor";
    }
    else if($valor == 4){
        echo "Aluno BOM com nota de 4 valor";
    }
    else if($valor == 5){
        echo "Aluno MUITO BOM com nota de 5 valor";
    }
?>
