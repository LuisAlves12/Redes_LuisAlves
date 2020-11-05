<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            function turma($rapazes,$raparigas){
                $total=$rapazes + $raparigas;
                $percentagemrapazes=($rapazes /$total)*100;
                $percentagemraparigas=($raparigas /$total)*100;
                echo "<h2>Percentagem de rapazes na turma é de {$percentagemrapazes}</h2><br>";
                echo "<h2>Percentagem de rapazes na turma é de {$percentagemraparigas}</h2>";
            }
            turma(24,0);
        ?>
    </body>
</html>