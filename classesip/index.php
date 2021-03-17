<?php include "css.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
	<title>Atividade 3</title>
</head>
<body style="color:white;background-color:black;">
	<h2 style="text-align:center;">Classes IP</h2>
	<h4>Insira um IP para verificar</h4>
	<form action="classe.php">
		<input type="text" name="a">
		<input type="text" name="b">
		<input type="text" name="c">
		<input type="text" name="d"><br><br>
		<input type="submit" value="Verificar">
	</form>
	<br>
	<h2 style="text-align:center;">Protocolos</h2>
	<h4>Seleciona um protocolo</h4>
	<form action="protocolo.php">
  		<select name="tipoprotocolo" id="cars">
		    <option value="DNS">DNS</option>
		    <option value="FTP">FTP</option>
		    <option value="HTTP">HTTP</option>
		    <option value="IP">IP</option>
  		</select>
  		<br><br>
  		<input type="submit" value="enviar">
	</form>
</body>
</html>