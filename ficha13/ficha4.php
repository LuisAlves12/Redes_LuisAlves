<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            function parimpar(){
                $numero=10;
                if($numero%2==0){
                   $parouimpar=TRUE;
                }
                else{
                   $parouimpar=False;
                }
                if($parouimpar==1){
                    echo "<h1>É par</h1><br>";
                    echo "<h3>O numero digitado é {$numero}</h3>";
                }
                else{
                    echo "<h1>É impar</h1>";
                    echo "<h3>O numero digitado é {$numero}</h3>";
                }
            }
            parimpar();
        ?>
    </body>
</html>