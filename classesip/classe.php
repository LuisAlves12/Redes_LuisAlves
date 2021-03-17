<?php include "css.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
	<title>Atividade 3</title>
</head>
<body style="color:white;background-color:black;">
<?php 
	if($_GET['a'] <= 255 && $_GET['b'] <= 255 && $_GET['c'] <= 255 && $_GET['d'] <= 255 && $_GET['a'] >= 0 && $_GET['b'] >= 0 && $_GET['c'] >= 0 && $_GET['d'] >= 0){
        $endereço = array(
            'a' => $_GET['a'],
            'b' => $_GET['b'],
            'c' => $_GET['c'],
            'd' => $_GET['d']
        );
    }
    else{
        echo "Ip Inválido";
        return;
    }
    


    echo '<br><br>';
	echo"<a href='index.php'>Pagina Inicial</a>";
?>