<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            $SLB=array("nome_completo"=>"Sport Lisboa e Benfica","estadio"=>"Estádio da Luz","localidade"=>"Lisboa","pais"=>"Portugal");
            $SCP=array("nome_completo"=>"Sporting Clube de Portugal","estadio"=>"Estádio José de Alvalade","localidade"=>"Lisboa","pais"=>"Portugal");
            $FCP=array("nome_completo"=>"Futebol Clube do Porto","estadio"=>"Estádio do Dragão","localidade"=>"Portugal","pais"=>"Portugal");
            $CDA=array("nome_completo"=>"Clube Desportivo Das Aves","estadio"=>"Estádio do Clube Desportivo das Aves","localidade"=>"Vila Das Aves","pais"=>"Portugal");
            
            echo "<h1>SLB</h1><br>";
            echo "Nome completo »»» ";
            echo "$SLB[nome_completo]";
            echo "<br>";
            echo "Estadio »»» ";
            echo "$SLB[estadio]";
            echo "<br>";
            echo "Localidade »»» ";
            echo "$SLB[localidade]";
            echo "<br>";
            echo "Pais »»» ";
            echo "$SLB[pais]";

            echo "<br>";
            echo "<br>";

            echo "<h1>SCP</h1><br>";
            echo "Nome completo »»» ";
            echo "$SCP[nome_completo]";
            echo "<br>";
            echo "Estadio »»» ";
            echo "$SCP[estadio]";
            echo "<br>";
            echo "Localidade »»» ";
            echo "$SCP[localidade]";
            echo "<br>";
            echo "Pais »»» ";
            echo "$SCP[pais]";

            echo "<br>";
            echo "<br>";

            echo "<h1>FCP</h1><br>";
            echo "Nome completo »»» ";
            echo "$FCP[nome_completo]";
            echo "<br>";
            echo "Estadio »»» ";
            echo "$FCP[estadio]";
            echo "<br>";
            echo "Localidade »»» ";
            echo "$FCP[localidade]";
            echo "<br>";
            echo "Pais »»» ";
            echo "$FCP[pais]";

            echo "<br>";
            echo "<br>";

            echo "<h1>CDA</h1><br>";
            echo "Nome completo »»» ";
            echo "$CDA[nome_completo]";
            echo "<br>";
            echo "Estadio »»» ";
            echo "$CDA[estadio]";
            echo "<br>";
            echo "Localidade »»» ";
            echo "$CDA[localidade]";
            echo "<br>";
            echo "Pais »»» ";
            echo "$CDA[pais]";
        ?>
    </body>
</html>