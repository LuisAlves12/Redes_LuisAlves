<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $nota=12;
            if($nota<10){
                echo 'Aluno <span style="color:#ff0000"> Reprovado </span> com ' .$nota. ' valores.';
                echo '<br> Deverá trabalhar mais para alcançar resultados positivos';
            }
            else if ($nota > 10 && $nota <=20){
                echo 'Aluno <span style="color:#00ff00"> Aprovado</span> com ' .$nota. ' valores.';
                echo '<br> Muito bom trabalho';
            }
        ?>
    </body>
</html>