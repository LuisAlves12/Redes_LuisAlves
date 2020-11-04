<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $a=23;
            $b=45;
            $c=12;
            $x=15;
            $y=13;
            $preco=78;
            echo "A soma de A com B é ". ($a + $b); 
            echo "<br>";
            echo "<br>";
            echo "A média entre A, B e C é de ". (($a+$b+$c)/3);
            echo "<br>";
            echo "<br>";
            echo "O quociente de X e Y é ". round($x/$y,0);
            echo "<br>";
            echo "<br>";
            echo "O resto de X e Y é ". ($x % $y) / $y;
            echo "<br>";
            echo "<br>";
            echo "O valor da reparação com IVA é de ". ($preco + ($preco * 0.23));
        ?>
    </body>
</html>