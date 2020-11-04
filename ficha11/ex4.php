<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $a=array("a"=>"maçã","b"=>"banana");
            $b=array("a"=>"kiwi","b"=>"ananás","c"=>"morango");
            $juntosa=array_merge($a,$b);
            $juntosb=array_merge($b,$a);
            echo "<h1> Junção de A com B é: </h1>";
            print_r($juntosa);
            echo "<br>";
            echo "<br>";
            echo "<h1>Junção de b com a é: </h1>";
            print_r($juntosb);
        ?>
    </body>
</html>