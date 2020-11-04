<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
        <?php
            //Converte para maisculos a string;
            $nome="Funções de manipulação de string no PHPs";
            $nome_maisculo=strtoupper($nome);
            echo $nome_maisculo;

            //Converte para minisculas a string;
            $nome="Funções de manipulação de string no PHPs";
            $nome_maisculo=strtolower($nome);
            echo $nome_maisculo;

            //Retorna um fragmento da string;
            $nome="Funções de manipulação de string no PHPs";
            $parte=substr($nome,8);
            echo $parte;

            //Retorna um fragmento da string;
            $nome="Linha de Código";
            $parte=substr($nome,0,5);
            echo $parte;

            //Repete o numero de vezes do argumento inteiro;
            $repetido=str_repeat("0",5);
            echo $repetido;

            //Qunatidade de caracters;
            $qtd_char=strlen("Linha de Código");
            echo $qtd_char;

            //Substitui os caracters numa string;
            $texto="Olá, mundo.";
            $novo_texto=str_replace("mundo","leitor",$texto);
            echo $novo_texto;

            //Devolve a posição do texto de pesquisa no texto a pesquisar;
            $texto="Bem vindo ao Linha de Código!";
            $pos=strpos($texto,"Código");
            echo $pos;
        ?>
    </body>
</html>