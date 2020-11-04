<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $pais="Portugal";
            $quarto=substr($pais,3,2);
            $total=strlen($pais);
            $main=strtoupper($pais);
            echo "<h1>O quarto caracter e quinto caracter é {$quarto}</h1>";
            echo "<h1>A quatidade total de caracters é {$total}</h1>";
            echo "<h1>{$main}</h1>";
        ?>
    </body>
</html>