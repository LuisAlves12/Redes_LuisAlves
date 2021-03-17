<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
	<title>Atividade 3</title>
</head>
<body style="color:white;background-color:black;">
<?php 
	$classe_a=$_GET['classe_a'];
	$classe_b=$_GET['classe_b'];
    $classe_c=$_GET['classe_c'];
    $classe_d=$_GET['classe_d'];

    if($classe_a > 0 && $classe_a < 255){
        $a = $classe_a; 

        if($classe_b > 0 && $classe_b < 255){
            $b = $classe_b;

            if($classe_c > 0 && $classe_c < 255){
                $c = $classe_c; 

                if($classe_d > 0 && $classe_d < 255){
                    $d = $classe_d; 
                }
                else{
                    echo 'Volte a página inicial';
                }
            }
            else{
                echo 'Volte a página inicial';
            } 
        }
        else{
            echo 'Volte a página inicial';
        }
    }
    else{
        echo 'Volte a página inicial';
    }




    echo '<br><br>';
	echo"<a href='index.php'>Pagina Inicial</a>";
?>