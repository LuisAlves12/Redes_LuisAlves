<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            function area(){
                $r=10;
                $pi=3.14;
                $area= $pi * ($r**2); 
                echo "<h1>Area: {$area}</h1>";
            }
            area();
        ?>
    </body>
</html>