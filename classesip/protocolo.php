<?php include "css.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
	<title>Atividade 3</title>
</head>
<body style="color:white;background-color:black;">
<?php 
	$tipoprotocolo=$_GET['tipoprotocolo'];
	if($tipoprotocolo=="DNS"){
		echo"DNS é o protocolo utilizado para associar a cada endereço IP um nome,
        pois desta forma é mais fácil de ser memorizado pelos utilizadores. 
        Por exemplo, www.portoeditora.pt,  poderá,corresponder ao endereço 
        IP 192.16831.32.";
	}
	else if($tipoprotocolo=="FTP"){
		echo"FTP é o protocolo utilizado para a transferência de ficheiros. 
        Serve para fazermos o download ou upload de ficheiros de ou para 
        servidores FTP, aquele cujo endereço começa por ftp://.";
	}
	else if($tipoprotocolo=="HTTP"){
		echo"HTTP é o protocolo utilizado para controlar a comunicação entre o servidor
        de Internet e o browser, ou seja, serve de suporte à World Wide Web. 
        É o que nos permite escrever na Barra de Endereços do nosso browser
        um endereço URL [Uniform Resource Locator] e rapidament receber a página 
        Web correspondente.";
	}
	else if($tipoprotocolo=="IP"){
		echo" IP é o protocolo responsável por estabelecer a ligação entre os 
        computadores emissor e recetor para que a informação não se perca na rede.";
	}
    echo '<br><br>';
	echo"<a href='index.php'>Pagina Inicial</a>";
?>