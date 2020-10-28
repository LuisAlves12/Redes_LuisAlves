<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $a=15;
            $b=10;
            $c=12;
            $media=round(($a+$b+$c)/3,1);
            if($media >= 9.5){
                echo "Aluno aprovado com ".$media." de media";
            }
            else if ($media > 8 && $media < 9.5){
               echo "Aluno sera submetido a uma prova de recuperação."; 
            }
            else if ($media <=8){
                echo "Aluno reprovado com baixa média.";
            }
        ?>
    </body>
</html>