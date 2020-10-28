<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
        	$a= rand(1,10);;
        	$x=1;   
    		while($x <= 10){
        		$res = $x * $a;
        		echo $a.' x '.$x.' = '.$res.'<br>';
        		$x++;
    		}
    	?>
    </body>
</html>