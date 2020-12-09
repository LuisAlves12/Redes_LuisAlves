<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Modulo 5</title>
        <meta charset="utf8">
    </head>
    <body>
        <?php
        if($_POST['txt_nome'] != null){
            $nome=$_POST['txt_nome'];
            $datadenascimento=$_POST['txt_data'];
            $anonasc= date("Y", strtotime("$datadenascimento"));
            $idade=2020 - $anonasc;
            echo "Você tem ".$idade." anos<br>";
            if($idade >=18){
                echo "Ja tem idade para votar <br>";
            }
        }
        else{
            include 'ex6.php';
        }
        ?>
    </body>
</html>