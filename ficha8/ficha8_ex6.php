<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
    <?php
    $numero = 1;
    $pararLoop = rand(1,30);
    while($numero != $pararLoop) {
        echo $numero."<br>";
        $numero++;
    }
?>
    </body>
</html>