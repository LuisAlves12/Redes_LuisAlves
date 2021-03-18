<?php include "css.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
	<title>Atividade 3</title>
</head>
<body style="color:white;background-color:black;">
	<h2 style="text-align:center;">Protocolos</h2>
	<h4>Seleciona um protocolo</h4>
	<form action="processa_protocolo.php">
  		<select name="tipoprotocolo" id="cars">
		    <option value="DNS">DNS</option>
		    <option value="FTP">FTP</option>
		    <option value="HTTP">HTTP</option>
		    <option value="IP">IP</option>
  		</select>
  		<br><br>
  		<input type="submit" value="enviar">
	</form>
	<br><br>
	<a href='index.php'>Pagina Inicial</a>
</body>
</html>