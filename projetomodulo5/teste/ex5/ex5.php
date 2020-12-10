<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Modulo 5</title>
        <meta charset="utf8">
    </head>
    <body>
        <?php
            $diasdasemana=array('domingo','segunda-feira','terça-feira','quarta-feira','quinta-feira',
            'sexta-feira','sábado');
            $meses=array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro',
            'Outubro','Novembro','Dezembro');
        ?>
        <form action="resultado.php" method="post">
            <select name="diadasemana">
            <?php
            for($i=0;$i<7;$i++){
                echo "<option value='".$diasdasemana[$i]."'>$diasdasemana[$i]</option>";
            }
            ?>
            </select>
            <select name="mes">
            <?php
            for($i=0;$i<12;$i++){
                echo "<option value='".$meses[$i]."'>$meses[$i]</option>";
            }
            ?>
            </select>
            <td><input type="submit" name="btn_enviar" value="Enviar"></td>
    </body>
</html>