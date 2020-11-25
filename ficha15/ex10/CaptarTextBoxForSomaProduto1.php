<?php
    $soma=0;
    $produto=1;
    if(count($_POST)){
        if(is_numeric($_POST["rbt_valor"]) && $_POST["rbt_valor"] >= 0){
            $Fim=$_POST["rbt_valor"];
            for($i=1;$i<=$Fim;$i++){
                echo $i. " ";
                $soma = $soma + 1;
                $produto = $produto * $i;
            }
            echo "<br>";
            echo "<br>";
            echo "Soma = ".$soma;
            echo "<br>";
            echo "<br>";
            echo "Produto = ".$produto;
        }
        else{
            echo "Introduza um valor numerico e positivo.";
        }
    }
?>
