<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
			$num = rand(0,100);
            $total = 0;
            while($total + $num < 1000){
                $total = $total + $num;
                $num = rand(0,100);
            }  
            echo "A soma total é de ".$total;
    	?>
    </body>
</html>