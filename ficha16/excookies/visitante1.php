<?php
echo "<span style=='color:red;'><h3><b>**********************Pagina Visitante 1*************************************************</b></h3></span><br>";

$nome2=$_COOKIE['nome'];
$idade2=$_COOKIE['idade'];

echo "Nome: ".$_COOKIE['nome']."<br>";
echo "Idade: ".$_COOKIE['idade']."<br>";

echo "<br><br>";
echo "Nome: ".$nome2."<br>";
echo "Idade: ".$idade2;

echo "<a href='Formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='visitante1.php'><h5><b>Visitante1</b></h5></a>";
echo "<a href='visitante2.php'><h5><b>Visitante2</b></h5></a>";
?>