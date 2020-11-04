<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $frase="Estou a aprender PHP na secundária";
            $troca=str_replace($frase,"Estou a aprender PHP na escola",$frase);
            echo "Frase nova: {$troca}";
        ?>
    </body>
</html>