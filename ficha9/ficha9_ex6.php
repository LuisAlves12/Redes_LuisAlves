<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
			$a = rand(0,50);
            while($a != 37){
                echo $a.'<br>';
                $a = rand(0,50);
            }  
            echo $a;
    	?>
    </body>
</html>